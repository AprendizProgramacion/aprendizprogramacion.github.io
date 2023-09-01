<?php
   require_once("../plantillas/template_cabecera_01.php");
?>
<?php

    if (isset ($_POST ['pe'])) {

        $p = $_POST ['pe'];
        
    } else {
            
        $p = "";
    }
   
    if ($p != "") {
        $pe = intval ($p);
        if ($pe == 0 && $p != "0" ) {
            
            echo"ERROR ... DEBE INFORMAR UN VALOR NUMERICO... INTENTE NUEVAMENTE";
        }else { 
            
            $x = $_POST ['x'];
            $y = $_POST ['y'];
            $π = 3.1416;

            $r = ($pe ) / (2 * $π);
            $d = (2 * $r);
            $a = $π * pow($r,2);
           

            echo "<h1>Valores de una Circunferencia </h1>";
            echo "Las coordenadas de la circunferencia son: " . $x . "x, ". $y. "y" . "<br><br>El centro de la circunferencia es:  " ."(" .($x / 2) . ",". ($y / 2). ")". "<br><br>El perimetro de la circunferencia es:  " . $pe . "cm" . "<br><br>El radio de la circunferencia es de:  " . $r . "m";
            echo "<br><br>El diametro de la circunferencia es de:  " . $d . "m" . "<br><br> El area de la circunferencia es:  " . $a . "cm²" . "<br><br>";
        }
    }else {
        echo "La operacion no se puede realizar... Debe ingresar un valor numerico en cada espacio";
    }

    echo "<br><br><button type='submit'><a href='../homepage.php' style='text-decoration: none;'>Regresar al inicio</button>";
    echo "<button type = 'submit'><a href='val_circunferencia.php' style='text-decoration: none;'> Volver </button>";

    
?>

<?php
    require_once ("../plantillas/template_piepagina_01.php");
?>
