<?php
/**
 * Created by PhpStorm.
 * User: Lab2Ies
 * Date: 24/09/2017
 * Time: 16:19
 */

require_once '../modelo/Mascota.modelo.php';

$modelo = new MascotaModelo();


if(isset ($_POST['agregar'])){
    $nombre = $_POST['nombre'];
    $sexo = $_POST['sexo'];
    $edad = $_POST['edad'];

    $estado = $modelo->agregarMascota($nombre, $sexo, $edad, "");

    if ($estado == true){
        echo 'Mascota agregada';
    }
    else{
        echo 'Fallo al agregar mascota';
    }

}

include_once '../vista/Inicio.vista.php';