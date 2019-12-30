<!--<h1>Hola Mundo MVC!</h1>-->
<h1>Bienvenido a mi web con MVC</h1>
<?php
  //creación de un Controlador Frontal: se encarga de cargar un fichero y una acción u otra en función de lo que viene por la url
  require_once 'controllers/UsuarioController.php';

  if( isset($_GET['controller']) && class_exists( $_GET['controller'] ) ){
  
    $nombre_controlador = $_GET['controller'];
    $controlador = new $nombre_controlador();
      //$controlador->mostrarTodos();
      //$controlador->crear();

    if( isset($_GET['action']) && method_exists( $controlador, $_GET['action']) ){
      $action = $_GET['action'];
  
      $controlador->$action();
    }else{
      echo "La página que buscas no existe";
    }
    
  }else{
    echo "La página que buscas no existe";
  }




?>