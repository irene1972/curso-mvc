<?php 

  class UsuarioController{

    public function mostrarTodos(){
      require_once '../models/Usuario.php';

      $usuario = new Usuario();
      $usuario->conseguirTodos();
    }

    public function crear(){
      
    }

  }

?>