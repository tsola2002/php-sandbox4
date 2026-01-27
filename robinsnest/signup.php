<?php
require_once 'header.php';

$error = $user = $pass = "";


// If already logged in, log out first
if (isset($_SESSION['user'])) {
    destroySession();
}

// Handle form submission
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // CLEANUP USERNAME AND PASSWORD FIELDS
    $user = sanitizeString($_POST['user'] ?? '');
    $pass = sanitizeString($_POST['pass'] ?? '');

    //VALIDATION
    if ($user === "" || $pass === "") {
        $error = "<div class='alert alert-danger'>All fields are required.</div>";
    } else {
        // CHECK WHETHER USERNAME EXISTS ALREADY
        $stmt = querysql("SELECT * FROM members WHERE user = ?", [$user]);
        if ($stmt->rowCount()) {
            $error = "<div class='alert alert-warning'>Username already exists.</div>";
        } else {
            // GO AHEAD AND CREATE NEW ACCOUNT
            // 🔐 If you later upgrade passwords, replace with password_hash()
            querysql(
                "INSERT INTO members (user, pass) VALUES (?, ?)",
                [$user, $pass]
            );

            echo "
            <div class='container'>
                <div class='alert alert-success text-center'>
                    <h4 class='mb-2'>Account Created 🎉</h4>
                    <p>You can now <a href='login.php?'>log in</a>.</p>
                </div>
            </div>
            </div></body></html>";
            exit;
        }
    }
}
?>

<!-- jQuery Username Availability Check -->
<script>
    
    function checkUser(input) {
        const username = input.value.trim();

        if (username === "") {
            $("#used").html("");
            return;
        }

        // JQUERY AJAX
        $.post(
            "checkuser.php",
            { user: username },
            function (data) {
                $("#used").html(data);
            }
        );
    }
    
</script>

<div class="row justify-content-center">
    <div class="col-md-6 col-lg-5">
        <div class="card shadow-sm">
            <div class="card-body">
                <h3 class="card-title text-center mb-3">Create an Account</h3>

                <?= $error ?>

                <form method="post" action="signup.php">
                    <div class="mb-3">
                        <label class="form-label">Username</label>
                        <input
                            type="text"
                            name="user"
                            class="form-control"
                            maxlength="16"
                            value="<?= htmlspecialchars($user) ?>"
                            onblur="checkUser(this)"
                            required
                        >
                        <div id="used" class="form-text mt-1"></div>
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Password</label>
                        <input
                            type="password"
                            name="pass"
                            class="form-control"
                            maxlength="16"
                            required
                        >
                    </div>

                    <div class="d-grid">
                        <button type="submit" class="btn btn-primary">
                            Sign Up
                        </button>
                    </div>
                </form>

                <div class="text-center mt-3">
                    <small>
                        Already have an account?
                        <a href="login.php?r=<?= $randstr ?>">Log in</a>
                    </small>
                </div>
            </div>
        </div>
    </div>
</div>
