<?php
$dsn = "mysql:host=localhost;dbname=atelier6_dsi2_g1";
$username = "root";
$password = "";
try {
    $connexion = new PDO($dsn, $username, $password);
} catch (Exception $e) {
    echo "Erreur de connexion!" . $e->getMessage();
}
