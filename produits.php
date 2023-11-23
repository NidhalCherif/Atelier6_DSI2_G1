<?php
ob_start();
require_once "config/connexion.php";
$sql = "select * from produit";
$res = $connexion->query($sql); // res est un objet PDOstatement
$LesProduits = $res->fetchAll(PDO::FETCH_NUM);
if (isset($_GET['etat'])) {
    $etat = $_GET['etat'];
    switch ($etat) {
        case '1':
            echo "<script>alert('le produit a été supprimé avec succées')</script>";
            break;
        case '2':
            echo "<script>alert('le produit a été modification avec succées')</script>";
            break;
        case '3':
            echo "<script>alert('le produit a été inséré avec succées')</script>";
            break;
    }
}
?>

<h1>Liste des produits</h1>
<table class="table">
    <tr class="table-primary">
        <th>Identifiant</th>
        <th>Libellé</th>
        <th>Prix</th>
        <th>Quantité</th>
        <th>En Promo</th>
        <th colspan=3>Action</th>
    </tr>

    <?php
    foreach ($LesProduits as $produit) {
        echo "<tr>
            <td>$produit[0]</td>
            <td>$produit[1]</td>
            <td>$produit[2]</td>
            <td>$produit[3]</td>
            <td>$produit[6]</td>
        <td><a href='delete_produit.php?id=$produit[0]'>Supprimer</a></td>
        <td><a href='update_produit.php?id=$produit[0]''>Edit</a></td>
        <td><a href='detail_produit.php?id=$produit[0]''>Voir détail...</a></td>

        </tr>";
    }

    echo "</table>";
    echo "<a href='#' class='btn btn-success bt-sm'>Ajouter un produit</a>";

    $contenu = ob_get_clean();
    include "layout.php";
