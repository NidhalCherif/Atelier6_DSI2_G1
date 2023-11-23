<?php
require_once "config/connexion.php";
if (isset($_GET['id'])) {
    $id = $_GET['id'];
}
$sql = "delete from produit where id=$id";
$res = $connexion->exec($sql);
if ($res) {
    header("location:produits.php?etat=1");
}
