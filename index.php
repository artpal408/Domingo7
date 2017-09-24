<?php
/**
 * Created by PhpStorm.
 * User: Lab2Ies
 * Date: 24/09/2017
 * Time: 13:20
 */

session_start();

if(empty($_SESSION['usuario'])){

    include_once 'vista/Login.vista.php';
}
else{
    include_once 'vista/inicio.vista.php';
}



