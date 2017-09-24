<?php


session_start();

if(empty($_SESSION['usuario'])){

header("location: http://mascota:8089/vista/Login.vista.php");
}


?>

<form action="../controlador/Inicio.ctrl.php" method="post">

    <input placeholder="Nombre mascota" type="text">
    <br>
    <input placeholder="Edad" type="text">
    <br>
    <input placeholder="Sexo" type="text">
    <br>
    <label for=""> Foto </label>
    <br>
    <input type="file">
    <br><br><br>

    <input name="agregar" value="agregar" type="submit">

</form>

<br><br>

<a href="../controlador/Inicio.ctrl.php?cerrar=true"> Cerrar sesión </a>

