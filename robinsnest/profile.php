<?php
require_once 'header.php';

if (!$loggedin) {
    die("</div></body></html>");
}

$success = "";

// Fetch existing profile
$result = querySql("SELECT * FROM profiles WHERE user = ?", [$user]);

// Handle profile text save
if (isset($_POST['text'])) {
    $text = sanitizeString($_POST['text']);
    $text = preg_replace('/\s\s+/', ' ', $text);

    if ($result->rowCount()) {
        querySql(
            "UPDATE profiles SET text = ? WHERE user = ?",
            [$text, $user]
        );
    } else {
        querySql(
            "INSERT INTO profiles (user, text) VALUES (?, ?)",
            [$user, $text]
        );
    }

    $success = "<div class='alert alert-success'>Profile updated successfully.</div>";
} else {
    if ($result->rowCount()) {
        $row  = $result->fetch();
        $text = stripslashes($row['text']);
    } else {
        $text = "";
    }
}

$text = stripslashes(preg_replace('/\s\s+/', ' ', $text));

/*
|--------------------------------------------------------------------------
| Handle profile image upload
|--------------------------------------------------------------------------
*/
if (
    isset($_FILES['image']['name']) &&
    $_FILES['image']['name'] !== "" &&
    $_FILES['image']['error'] === UPLOAD_ERR_OK
) {
    $saveto = "$user.jpg";
    move_uploaded_file($_FILES['image']['tmp_name'], $saveto);

    $typeok = true;

    switch ($_FILES['image']['type']) {
        case "image/gif":
            $src = imagecreatefromgif($saveto);
            break;
        case "image/jpeg":
        case "image/pjpeg":
            $src = imagecreatefromjpeg($saveto);
            break;
        case "image/png":
            $src = imagecreatefrompng($saveto);
            break;
        default:
            $typeok = false;
            break;
    }

    if ($typeok) {
        list($w, $h) = getimagesize($saveto);

        $max = 100;
        $tw = $w;
        $th = $h;

        if ($w > $h && $w > $max) {
            $th = $max / $w * $h;
            $tw = $max;
        } elseif ($h > $w && $h > $max) {
            $tw = $max / $h * $w;
            $th = $max;
        } elseif ($w > $max) {
            $tw = $th = $max;
        }

        $tmp = imagecreatetruecolor($tw, $th);
        imagecopyresampled($tmp, $src, 0, 0, 0, 0, $tw, $th, $w, $h);
        imagejpeg($tmp, $saveto, 90);

        imagedestroy($tmp);
        imagedestroy($src);

        // 🔥 FORCE BROWSER REFRESH
        $_SESSION['profile_img_ts'] = time();
    }
}
?>

<div class="row justify-content-center">
    <div class="col-md-8 col-lg-7">

        <div class="card shadow-sm mb-4">
            <div class="card-body">

                <h3 class="card-title text-center mb-3">Your Profile</h3>

                <?= $success ?>

                <!-- Profile Preview -->
                <div class="text-center mb-4">    
                    <?php showProfile($user); ?>
                </div>

                <!-- Profile Form -->
                <form
                    method="post"
                    action="profile.php?r=<?= $randstr ?>"
                    enctype="multipart/form-data"
                >

                    <div class="mb-3">
                        <label class="form-label">About You</label>
                        <textarea
                            name="text"
                            class="form-control"
                            rows="4"
                            placeholder="Tell us something about yourself..."
                        ><?= htmlspecialchars($text) ?></textarea>
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Profile Image</label>
                        <input type="file" name="image" class="form-control">
                        <div class="form-text">
                            JPG, PNG or GIF. Image will be resized automatically.
                        </div>
                    </div>

                    <div class="d-grid">
                        <button type="submit" class="btn btn-primary">
                            Save Profile
                        </button>
                    </div>

                </form>

            </div>
        </div>

    </div>
</div>

<!-- Live Image Preview -->
<script>
$(function () {
    $('input[name="image"]').on('change', function () {
        if (this.files && this.files[0]) {
            const reader = new FileReader();
            reader.onload = function (e) {
                $('#profile-preview').attr('src', e.target.result);
            };
            reader.readAsDataURL(this.files[0]);
        }
    });
});
</script>

</div>
</body>
</html>