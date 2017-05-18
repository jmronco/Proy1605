<?php
session_start();

var_dump($_SESSION);
$PATH='lib/';

include $PATH.'Conexion.php';
include $PATH.'Usuario.php';

$oUsr=new Usuario();
$oUsr->nombre=$_POST['nombre'];
$oUsr->clave=$_POST['clave'];

if($oUsr->VerificaUsuario())
    $_SESSION['USR']=$oUsr;


header('Location:http://localhost:8081/proy1605/');

/*sesion_start();
var_dump($_SESSION);*/

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

