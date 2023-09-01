<?php
    require_once("../plantillas/template_cabecera_01.php");
?>
<?php

    if (isset ($_POST ['r'])) {

        $r = $_POST ['r'];
        
    } else {
            
        $r = "";
    }
   
    if ($r != "") {
        $ra = intval ($r);
        if ($ra == 0 && $r != "0" ) {
            
            echo "ERROR ... DEBE INFORMAR UN VALOR NUMERICO... INTENTE NUEVAMENTE";
        }else { 
            
            $π = 3.1416;
            $ar = $_POST['ar'];
            $gr = 360;

            $a = $π * pow($ra,2);
            $c = 2 * ($π * $ra); 
            $d = ($c / $π);
            $p = ($π * $d);
            $ar = ($p * $ar) / $gr;
            

            echo "<h1>Valores de un circulo</h1>";
            echo "El radio de un circulo es de:  " . $ra . "cm" . "<br><br> El area del circulo es de:  " . $a. "cm²" . "<br><br> La circunferencia del circulo es de:  " . $c . "cm" . "<br><br> El diametro del circulo es de:   " . $d . "cm";
            echo "<br><br>El perimetro del circulo es de:  " . $p . "cm" ."<br><br>La medida del arco es de:  " . $ar . "cm";
        }
    }else {
        echo "La operacion no se puede realizar... Debe ingresar un valor numerico en cada espacio";
    }
    echo "<br><br><button type='submit'><a href='../homepage.php' style='text-decoration: none;'>Regresar al inicio</button>";
    echo "<button type = 'submit'><a href='val_circulo.php' style='text-decoration: none;'> Volver </button>";
?>
<?php
    require_once("../plantillas/template_piepagina_01.php");
?>
    
