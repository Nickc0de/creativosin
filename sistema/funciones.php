<?php
// iteramos por la base de datoa de categorías
function loadCats($cond = null){
    $list = [];
    foreach (CATEGORIAS as $c) {

            if($c['categoria_id'] == $cond){
                $list []= $c;
            }else{
                continue;
            }
    }
    return $list;
} 
function loadUser($id = null){
    $persona = false;
    foreach(PERSONAS as $p) {
         if(strpos($p['id'], strval($id)) !== false) {
            $p['perfil'] = profUser($p['perfil_id']);
            $persona = $p;
         }
    }
    return $persona;         
} 
function profUser($id = null){
    $perfil = false;
    foreach(PERFILES as $pro) {
         if(strpos($pro['id'], strval($id)) !== false) {
            $perfil = $pro;
         }
    }
    return $perfil;         
} 

function loadEmpresa($id = null){
    $empresa = false;
    foreach(EMPRESAS as $e) {
         if(strpos($e['id'], strval($id)) !== false) {
            $empresa = $e;
         }
    }
    return $empresa;         
} 
// iteramos por la base de datoa de ubicaciones
function loadLocations($cond = null){
    $list = [];
    foreach (UBICACIONES as $l) {
            if($l['ubicacion_id'] == $cond){
                $list []= $l;
            }
    }
    return $list;
} 
// filtro de búsqueda
function sEngine($valor, $pcat){
    $list = [];
    $modelo = PERSONAS;
    $submodelo = PERFILES;
    if($pcat !== 'personas'){  
        $modelo = EMPRESAS;
        $submodelo = EMPRESAS; 
    } 
    foreach($modelo as $m){
        foreach(sCatInModel($submodelo, $valor) as $id) {
            if(strpos($id['id'], strval($m['id'])) !== false) {
                $list []= $m;
            }
        }
    }
    return $list;
} 

function sCatInModel($modelo, $valor){
    $arr = [];
    foreach ($modelo as $m) {
        if(in_array(strval($valor), $m['categorias'])){
            $arr []= $m;
        }
    } 
    return $arr;
};

function sInCat($string,$lenght){
    $list = [];
    $string = slugify($string);
    foreach (CATEGORIAS as $c) {
        $arr = str_split($c['slug'],$lenght);
        // $arr = explode('_',$c['slug']);
        if(in_array($string, $arr)){
            $list []= $c['id'];
        }
    } 
    return ($list);
}

function slugify($text) {
    // Reemplazar caracteres especiales con letras normales
    $text = str_replace(array('á','é','í','ó','ú','ñ','Ñ'), array('a','e','i','o','u','n','n'), $text);
    
    // Convertir el texto a minúsculas
    $text = strtolower($text);
    
    // Reemplazar los espacios con guiones
    $text = str_replace(' ', '_', $text);
    
    // Eliminar cualquier carácter que no sea una letra, número, guión o guión bajo
    $text = preg_replace('/[^a-z0-9-]/', '_', $text);
    
    // Retornar el slug resultante
    return $text;
  }
?>