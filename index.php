<?php
require_once "config/mail.php";

if(!isset($_GET['pg'])){
    include "public/view/accueil.php";
}else{
    $pg=$_GET['pg'];

    switch($pg){
        case "Accueil":
            require_once "public/view/accueil.php";
        break;
        case "Curriculum Vitae":
            require_once "public/view/CV.php";
        break;
        case "Projets":
            require_once "public/view/projet.php";
        break;
        case "Contact":
            require_once "public/view/contact.php";
        break;
        default:
        require_once "public/view/accueil.php";
    }
}