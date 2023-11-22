<?php
    $host   =   "localhost";
    $user   =   "id21123371_workuni";
    $pass   =   "Gojo5391!";
    $db     =   "id21123371_unitrabajos";

    $conexion = new mysqli($host, $user, $pass, $db);

    if($conexion){
        echo "Conexion exitosa";
       
    }

    else{
        echo "No se realizo la conexion";
    }

?>

<!--"localhost","id21123371_workuni","Gojo5391!","id21123371_unitrabajos"-!>

<!-"localhost", "root", "", "universidad"->
