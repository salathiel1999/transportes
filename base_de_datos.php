<?php
/*
Carrito de compras, archivo de conexion a la bd
*/
$contraseña = "l9cr1co12buozt2i";
$usuario = "j522kzw3x00hubbu";
$nombre_base_de_datos = "v2oyuk7czp2eateq"; //nombre de tu base de datos PDO::PARAM_STR
try{
	$base_de_datos = new PDO('mysql:host=xefi550t7t6tjn36.cbetxkdyhwsb.us-east-1.rds.amazonaws.com;dbname=' . $nombre_base_de_datos, $usuario, $contraseña);
	 $base_de_datos->query("set names utf8;");
    $base_de_datos->setAttribute(PDO::ATTR_EMULATE_PREPARES, FALSE);
    $base_de_datos->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $base_de_datos->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_OBJ);
    
}catch(Exception $e){
	echo "Ocurrió algo con la base de datos: " . $e->getMessage();
}
?>
