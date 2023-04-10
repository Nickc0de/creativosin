<?php
define('PREDET', 'home');
define('DEFAULT_LAYOUT', 'default.php');
define('MODULO_PATH', realpath('vistas/modules/'));
define('LAYOUT_PATH', realpath('vistas/layout/'));

// elementos del layout
$conf['home'] = array('archivo' => 'home.php', 'title' => 'Creativos Inn - Inicio');
$conf['persona'] = array('archivo' => 'persona-prof.php', 'layout' => 'persona.php', 'title' => 'Creativos Inn - perfil');
$conf['empresa'] = array('archivo' => 'empresa-prof.php', 'layout' => 'empresa.php', 'title' => 'Creativos Inn - perfil de la empresa');
$conf['personas'] = array('archivo' => 'empresa-prof.php', 'layout' => 'allpersonas.php', 'title' => 'Creativos Inn - Encuentra lo que buscas');
$conf['empresas'] = array('archivo' => 'empresa-prof.php', 'layout' => 'allempresas.php', 'title' => 'Creativos Inn - Encuentra lo que buscas');