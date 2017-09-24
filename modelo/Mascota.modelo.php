<?php
/**
 * Created by PhpStorm.
 * User: Lab2Ies
 * Date: 24/09/2017
 * Time: 16:11
 */

require_once '../driver.php';

class MascotaModelo{
    private $enlace;

    public function __construct()
    {
        $this->enlace = new DMysqli();
    }

    public function agregarMascota($nombre, $sexo, $edad, $foto) {
        $consulta = sprintf("INSERT INTO mascotas VALUES (DEFAULT, '%s', %d, '%s', '%s', DEFAULT )", $nombre, $edad, $sexo, $foto);
        return $this->enlace->query($consulta);

    }
}