<?php 
$name = $_POST["name"] ?? "";
$email = $_POST["email"] ?? "";
$password = $_POST["pswd"] ?? "";
$confirmation = $_POST["confirmation"] ?? "";

$errors = [
    "name" => "",
    "email" => "",
    "pswd" => "",
    "confirmation" => ""
];

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    if (empty($name)) {
        $errors["name"] = "Username requis";
    } elseif (!preg_match("/^[a-zA-Z0-9]{3,20}$/", $name)) {
        $errors["name"] = "3 à 20 caractères en alphanum.";
    }

    if (empty($email)) {
        $errors ["email"] = "Email requis.";
    } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $errors["email"] = "Format invalide";
    }

    if (empty($password)) {
        $errors["pswd"] = " Mot de passe requis.";
    } elseif (strlen($password) < 8 ){
        $errors["pswd"] = "8 caractères minimum.";
    }

    if (empty($confirmation)) {
        $errors["confirmation"] = "Confirmation requise";
    } elseif ($confirmation !== $password) {
        $errors["confirmation"] = "Les mots de passe ne correspondent pas.";
    }

    if (!array_filter($errors)) {
        echo "Inscription réussie ! ";
        echo"Username:" . htmlspecialchars($name) . "<br>";
        echo "Mail : " . htmlspecialchars($email) ."<br>";
        exit;
    }

};

?>


<form method="POST" action="inscription.php">

    <label>Username</label>
    <input type="text" name="name" value="<?= htmlspecialchars($name) ?>">
    <div style="color:red"><?= $errors["name"] ?></div>

    <label>Mail</label>
    <input type="text" name="email" value="<?= htmlspecialchars($email) ?>">
    <div style="color:red"><?= $errors["email"] ?></div>

    <label>Password</label>
    <input type="password" name="pswd">
    <div style="color:red"><?= $errors["pswd"] ?></div>

    <label>Confirmation</label>
    <input type="password" name="confirmation">
    <div style="color:red"><?= $errors["confirmation"] ?></div>

    <button type="submit">Connexion</button>
</form>