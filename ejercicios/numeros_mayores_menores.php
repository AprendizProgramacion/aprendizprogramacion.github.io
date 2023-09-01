<!DOCTYpE html>
<html lang="es">
    <head>
        <meta http-equiv="content-type" content="text/html"; charset="UTF-8"> 
        <meta name="description" content="Ejercicios para hallar valores del triangulo">
        <link rel="stylesheet" href="../../css/style.css">
        <title> Formulario de comparación de dos números  </title> 
    </head>
    <body>
        <?php
            require_once("../plantillas/template_cabecera_01.php");
        ?>
        <form name="tryform" class="tryform" method="POST" action="mayor_menor_numeros.php"> 
            <h2>Formulario: comparación</h2>
            <label for="nombre">Primer números</label>   
            <input type="text" id="one" name="one"  placeholder="Ingrese número"/><br/>
            <label for="nombre">Segundo números</label>   
            <input type="text" id="two" name="two" placeholder="Ingrese segundo número"/><br/>
            <label for="nombre">Tercer números</label>   
            <input type="text" id="three" name="three" placeholder="Ingrese tercer número"/><br/>
            <br>
            <button type="submit" id="botones" >Generar </button>
            <button type="reset" id="botones" >Borrar</button>
        </form>
        <?php
            require_once("../plantillas/template_piepagina_01.php");
        ?>
    </body>
</html>
