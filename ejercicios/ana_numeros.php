<?php
    require_once("../plantillas/template_cabecera_01.php");
?>
<?php

    $arraydatos = array(

        $valor = $_POST['primero'],
        $valor = $_POST['segundo'],
        $valor = $_POST['tercero'],
        $valor = $_POST['cuarto'],
    );

    echo "<h1>Analisis de cuatro números </h1>";
   
    foreach ($arraydatos as $valor) {

        $valore = intval ($valor); 

        if ($valore == 0 && $valor != "0" ) {
            
            echo "<pre>El valor " .  var_export($valor, true) . " No cuenta con las especificaciones solicitadas porfavor realize las corecciones correspondientes ";

        }else { 
    
            if (is_numeric($valor)) {
               
                $num = "enteros";
            }
            else {
                $num = "decimales";
            }

            if ($valore > 0 || $valore == 0) {

                $car = "positivo";

            } else {

               $car = "negativo";
            }

            if ($valore % 2 == 0) {
                $par = "par";
            } else {
                $par = "impar";
            }
            

            echo "<pre>El valor " . var_export($valor, true) . " Es numérico" . ", pertenece a los " . $num . ", es de caracter " . $car . " y es " . $par ;
        }
    }
    echo "<br><br><button type='submit'><a href='../homepage.php' style='text-decoration: none;'>Regresar al inicio</button>";
    echo "<button type = 'submit'><a href='Analisis_4_numeros.php' style='text-decoration: none;'> Volver </button>";
    
?>
<?php
    require_once("../plantillas/template_piepagina_01.php");
?>