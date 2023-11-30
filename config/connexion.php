<?php
class connexion
{

    function getConnexion()
    {
        $dsn = "mysql:host=localhost;dbname=atelier6_dsi2_g1";
        $username = "root";
        $password = "";
        $connexion = new PDO($dsn, $username, $password);
        return $connexion;
    }
}
