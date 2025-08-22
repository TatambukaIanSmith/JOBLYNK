<?php
session_start();
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $email = $_POST['email'] ?? '';
    $password = $_POST['password'] ?? '';

    // Demo credentials (replace with database lookup in production)
    $users = [
        'worker@demo.com' => ['password' => 'password', 'type' => 'worker'],
        'employer@demo.com' => ['password' => 'password', 'type' => 'employer'],
    ];

    if (isset($users[$email]) && $users[$email]['password'] === $password) {
        $_SESSION['user'] = $email;
        $_SESSION['type'] = $users[$email]['type'];
        if ($users[$email]['type'] === 'employer') {
            header('Location: employer-dashboard.html');
        } else {
            header('Location: dashboard.html');
        }
        exit;
    } else {
        $error = "Invalid email or password.";
    }
}
?>