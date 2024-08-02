<?php
session_start();
require 'db_connected.php';

$email = $_POST['email'];
$password = $_POST['password'];

if ($_SESSION['attempts'] >= 3) {
    $_SESSION['loginfail'] = 'Too many failed attempts. Please wait for 3 minutes.';
    header("Location: login.php");
    exit();
}

$sql = "SELECT user.*, model_has_roles.role_id, roles.name as rolename
        FROM user
        INNER JOIN model_has_roles ON user.id = model_has_roles.user_id
        INNER JOIN roles ON model_has_roles.role_id = roles.id
        WHERE email = :email AND password = :password";

$stmt = $conn->prepare($sql);
$stmt->bindParam(':email', $email);
$stmt->bindParam(':password', $password);
$stmt->execute();
$user = $stmt->fetch(PDO::FETCH_ASSOC);

if ($stmt->rowCount() <= 0) {
    $_SESSION['attempts']++;
    if ($_SESSION['attempts'] >= 3) {
        $_SESSION['lockout_time'] = time();
        $_SESSION['loginfail'] = 'Too many failed attempts. Please wait for 3 minutes.';
    } else {
        $_SESSION['loginfail'] = 'Invalid Email and Password';
    }
    header("Location: login.php");
} else {
    $_SESSION['login_user'] = $user;
    $_SESSION['attempts'] = 0;
    $_SESSION['lockout_time'] = null;

    if ($user['rolename'] == 'admin') {
        header("Location: index.php");
    } else {
        header("Location: index.php");
    }
}
?>
