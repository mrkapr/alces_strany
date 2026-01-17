<?php
session_start();

if (!isset($_SESSION["user"])) {
    header("Location: index.php");
    exit;
}
?>

<!DOCTYPE html>
<html lang="cs">
<head>
<meta charset="UTF-8">
<title>Home</title>
</head>
<body>

<h1>Vítej,<br><?php echo htmlspecialchars($_SESSION["user"]); ?></h1>

<a href="logout.php">Odhlásit se</a>

</body>
</html>
