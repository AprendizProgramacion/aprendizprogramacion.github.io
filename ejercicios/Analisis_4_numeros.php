<!DOCTYpE html>
<html lang="es">
    <head>
        <meta http-equiv="content-type" content="text/html"; charset="UTF-8"> 
        <meta name="description" content="Ejercicios para hallar valores del triangulo">
        <link rel="stylesheet" href="../css/style.css">
        <title> Análisis  del valor de 4 Números </title> 
    </head>
    <body>
        <?php
            require_once("../plantillas/template_cabecera_01.php");
        ?>
        <form name="tryform" class="tryform" method="POST" action="ana_numeros.php"> 
            <h2>Formulario: Análisis  números </h2>
            <label for="nombre">Ingrese números </label>
            <input type="text" name="primero" placeholder="Ingrese primer número"><br/>
            <input type="text" name="segundo" placeholder="Ingrese segundo número"><br/>
            <input type="text" name="tercero" placeholder="Ingrese tercer número"><br/>
            <input type="text" name="cuarto" placeholder="Ingrese  cuarto número"><br/>
            <br>
            <button type="submit" id="botones" >Analizar</button>
            <button type="reset" id="botones" >Borrar</button>
        </form>
        <?php
            require_once("../plantillas/template_piepagina_01.php");
        ?>
    </body>
</html>
