<?php
include_once("phplibs/adodb/adodb.inc.php");

$db = NewADOConnection('mysqli');

$mysql_user = 'safmx_pa-pronto';
$mysql_pass = '#efe]9AtT-';
$mysql_bd = 'safmx_pa-pronto';
$mysql_host = 'localhost';

$db->Connect($mysql_host, $mysql_user, $mysql_pass, $mysql_bd) or die('<h2>Error al conectarse a la BD</h2>');

date_default_timezone_set('America/Mexico_City');
//$db->execute("SET time_zone = '".date('P')."'");
?>