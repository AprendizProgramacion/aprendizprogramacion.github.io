<!DOCTYpE html>
<html lang="es">
    <head>
        <meta http-equiv="content-type" content="text/html"; charset="UTF-8"> 
        <meta name="description" content="Ejercicios para hallar valores del triangulo">
        <link rel="stylesheet" href="../css/style.css">
        <title> Formulario del Circulo </title> 
    </head>
    <body>
        <?php
            require_once("../plantillas/template_cabecera_01.php");
        ?>
        <form name="tryform" class="tryform" method="POST" action="vl_circulo.php"> 
            <h2>Formulario: Circulo</h2>
            <label for="nombre">Radio</label>   
            <input type="text" id="r" name="r" placeholder="Ingrese el radio"/><img/><br/>
            <label for="nombre">Arco del circulo</label>   
            <input type="text" id="ar" name="ar" placeholder="Ingrese el arco en grados"/><img/><br/>
            <br>
            <button type="submit" id="botones" >Generar </button>
            <button type="reset" id="botones" >Borrar</button>
        </form>
        <?php
            require_once("../plantillas/template_piepagina_01.php");
        ?>
    </body>
</html>