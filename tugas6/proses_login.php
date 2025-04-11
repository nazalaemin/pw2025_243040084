<?php
$username = $_POST['username'];
$password = $_POST['password'];

if ($username == 'admin' && $password == 'admin') {
    header("Location: admin.php");
    exit();
} else {
    header("Location: login.php?error=1");
    exit();
}
?>
