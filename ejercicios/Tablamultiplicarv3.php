<?php
    require_once("../plantillas/template_cabecera_01.php");
?>
<?php

   if (isset ($_POST['tabla'])) {

        $tabla = $_POST['tabla'];
       
   } else {
        
        $tabla = "";
   }

    if ($tabla != "") {

        $tablaN = intval ($tabla); 
        if ($tablaN == 0 && $tabla != "0") {
            
            echo"ERROR ... DEBE INFORMAR UN VALOR NUMERICO... <br>INTENTE NUEVAMENTE";
        }else {
        echo "<tl><b> Tabla del # $tablaN </b></tl><br>";
        echo "<table border = '1'>";
        echo "<br><tr><th>Multiplicando</th><th>Multiplicador</th><th>Resultado</th></tr>";

        for ($i=1; $i <= 10; $i++) {  
            
            echo "<tr><td> $tablaN </td><td> x $i </td><td> = " . ($i * $tablaN) . "</td><tr>";
        }
        echo "</table>";
        }

    }else {
        echo "La operacion no se puede realizar... Debe ingresar un valor numerico";
    }
    echo "<br><br><button type='submit'><a href='../homepage.php' style='text-decoration: none;'>Regresar al inicio</button>";
    echo "<button type = 'submit'><a href='formulario_POST.php' style='text-decoration: none;'> Volver </button>";
?> 
<?php
    require_once("../plantillas/template_piepagina_01.php");
?>
    
