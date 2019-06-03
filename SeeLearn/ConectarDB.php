<?php
$conexion = mysqli_connect("localhost", "root", "", "see_to_learn");
if(!$conexion){
	echo 'error';
}
else{
	echo "conectado";
}