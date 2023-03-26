<?php

if(session_status() == PHP_SESSION_NONE){
    session_start();
}

if(!isset($_SESSION["crudMilitar"])){
    $_SESSION["crudMilitar"] = array();
    // echo "ingresa aqui";
}

