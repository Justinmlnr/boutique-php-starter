<?php

session_start();

$error = "";

if ($_SERVER["REQUEST_METHOD"] === "POST") {

    $username = $_POST["username"] ?? "";
    $password = $_POST["password"] ?? "";

    if ($username === "admin" && $password === "1234") {
        $_SESSION["user"] = $username;

        header("Location: dashboard.php");
        exit;
    } else {
        $error = "ID incorrects";
    }
}


?>

<h2>Connexion utilisateur</h2>

<?php if ($error): ?>
    <p style="color:red;">
        <?= htmlspecialchars($error) ?>
    </p>
<?php endif; ?>


<form method="post" action="">
    <label>Username :</label>
    <input type="text" name="username" required><br><br>
    <label>Password :</label>
    <input type="password" name="password" required><br><br>

    <button type="submit">Se connecter</button>
</form>