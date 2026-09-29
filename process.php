<?php
session_start();

$username = $_POST['username'] ?? '';
$password = $_POST['password'] ?? '';

if ($username === 'YourName' && $password === 'YourStudentID') {
    $_SESSION['user'] = $username;
    header('Location: welcome.php');
    exit;
}

$_SESSION['error'] = 'Invalid login. Please try again.';
header('Location: login.php');
exit;
