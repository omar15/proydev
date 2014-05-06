<?php

session_start();//Habilitamos uso de variables de sesi�n
//Obtenemos el tipo de edici�n
if(isset($_GET["id_edicion"])){

        $id_edicion = intval($_GET["id_edicion"]);

    }else{

        $id_activa = intval($_GET["id_activa"]);    

    }
//Incluimos cabecera
include('../../inc/header.php');
//Variable de respuesta
$respuesta = intval($_GET['r']);

//Mensaje respuesta
$mensaje = Permiso::mensajeRespuesta($respuesta);
?>
<div id="principal">
   <div id="contenido">
    <h2 class="centro">Edici&oacute;n de Perfiles</h2>
    <?php if($respuesta > 0){?>
    
    <div class="mensaje"><?php echo $mensaje;?></div>
    
    <?php } ?>
    
	<div  align="center">                
        <?php
            //Si el registro no es exitoso mostramos el formulario de usuario 
            if($respuesta != 1){        
                include_once("form_perfil.php");    
            }
        ?>
    </div>
        </div>
    </div>
<?php 

//Incluimos pie

include($_SESSION['inc_path'].'/footer.php');

?>