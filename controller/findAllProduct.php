<?php
require_once "../model/CRUD_Produit.php";
$crud = new CRUD_Produit();
$LesProduits = $crud->findAll();
// communiquer le resultat $LesProduits avec la vue view
include "../view/findAllProduct.php";
