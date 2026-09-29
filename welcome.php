<?php
session_start();

if (!isset($_SESSION['user'])) {
    header('Location: login.php');
    exit;
}

include 'header.inc';
?>
    <h2>Welcome, <?= htmlspecialchars($_SESSION['user'], ENT_QUOTES, 'UTF-8') ?>!</h2>
<?php include 'footer.inc'; ?>
