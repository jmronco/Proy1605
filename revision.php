<?php
$PATH='lib/';

include $PATH.'Conexion.php';
include $PATH.'Usuario.php';

$oUsr=new Usuario();
$oUsr->nombre='nuevo';

if($oUsr->VerificaUsuario())
    echo "Existe";
else 
     echo "No existe";   

/*sesion_start();
var_dump($_SESSION);*/

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

