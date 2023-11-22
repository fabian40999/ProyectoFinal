<?php
/*Inicializa las variables*/

include("conexion.php");
 
$nombre=$_POST['nombre'];
$clave=$_POST['clave'];


$query="INSERT INTO alumno(nombre, clave) VALUES
    ('$nombre', '$clave')";


$resultado=$conexion->query($query);


if($resultado) {
    echo "Datos insertados correctamente";
}

else{
    echo "No se insertaron los datos";
}
?>