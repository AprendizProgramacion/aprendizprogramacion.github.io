<?php
  // Importamos librería de herramientas para 
  // programación...  
  require_once("./config/herramientas.php");
//$_SESSION = array();
if(!isset($_SESSION))  session_start(); 

// --- Si llega aquí es porque el acceso es correscto  y los datos fueron cargados
// --- Entonces se construye la página correspondiente

// --- En este proceso previo se debió cargar las dos tablas";
//     revise la consola del navegador para analizar las estructuras y contenidos de datos en las matrices:
//----- $Info_Datos[indice][etiqueta]  y 
//----- $Tabla_Unidades[indice][etiqueta]  

write_to_console("estado SESSION al iniciar...");
write_to_console($_SESSION);

?>
<!----- Inciamos el código HTML de la interface o VISTA DE USUARIO  -->
<html lang="es">
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">  
    <link rel="stylesheet" href="css/style.css?n=1">
    <link rel="stylesheet" href="css/style.css">
</head>

<?php 
    // ---- cargamos plantilla para mostrar la cabecera
    require_once("./plantillas/template_cabecera_principal.php");
?>
<?php

    //----  aquí proyectamos el diseño del menú principal
require_once ("./plantillas/formulario.html");
?>

<?php

  require_once ("./plantillas/template_piepagina_01.php");
  
?>
</body>
</html>