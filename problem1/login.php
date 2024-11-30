<?php
$message = '';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $postedUsername = $_POST['username'] ?? '';
    $postedPassword = $_POST['password'] ?? '';

    if ($postedUsername == 'admin' && $postedPassword == 'admin') {
        $message = 'Successful Login, redirecting to dashboard'; // User should not see this message, but just in case

        session_start();
        $_SESSION['username'] = $_POST['username'];

        header('Location: index.php');
        die();
    } else {
        $message = 'Wrong username and password combination, try again';
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Problem 1 Login</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <form method="POST">
        <div><?= $message ?></div>
        <div>
            <label for="password">Username</label>
            <input type="text" name="username" id="username" required>
        </div>
        <div>
            <label for="password">Password</label>
            <input type="password" name="password" id="password" required>
        </div>
        <div>
            <button type="submit">Login</button>
        </div>
</body>
</html>