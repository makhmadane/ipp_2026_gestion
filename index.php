<?php
   require_once './view/header.php';
   require_once './controller/assuranceController.php';

    if(isset($_GET['action'])  && !empty($_GET['action'])){

        if(isset($_GET['id'])  && !empty($_GET['id'])){
            if($_GET['action'] == "deleteAssurance"){
                $id = $_GET['id'];
                deleteAssurance($id); //controller
            }
            if($_GET['action'] == "modifierAssurance"){
                $id = $_GET['id'];
                editAssurance($id); //controller
            }

        }
         if($_GET['action'] == "editAssurance"){
            $id = $_POST['id'];
            $montant = $_POST['montant'];
            $description = $_POST['description'];
            $bonus = $_POST['bonus'];
             modifieAssurance($id, $montant, $description, $bonus);
        }

        if($_GET['action'] == "addAssurance"){
               ajouteAssurance(); //controller
        }
        if($_GET['action'] == "saveAssurance"){
            var_dump($_POST);
            $montant = $_POST['montant'];
            $description = $_POST['description'];
            $bonus = $_POST['bonus'];
            saveAssurance($montant, $description, $bonus);
        }
    }else{
         listAssurance(); //controller
    }

 
   

  
?>