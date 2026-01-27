<?php
require_once 'header.php';

// CHECK THAT USER IS NOT LOGGED IN
if (!$loggedin) {
    die("</div></body></html>");
}

$view = isset($_GET['view'])
    ? sanitizeString($_GET['view'])
    : $user;

/**
 * POST MESSAGE
 */
if (isset($_POST['text'])) {
    $text = sanitizeString($_POST['text']);

    // VALIDATION
    if ($text !== "") {
        $pm   = substr(sanitizeString($_POST['pm']), 0, 1);
        $time = time();

        querySql(
            "INSERT INTO messages (auth, recip, pm, time, message)
             VALUES (?, ?, ?, ?, ?)",
            [$user, $view, $pm, $time, $text]
        );
    }
}

/**
 * DELETE MESSAGE
 */
if (isset($_GET['erase'])) {
    $erase = sanitizeString($_GET['erase']);

    querySql(
        "DELETE FROM messages WHERE id = ? AND recip = ?",
        [$erase, $user]
    );
}

date_default_timezone_set('UTC');
?>

<div class="row justify-content-center">
    <div class="col-md-9 col-lg-8">

        <div class="card shadow-sm mb-4">
            <div class="card-body">

                <?php
                if ($view === $user) {
                    $title = "Your Messages";
                } else {
                    $title = "Messages with " . htmlspecialchars($view);
                }
                ?>

                <h3 class="card-title text-center mb-3">
                    <?= $title ?>
                </h3>

                <!-- Profile Preview -->
                <div class="mb-4">
                    <?php showProfile($view); ?>
                </div>

                <!-- MESSAGE FORM -->
                <form method="post"
                      action="messages.php?view=<?= $view ?>&r=<?= $randstr ?>">

                    <div class="mb-3">
                        <label class="form-label">Message Type</label>
                        <div class="btn-group w-100" role="group">
                            <input type="radio" class="btn-check"
                                   name="pm" id="public"
                                   value="0" checked>
                            <label class="btn btn-outline-primary"
                                   for="public">Public</label>

                            <input type="radio" class="btn-check"
                                   name="pm" id="private"
                                   value="1">
                            <label class="btn btn-outline-secondary"
                                   for="private">Private</label>
                        </div>
                    </div>

                    <div class="mb-3">
                        <textarea name="text"
                                  class="form-control"
                                  rows="3"
                                  placeholder="Write your message..."></textarea>
                    </div>

                    <div class="d-grid">
                        <button type="submit" class="btn btn-primary">
                            Post Message
                        </button>
                    </div>
                </form>

            </div>
        </div>

        <!-- MESSAGE LIST -->
        <div class="card shadow-sm">
            <div class="card-body">

                <h5 class="mb-3">Conversation</h5>

                <?php
                $result = querySql(
                    "SELECT * FROM messages
                     WHERE recip = ?
                     ORDER BY time DESC",
                    [$view]
                );

                if (!$result->rowCount()):
                ?>
                    <div class="text-muted text-center">
                        No messages yet
                    </div>
                <?php
                endif;

                while ($row = $result->fetch()):
                    if (
                        $row['pm'] == 0 ||
                        $row['auth'] === $user ||
                        $row['recip'] === $user
                    ):
                ?>

                <div class="border rounded p-3 mb-3">

                    <div class="d-flex justify-content-between align-items-center mb-1">
                        <div>
                            <strong>
                                <a href="members.php?view=<?= $row['auth'] ?>&r=<?= $randstr ?>"
                                   class="text-decoration-none">
                                    <?= htmlspecialchars($row['auth']) ?>
                                </a>
                            </strong>

                            <?php if ($row['pm'] == 1): ?>
                                <span class="badge bg-secondary ms-2">
                                    Private
                                </span>
                            <?php else: ?>
                                <span class="badge bg-primary ms-2">
                                    Public
                                </span>
                            <?php endif; ?>
                        </div>

                        <small class="text-muted">
                            <?= date("M j, Y g:i a", $row['time']) ?>
                        </small>
                    </div>

                    <p class="mb-2">
                        <?= nl2br(htmlspecialchars($row['message'])) ?>
                    </p>

                    <?php if ($row['recip'] === $user): ?>
                        <a href="messages.php?view=<?= $view ?>&erase=<?= $row['id'] ?>&r=<?= $randstr ?>"
                           class="btn btn-sm btn-outline-danger">
                            Delete
                        </a>
                    <?php endif; ?>

                </div>

                <?php
                    endif;
                endwhile;
                ?>

                <div class="d-grid mt-3">
                    <a href="messages.php?view=<?= $view ?>&r=<?= $randstr ?>"
                       class="btn btn-outline-secondary">
                        Refresh Messages
                    </a>
                </div>

            </div>
        </div>

    </div>
</div>

</div>
</body>
</html>