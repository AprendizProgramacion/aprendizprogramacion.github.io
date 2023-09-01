<!DOCTYPE html>
<html lang="es">
    <head>
        <meta http-equiv="content-type" content="text/html"; charset="UTF-8"> 
        <meta name="description" content="Ejercicios para hallar valores del triangulo">
        <link rel="stylesheet" href="../css/style.css">
        <title> Formulario del triangulo </title> 
    </head>
    <body>
        <?php
            require_once("../plantillas/template_cabecera_01.php");
        ?>
        <form name="tryform" class="tryform" method="POST" action="vl_triangulo.php"> 
            <h2>Formulario: Triangulo Rectangulo</h2>
            <label for="nombre">Cateto</label>   
            <input type="text" id="cat" name="cat" placeholder="Ingrese el Cateto del triangulo"/><img/><br/>
            <br>
            <label for="apellido">Hipotenusa </label>
            <input type="text" id="hip" name="hip" placeholder="Ingrese la Hipotenusa del triangulo."/><img /><br/>
            
            <button type="submit" id="botones" >Generar valores</button>
            <button type="reset" id="botones" >Borrar</button>

            
        </form>
        
        <?php
            require_once("../plantillas/template_piepagina_01.php");
        ?>
    </body>
</html>


