<?php

class AssuranceController{

   private $model;

      //constructeur

      function __construct($model){
         $this->model = $model;
      }

      function listAssurance(){ 
        
         $assurances = $this->model->getAllAssurance();  // model
         require_once './view/assurance/list.php'; //view 
      }


      function deleteAssurance($id){
          $this->model->supprimerAssurance($id); //model
         header('location:index.php'); //view 
      }

      function ajouteAssurance(){
         require_once './view/assurance/add.php'; //view 
      }

      function saveAssurance($montant, $description, $bonus){
          $this->model->addAssurance($montant, $description, $bonus);
         header('location:index.php'); //view 
      }

      function editAssurance($id){
         $assurance =  $this->model->getAssuranceById($id); //model
            require_once './view/assurance/edit.php'; //view 
      }

      function modifieAssurance($id, $montant, $description, $bonus){
          $this->model->updateAssurance($id, $montant, $description, $bonus); // model
         header('location:index.php'); //view 
      }
      



}
?>