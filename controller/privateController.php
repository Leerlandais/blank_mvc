<?php



if (isset($_GET["logout"])) {
    include_once("../model/logoutModel.php"); 
    die();   
}

    // Appel du page d'accueil Admin
    $title = '???homeAdmin???';
    
    include "../view/private/adminhome.view.php";