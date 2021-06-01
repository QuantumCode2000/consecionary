<?php 
include ("../function/conexion.php"); 
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
<div class="row">
    <form 
        name ="categoria"
        id="categoria"
        method = "post"
        action="ejemplo.php"
    >
        <span>
            <input  
                id="id" 
                type="id" 
                placeholder="1"
                value=""
                size=45
            />
            <input 
                type="submit" 
                value="agregar"
                name="categoria"
                id="categoria"    
            >
            <!-- <input  
                id="name" 
                type="name" 
                placeholder="jorge"
                value=""
                size=45
            /
            
            <input  
                id="nacionalidad" 
                type="country" 
                placeholder="españa"
                value=""
                size=45
            / -->
            
        </span>
    </form>
    <!-- <span>
        <input class="basic-slide" id="email" type="text" placeholder="Your favorite email">
        <label for="email">Email</label>
    </span>
    <span>
        <input class="basic-slide" id="phone" type="text" placeholder="You can trust us">
        <label for="phone">Phone</label>
    </span> -->
</div>

</body>
</html>

