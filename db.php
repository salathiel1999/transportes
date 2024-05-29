<?php
 global $enlace; //variable de tipo global para llamarla en cualquier parte de la aplicacion donde se llame
 function conexion(){
    $enlace = mysqli_connect('xefi550t7t6tjn36.cbetxkdyhwsb.us-east-1.rds.amazonaws.com', 'j522kzw3x00hubbu', 'l9cr1co12buozt2i', 'v2oyuk7czp2eateq'); //conexion con la base de datos
    
    if(!$enlace){ //if $enlace esto da siempre true (Si tenemos error en la conexion por eso pone !)
     echo "Error: No se puede conectara MySQL." . PHP_EOL;
     echo "Error de depuracion: " . mysqli_connect_errno() . PHP_EOL;
     echo "Error de depuracion: " . mysqli_connect_error() . PHP_EOL;
     exit;
    }
   return $enlace;
}
