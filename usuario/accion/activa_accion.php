<?php
session_start();//Indicamos el uso de variables de sesi�n

//Librer�a de conexi�n
include ($_SESSION['inc_path']."conecta.php");

//Librer�a de permisos
include_once($_SESSION['model_path'].'accion.php');

//Obtenemos variables
$id_activo = $_GET["id_activo"];

//Respuesta al intentar guardar datos
$resp = 0;

if($id_activo){
    //Editamos registro
    $resp = Accion::activaAccion($id_activo);
    }
    
//Redireccionamos con el tipo de respuesta
//echo '<script language="JavaScript">location.href="lista_accion.php?r=' . $resp .'"</script>';
header('Location:lista_accion.php?r=' . $resp);
?>