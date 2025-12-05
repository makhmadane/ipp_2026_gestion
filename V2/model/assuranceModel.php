<?php

class AssuranceModel{

    private $connexion;
    //constucteur
    function __construct($connexion){
        $this->connnexion = $connexion;
    }

    function addAssurance($montant, $description, $bonus){
        global $connexion;
        $sql = "Insert into assurance (montant,description,bonus)
         values (:m,:d,:b)";
        $result =  $connexion->prepare($sql);
        $result->execute(["b"=>$bonus,"d"=>$description,"m"=>$montant]);
    }

    function getAllAssurance(){
        global $connexion;
        $sql = "Select * from assurance";
        $result =  $connexion->prepare($sql);
        $result->execute();
        return $result->fetchAll();
    }

    function supprimerAssurance($id){
        global $connexion;
        $sql = "Delete from assurance where id= :ident";
        $result =  $connexion->prepare($sql);
        $result->execute(["ident"=>$id]);
    }
    

    function updateAssurance($id, $montant, $description, $bonus){
        global $connexion;
        $sql ="UPDATE  assurance set montant = ?, description = ?, bonus= ?
            where id = ? ";
        $result =  $connexion->prepare($sql);
        $result->execute([$montant, $description, $bonus, $id]);
    }

    function getAssuranceById($id){
        global $connexion;
        $sql = "Select * from assurance where id = ?";
        $result =  $connexion->prepare($sql);
        $result->execute([$id]);
        return $result->fetch();
    }

}
?>