<?php 

  class UsuarioController{

    public function mostrarTodos(){
      //require_once '../models/Usuario.php';  --> al tener el require del controlador en el index.php cuando buscamos un archivo debemos hacerlo desde la raiz, sino da error
      require_once 'models/Usuario.php';

      $usuario = new Usuario();
      $todos_los_usuarios = $usuario->conseguirTodos();

      //require_once '../views/usuarios/mostrar-todos.php';  --> al tener el require del controlador en el index.php cuando buscamos un archivo debemos hacerlo desde la raiz, sino da error
      require_once 'views/usuarios/mostrar-todos.php';
    }

    public function crear(){
      
      require_once 'views/usuarios/crear.php';

    }

  }

?>