<?php
   require_once("../plantillas/template_cabecera_01.php");
?>
<?php
    
    if (isset ($_POST ['cat'])) {

        $cat = $_POST ['cat'];
        
    } else {
            
        $cat = "";
    }

    $hip = $_POST ['hip'];

    if ($cat != "") {
        
        $cata = intval ($cat); 

        if ($cata == 0 && $cat != "0" ) {
            
            echo"ERROR ... DEBE INFORMAR UN VALOR NUMERICO... INTENTE NUEVAMENTE";
            
        }else { 
  
            $opr = pow($hip,2) - pow($cat,2);
            $base = sqrt($opr);

            $area = $base *( $cat / 2); 

            $perimetro = $hip + $cat + $base;

            $altura = 2 * $area / $base;
            

            echo "<h1>Valores del triangulo rectangulo </h1>";
            echo "El cateto del triangulo es de:  ". $cat."cm"."<br><br> La hipotenusa del triangulo es de:  ". $hip . "cm" ."<br><br>La base del triangulo es de:  " . $base. "cm";
            echo "<br><br>El area del triangulo es de:  ". $area . "m²" . "<br><br>El perimetro del triangulo es de:  " . $perimetro . "cm" . "<br><br>La altura del triangulo es de:  " . $altura . "cm";        }
    }else {
        echo "La operacion no se puede realizar... Debe ingresar un valor numerico en cada espacio";
    }
    echo "<br><br><button type='submit'><a href='../homepage.php' style='text-decoration: none;'>Regresar al inicio</button>";
    echo "<button type = 'submit'><a href='val_triangulo.php' style='text-decoration: none;'> Volver </button>";
?>

<?php

  require_once ("../plantillas/template_piepagina_01.php");
  
?>