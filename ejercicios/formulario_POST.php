<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario</title>
    
</head>
<body>
    <?php
         require_once("../plantillas/template_cabecera_01.php");
    ?>
    <form method="POST" action="Tablamultiplicarv3.php">
        <label for="tabla">Ingrese el N* de la tabla de multiplicar</label>

        <input type="text" id="tabla" name="tabla">
        <br><br>
        <button type="submit" id="botones" >Generar Tabla</button>
        <button type="reset" id="botones" >Borrar</button>

    </form>
    <?php
             require_once("../plantillas/template_piepagina_01.php");
    ?>
</body>
</html>