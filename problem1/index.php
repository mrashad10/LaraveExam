<?php
session_start();

$currentUser = $_SESSION['username'] ?? '';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php if ($currentUser) { ?>
    <div>
        <label>Logged in user: <?= $currentUser ?></label>
        <a href="logout.php">Logout</a>
    </div>
    <?php } else { ?>
        <div>
            <label>You must <a href="login.php">login</a> first</label>
        </div>
    <?php } ?>
</body>
</html>