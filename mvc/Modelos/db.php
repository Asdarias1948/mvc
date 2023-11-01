<?php

class bd {
    const servidor = "localhost";
    const usuario = "root";
    const clave = "";
    const nombredb = "ping";

    public static function Conectar() {
        try {
            $conexion = new PDO("mysql:host=".self::servidor.";dbname=".self::nombredb.";charset=utf8", self::usuario, self::clave);
            $conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            return $conexion;
        } catch(PDOException $e) {
            return "Fallo: ".$e->getMessage();
        }
    }
}
