<?php
session_start();

// Détruire la session
session_destroy();

// Rediriger vers login
header("Location: login.php");
exit;
