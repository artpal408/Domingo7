<?php
/**
 * Created by PhpStorm.
 * User: Lab2Ies
 * Date: 24/09/2017
 * Time: 13:24
 */

session_start();

require_once '../modelo/Inicio.modelo.php';

$modelo = new InicioModelo();

if (isset($_GET['cerrar'])){
    session_destroy();
    header("location: http://mascota:8089");

}



if (isset($_POST['Login'])) {
    echo 'Hey, te quieres loguear';
    $usuario= $_POST['usuario'];
    $pass = $_POST ['pass'];

    $resultado = $modelo->login($usuario, $pass);

    if (empty($resultado)){
        echo 'Usuario no encontrado';
    }
    else{
        echo 'Bienvendio';
        $_SESSION['usuario']=1;
        header("location: http://mascota:8089/vista/Inicio.vista.php");
    }
}

if(!empty ($_POST ['agregar'])){
    echo 'Hey! vamos a agregar';
}
