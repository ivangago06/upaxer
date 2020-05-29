<?php
include('../conexion.php');


$username = $_POST['username'];
$password = $_POST['password'];

$db->debug=1;

$row = $db->getRow("SELECT * FROM usuarios WHERE usuario=? AND pass=?", array($username, md5($password)));


if($row['usuario']==$username) {
   
   session_start();
   
   
   header ("Location: principal.php");
   exit (0);   
}
else {
   echo 'usuario y password incorrecto';
}



 
?>