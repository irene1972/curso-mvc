<!--<h1>Hola Mundo MVC!</h1>-->
<h1>Bienvenido a mi web con MVC</h1>
<?php
  require_once 'controllers/UsuarioController.php';

  $controlador = new UsuarioController();
  $controlador->mostrarTodos();
  $controlador->crear();

  if( isset($_GET['action']) && method_exists( $controlador, $_GET['action']) ){
    $action = $_GET['action'];

    $controlador->$action();

  }else{
    echo "La página que buscas no existe";
  }
  
  




?>