<?php

    require_once './model/database.php';

    function addAssurance($montant, $description, $bonus){
        global $connexion;
        $sql = "Insert into assurance (montant,description,bonus) values ($montant,'$description',$bonus)";
        echo $sql;
        pg_query($connexion,$sql);
    }

    function getAllAssurance(){
        global $connexion;
        $sql = "Select * from assurance";
        $result = pg_query($connexion,$sql);
        return pg_fetch_all($result) ;
    }

    function deleteAssurance($id){
        global $connexion;
        $sql = "Delete from assurance where id=$id";
        echo $sql;
        pg_query($connexion,$sql);
    }
    

    function editAssurance($id, $montant, $description, $bonus){
        global $connexion;
        $sql ="UPDATE  assurance set montant =$montant, description = '$description', bonus=$bonus
            where id = $id";
        pg_query($connexion,$sql);
    }


?>