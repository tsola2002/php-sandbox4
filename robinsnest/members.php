<?php
require_once 'header.php';

if (!$loggedin) {
    die("</div></body></html>");
}

/**
 * VIEW PROFILE
 */
if (isset($_GET['view'])) {
    $view = sanitizeString($_GET['view']);
    $name = ($view === $user) ? "Your" : "$view's";
    ?>

    <div class="row justify-content-center">
        <div class="col-md-8">

            <div class="card shadow-sm">
                <div class="card-body">
                    <h3 class="card-title text-center mb-3">
                        <?= $name ?> Profile
                    </h3>

                    <?php showProfile($view); ?>

                    <div class="d-grid mt-3">
                        <a href="messages.php?view=<?= $view ?>&r=<?= $randstr ?>"
                           class="btn btn-outline-primary">
                            View <?= $name ?> Messages
                        </a>
                    </div>
                </div>
            </div>

        </div>
    </div>

    </div></body></html>
    <?php
    exit;
}

/**
 * FOLLOW USER
 */
if (isset($_GET['add'])) {
    $add = sanitizeString($_GET['add']);

    $check = querySql(
        "SELECT 1 FROM friends WHERE user = ? AND friend = ?",
        [$add, $user]
    );

    if (!$check->rowCount()) {
        querySql(
            "INSERT INTO friends (user, friend) VALUES (?, ?)",
            [$add, $user]
        );
    }
}

/**
 * UNFOLLOW USER
 */
if (isset($_GET['remove'])) {
    $remove = sanitizeString($_GET['remove']);

    querySql(
        "DELETE FROM friends WHERE user = ? AND friend = ?",
        [$remove, $user]
    );
}

/**
 * LIST MEMBERS
 */
$result = querySql("SELECT user FROM members ORDER BY user");
?>

<div class="row justify-content-center">
    <div class="col-md-9 col-lg-8">

        <div class="card shadow-sm">
            <div class="card-body">

                <h3 class="card-title text-center mb-4">
                    Members
                </h3>

                <ul class="list-group list-group-flush">

                    <?php while ($row = $result->fetch()): ?>
                        <?php
                        if ($row['user'] === $user) continue;

                        $member = $row['user'];

                        // They follow you
                        $t1 = querySql(
                            "SELECT 1 FROM friends WHERE user = ? AND friend = ?",
                            [$member, $user]
                        )->rowCount();

                        // You follow them
                        $t2 = querySql(
                            "SELECT 1 FROM friends WHERE user = ? AND friend = ?",
                            [$user, $member]
                        )->rowCount();

                        $status = "";
                        $btnText = "Follow";
                        $btnClass = "btn-outline-primary";
                        $action = "add";

                        if ($t1 && $t2) {
                            $status = "<span class='badge bg-success'>Mutual</span>";
                        } elseif ($t1) {
                            $status = "<span class='badge bg-info text-dark'>You follow</span>";
                        } elseif ($t2) {
                            $status = "<span class='badge bg-warning text-dark'>Follows you</span>";
                        }

                        if ($t1) {
                            $btnText = "Unfollow";
                            $btnClass = "btn-outline-danger";
                            $action = "remove";
                        }
                        ?>

                        <li class="list-group-item d-flex justify-content-between align-items-center">
                            <div>
                                <a href="members.php?view=<?= $member ?>&r=<?= $randstr ?>"
                                   class="fw-semibold text-decoration-none">
                                    <?= htmlspecialchars($member) ?>
                                </a>
                                <div class="mt-1"><?= $status ?></div>
                            </div>

                            <a href="members.php?<?= $action ?>=<?= $member ?>&r=<?= $randstr ?>"
                               class="btn btn-sm <?= $btnClass ?>">
                                <?= $btnText ?>
                            </a>
                        </li>

                    <?php endwhile; ?>

                </ul>

            </div>
        </div>

    </div>
</div>

</div>
</body>
</html>