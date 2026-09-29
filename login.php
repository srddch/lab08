<?php
session_start();

$error = $_SESSION['error'] ?? '';
unset($_SESSION['error']);

include 'header.inc';
?>
    <h2>Login</h2>

    <?php if ($error !== ''): ?>
        <p><?= htmlspecialchars($error, ENT_QUOTES, 'UTF-8') ?></p>
    <?php endif; ?>

    <form method="post" action="process.php">
        <label for="username">Username:</label>
        <input type="text" id="username" name="username" required>
        <br>

        <label for="password">Password:</label>
        <input type="password" id="password" name="password" required>
        <br>

        <input type="hidden" name="token" value="Z105965706">
        <input type="submit" value="Login">
    </form>
<?php include 'footer.inc'; ?>
