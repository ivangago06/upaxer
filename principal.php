<?php
session_start();

      include('../conexion.php');
            
      
      $r = $db->getAll("SELECT * FROM usuarios WHERE baja=0");
      
      foreach($r AS $row) echo $row['usuario']; 
      

