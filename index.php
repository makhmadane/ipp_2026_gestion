<?php

    require_once './model/assuranceModel.php';
    
    $assurances = getAllAssurance();

    require_once './view/assurance/list.php'
?>