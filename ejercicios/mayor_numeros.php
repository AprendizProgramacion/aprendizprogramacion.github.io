<?php
    require_once("../plantillas/template_cabecera_01.php");
?>
<?php

    if (isset ($_POST ['one'])) {

        $one = $_POST ['one'];
        
    } else {
            
        $one = "";
    }
   
    if ($one != "") {
        $on = intval ($one);
        if ($one == 0 && $on != "0" ) {
            
            echo "ERROR ... DEBE INFORMAR UN VALOR NUMERICO... INTENTE NUEVAMENTE";
        }else { 
            
            echo "<h1>El mayor de dos números </h1>";

            $two =  $_POST['two'];

            if ($one > $two) {
                
                echo "El número mayor entre el valor " . "[".$one . "]" .  "  y  " . "[" . $two. "]"."  es " . $one;

            } else {

                echo "El número mayor entre el valor" . "[".$one . "]" .  " y " . "[" . $two. "]"." es " . $two;
            }
            
        }
    }else {
        echo "La operacion no se puede realizar... Debe ingresar un valor numerico ";
    }

    echo "<br><br><button type='submit'><a href='../homepage.php' style='text-decoration: none;'>Regresar al inicio</button>";
    echo "<button type = 'submit'><a href='mayor_2_numeros.php' style='text-decoration: none;'> Volver </button>";
?>
<?php
    require_once("../plantillas/template_piepagina_01.php");
?>