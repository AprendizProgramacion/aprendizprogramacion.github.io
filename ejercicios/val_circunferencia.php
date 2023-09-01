<!DOCTYpE html>
<html lang="es">
    <head>
        <meta http-equiv="content-type" content="text/html"; charset="UTF-8"> 
        <meta name="description" content="Ejercicios para hallar valores del triangulo">
        <link rel="stylesheet" href="../css/style.css">
        <title> Formulario de la Circunferencia </title> 
    </head>
    <body>
        <?php
            require_once("../plantillas/template_cabecera_01.php");
        ?>
        <form name="tryform" class="tryform" method="POST" action="vl_circunferencia.php"> 
            <h2>Formulario: Circunferencia</h2>
            <label for="nombre">Primera Coordenada</label>   
            <input type="text" id="x" name="x" placeholder="Ingrese coordenada X "/><img/><br/>
            <label for="nombre">Segunda Coordenada</label>   
            <input type="text" id="y" name="y" placeholder="Ingrese coordenada y"/><img/><br/>
            <label for="nombre">Perimetro de la Circunferencia</label>   
            <input type="text" id="pe" name="pe" placeholder="Ingrese el perimetro "/><img/><br/>
            <br>
            <button type="submit" id="botones" >Generar</button>
            <button type="reset" id="botones" >Borrar</button>
        </form>
        <?php
            require_once("../plantillas/template_piepagina_01.php");
        ?>
    </body>
</html>

