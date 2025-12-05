<?php
   require_once "./model/database.php";
   require_once './view/header.php';
   require_once './model/assuranceModel.php';
   require_once './controller/assuranceController.php';
    $database = new Database();
    $connexion = $database-> get_Connexion();
    $model = new AssuranceModel($connexion);
    $controller = new AssuranceController($model);


    if(isset($_GET['action'])  && !empty($_GET['action'])){

        if(isset($_GET['id'])  && !empty($_GET['id'])){
            if($_GET['action'] == "deleteAssurance"){
                $id = $_GET['id'];
                $controller->deleteAssurance($id); //controller
            }
            if($_GET['action'] == "modifierAssurance"){
                $id = $_GET['id'];
                $controller->editAssurance($id); //controller
            }

        }
         if($_GET['action'] == "editAssurance"){
            $id = $_POST['id'];
            $montant = $_POST['montant'];
            $description = $_POST['description'];
            $bonus = $_POST['bonus'];
             $controller->modifieAssurance($id, $montant, $description, $bonus);
        }

        if($_GET['action'] == "addAssurance"){
               $controller->ajouteAssurance(); //controller
        }
        if($_GET['action'] == "saveAssurance"){
            var_dump($_POST);
            $montant = $_POST['montant'];
            $description = $_POST['description'];
            $bonus = $_POST['bonus'];
            $controller->saveAssurance($montant, $description, $bonus);
        }
    }else{
        $controller->listAssurance(); //controller
    }

 

  
?>