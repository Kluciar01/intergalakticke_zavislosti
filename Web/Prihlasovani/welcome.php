<?php
session_start();
if (!isset($_SESSION['username'])) {
    header("Location: login.html");
    exit();
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Vítejte</title>
</head>
<body>
    <h1>Vítejte, <?php echo $_SESSION['username']; ?>!</h1>
    <a href="logout.php">Odhlásit se</a>
</body>
</html>
