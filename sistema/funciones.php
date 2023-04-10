<?php
// iteramos por la base de datoa de categorías
function loadCats($cond = null, $cat = CATEGORIAS){
    $list = [];
    foreach ($cat as $c) {

            if($c['categoria_id'] == $cond){
                $list []= $c;
            }else{
                continue;
            }
    }
    return $list;
} 
function loadUser($id = null, $us = PERSONAS){
    $persona = false;
    foreach($us as $p) {
         if(strpos($p['id'], strval($id)) !== false) {
            $p['perfil'] = profUser($p['perfil_id']);
            $persona = $p;
         }
    }
    return $persona;         
} 
function profUser($id = null, $prof = PERFILES){
    $perfil = false;
    foreach($prof as $pro) {
         if(strpos($pro['id'], strval($id)) !== false) {
            $perfil = $pro;
         }
    }
    return $perfil;         
} 
// function loadEmps($cond = null, $emp = EMPRESAS){
//     $list = [];
//     foreach ($emp as $e) {
//             if($e['categoria_id'] == $cond){
//                 $list []= $e;
//             }else{
//                 continue;
//             }
//     }
//     return $list;
// } 
function loadEmpresa($id = null, $emp = EMPRESAS){
    $empresa = false;
    foreach($emp as $e) {
         if(strpos($e['id'], strval($id)) !== false) {
            $empresa = $e;
         }
    }
    return $empresa;         
} 
// iteramos por la base de datoa de ubicaciones
function loadLocations($cond = null, $loc = UBICACIONES){
    $list = [];
    foreach ($loc as $l) {
            if($l['ubicacion_id'] == $cond){
                $list []= $l;
            }
    }
    return $list;
} 
?>