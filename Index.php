<?php

echo"Bienvenidos";

if(!iseet($_GET['c'])){

    require_once "Controladores/Inicio.controlador.php"
    $controlador = new InicioControlador();
    call_user_fnc(array($controlador,"Inicio"));
     
} else{
$controlador = $_GET['c'];
require_once "Controladores/$controlador.controlador.php";
$controlador = new "$controlador.controlador.php";
$controlador = ucwords($controlador)."Controlador";
$controlador = new $controlador;
$accion = isset($_GET['a'] ? $_GET['a'] : "Inicio");
call_user_func(array($controlador,$accion));
}
?>