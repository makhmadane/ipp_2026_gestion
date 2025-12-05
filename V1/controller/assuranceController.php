<?php

  require_once './model/assuranceModel.php';

 function listAssurance(){ 
    $assurances = getAllAssurance();  // model
    require_once './view/assurance/list.php'; //view 
 }


 function deleteAssurance($id){
    supprimerAssurance($id); //model
    header('location:index.php'); //view 
 }

 function ajouteAssurance(){
     require_once './view/assurance/add.php'; //view 
 }

 function saveAssurance($montant, $description, $bonus){
    addAssurance($montant, $description, $bonus);
     header('location:index.php'); //view 
 }

 function editAssurance($id){
    $assurance = getAssuranceById($id); //model
      require_once './view/assurance/edit.php'; //view 
 }

 function modifieAssurance($id, $montant, $description, $bonus){
     updateAssurance($id, $montant, $description, $bonus); // model
    header('location:index.php'); //view 
 }
 




?>