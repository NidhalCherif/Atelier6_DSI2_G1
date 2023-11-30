<?php
require_once "produit.php";
require_once "../config/connexion.php";

class CRUD_Produit
{
    private $pdo;
    function __construct()
    {
        $obj = new connexion();
        $this->pdo = $obj->getConnexion();
    }

    public function find($id)
    {
        $sql = "select * from produit where id=$id";
        $res = $this->pdo->query($sql); // $res un objet PDOstatement
        return $res->fetch(PDO::FETCH_NUM);
    }
    public function findAll()
    {
        $sql = "select * from produit";
        $res = $this->pdo->query($sql); // $res un objet PDOstatement
        return $res->fetchAll(PDO::FETCH_NUM);
    }
    public function delete($id)
    {
        $sql = "delete from produit where id=$id";
        $res = $this->pdo->exec($sql); // int|false
        return $res;
    }
    public function add(produit $p)
    {
        $libelle = $p->getLibelle();
        //......... A compléter...
    }
    public function update(produit $p)
    {
        $id = $p->getId();
        //.....
    }
}
