<?php 
    $cons_usuario="jorgetancara";
    $cons_contra="1234";
    $cons_base_datos="project_db";
    $cons_equipo="localhost";

    $obj_conexion = 
    mysqli_connect($cons_equipo,$cons_usuario,$cons_contra,$cons_base_datos);
    if(!$obj_conexion)
    {
        echo "<h3>No se ha podido conectar PHP - MySQL, verifique sus datos.</h3><hr><br>";
    }
    else
    {
        echo "<h3>Conexion Exitosa PHP - MySQL</h3><hr><br>";
    }
?>
