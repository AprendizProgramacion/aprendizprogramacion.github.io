<?php
    require_once("../plantillas/template_cabecera_01.php");
?>
<?php

    $suma = array(1,2,3,4,5,6,7,8,9,10);

    $enteros;
     for( $enteros = 1; $enteros <= 10; $enteros++ ){
        
        echo "Los primeros número enteros son ".$enteros."<br/>";
        if ($enteros == 10) {
            
            $total =  array_sum ($suma) ;

            echo "<br>El total de la suma de los primeros número  enteros es: ". $total;
        }
    }
    echo "<br><br><button type='submit'><a href='../homepage.php' style='text-decoration: none;'>Regresar al inicio</button>";
?>
<?php
    require_once("../plantillas/template_piepagina_01.php");
?>