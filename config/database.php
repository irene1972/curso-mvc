<?php

  class database{
    public static function conectar(){
      $conexion = new mysqli("localhost", "root", "", "curso_mvc");
      $conexion->query("SET NAMES 'utf8'");

      return $conexion;
    }
  }

?>