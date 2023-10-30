<?php

require_once "Modelos/usuario.php";

class InicioControlador{
    private $modelo;

    public function __CONSTRUCT(){

        $this->modelo= new Usuario();

    }
     public  function Inicio(){

     
    require_once "Vista/assets/header.php";
       require_once "Vista/usuarios/usuarios.php";
       require_once "Vista/assets/menu.php";

     }
 }