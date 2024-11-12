<?php
session_start();
$validUsername = 'Leon';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = $_POST['username'];
    $password = $_POST['password'];

    if (empty($username) || empty($password)) {
        header("Location: login.html?error=Username atau password harus diisi.");
        exit();
    } else if ($username !== $validUsername) {
        header("Location: login.html?error=Username tidak dikenal.");
        exit();
    } else if (strlen($password) > 6) {
        header("Location: login.html?error=Password maksimal 6 karakter.");
        exit();
    } else if (!preg_match('/[a-z]/', $password) || !preg_match('/[A-Z]/', $password)) {
        header("Location: login.html?error=Password harus terdiri dari huruf besar dan kecil.");
        exit();
    } else {
        $_SESSION['username'] = $username;
        header("Location: home.html");
        exit();
    }
}
?>
