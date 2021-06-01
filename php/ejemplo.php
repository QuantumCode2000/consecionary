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
    

    if(isset($_POST["submit"]) && !empty($_POST["submit"])) {
		$nombre = $_POST["nombre"];
		echo "<b>" .$nombre . "</b> </br>";
	}

    $sql = "INSERT INTO estudiante (id_estudiante,nombre_estudiante) VALUES ('0','$nombre')";
    if (mysqli_query($obj_conexion, $sql)) {
        echo " Agregado Correctamente : ";
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($obj_conexion);
    }
    


    $var_consulta= "select * from estudiante";
    $var_resultado = $obj_conexion->query($var_consulta);

    if($var_resultado->num_rows>0)
      {
        echo"<table border='1' align='center'>
         <tr bgcolor='#E6E6E6'>
            <th>id</th>
            <th>nombre</th>
        </tr>";
    
    while ($var_fila=$var_resultado->fetch_array())
    {
        echo "<tr>
        <td>".$var_fila["id_estudiante"]."</td>";
        echo "<td>".$var_fila["nombre_estudiante"]."</td>";
        // echo "<td>".$var_fila["campo_tres"]."</td>";
        // echo "<td>".$var_fila["campo_cuatro"]."</td>";
        // echo "<td>".$var_fila["campo_cinco"]."</td></tr>";
     }
    }
    else
    {
        echo "No hay Registros";
    }
    
    mysqli_close($obj_conexion);

    

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="POST">
        <input type="text" name="nombre">
        <br>
        <input type="submit" name="submit" value="Enviar Formulario">
    </form>
</body>
</html>

