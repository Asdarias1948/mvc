<?php
 Class InicioControlador{
    private $modelo;

    public function __CONSTRUCT(){

        //$this->modelo= new usuarios();

    }
     public  function Inicio(){

        $bd = bd::Conectar();
    require_once "Vista/assets/header.php";
       require_once "Vista/usuarios/usuarios.php";
       require_once "Vista/assets/menu.php";

     }
 }