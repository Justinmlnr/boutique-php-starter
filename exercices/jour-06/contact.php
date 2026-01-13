<form method="POST" action="contact.php">
    <label>Utilisateur</label>
    <input type="text" name="name" value="<?=$name?>">
    <label>Mail</label>
    <input type="text" name="email">
    <label>Message</label>
    <input type="text" name="message">
    <button type="submit">Connexion</button>
</form>



<?php

$name = $_POST["name"] ?? "";
$email = $_POST["email"] ?? "";
$message = $_POST["message"] ?? "";

    if (empty($name)) {
        echo "Le nom est requis. <br>";
    }
    if (empty($email)) {
        echo "L'email est requis. <br>";
    }
    if (empty($message)) {
        echo "Le message est requis. <br>";
    }
    if (strlen(($message) < 10)) {
        echo "Le message doit contenir au moins 10 carac. <br>";
    }

?>

<p>Nom</p><?= htmlspecialchars ($name) ?>
<p>Mail</p><?= htmlspecialchars ($email) ?>
<p>Message</p><?= htmlspecialchars ($message) ?>