<?php
/**
 * Created by PhpStorm.
 * User: Lab2Ies
 * Date: 24/09/2017
 * Time: 14:29
 */

require_once '../driver.php';

class InicioModelo{
    private $enlace;

    public function __construct()
    {
        $this->enlace = new DMysqli();
    }

    public function login($usuario, $pass){
        $consulta = sprintf("SELECT * FROM usuarios WHERE usuario = '%s' AND pass = '%s'", $usuario, $pass);
        $this->enlace->datos($consulta);
        var_dump($consulta);
        return  $this->enlace->datos($consulta);


    }

}