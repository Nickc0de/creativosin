<?php
require_once('sistema/config.php');
require_once('sistema/loaddata.php'); 
require_once('sistema/funciones.php'); 
if (!empty($_GET['md']))
   	$modulo = $_GET['md'];
   else	
	$modulo = PREDET;
if (empty($conf[$modulo]))
       $modulo = PREDET;

if (empty($conf[$modulo]['layout']))
       $conf[$modulo]['layout'] = DEFAULT_LAYOUT;

$path_layout = LAYOUT_PATH.'/'.$conf[$modulo]['layout'];
$path_modulo = MODULO_PATH.'/'.$conf[$modulo]['archivo'];

if (file_exists($path_layout))
 include( $path_layout );
else
 if (file_exists( $path_modulo ))
   include( $path_modulo );
 else
	 die('Error al cargar el módulo <b>'.$modulo.'</b>. No existe el archivo');	

?>