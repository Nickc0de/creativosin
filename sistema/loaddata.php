<?php
//Acá se cargan los modelos de datos 

define('PERSONAS', json_decode(file_get_contents("json/personas.json"),true));
define ('CATEGORIAS', json_decode(file_get_contents("json/categorias.json"),true));
define ('PERFILES', json_decode(file_get_contents("json/perfiles.json"),true));
define ('EMPRESAS', json_decode(file_get_contents("json/empresas.json"),true));
define ('UBICACIONES', json_decode(file_get_contents("json/ubicaciones.json"),true));
?>