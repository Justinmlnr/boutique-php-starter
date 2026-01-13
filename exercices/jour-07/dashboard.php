<?php
session_start();

if (!isset($_SESSION["user"])) {
    header("Location: login.php");
    exit;
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Dashboard</title>
</head>
<body>

<h1>Bonjour <?= htmlspecialchars($_SESSION["user"]) ?> !</h1>

<p>Vous êtes connecté </p>

<a href="logout.php">Se déconnecter</a>

</body>
</html>
