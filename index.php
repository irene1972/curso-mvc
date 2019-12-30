<!--<h1>Hola Mundo MVC!</h1>-->
<h1>Bienvenido a mi web con MVC</h1>
<?php
  //creación de un Controlador Frontal: se encarga de cargar un fichero y una acción u otra en función de lo que viene por la url
  require_once 'controllers/UsuarioController.php';
  require_once 'controllers/NotaController.php';

  if( isset($_GET['controller']) ){
  
    $nombre_controlador = $_GET['controller'] . 'Controller';

    if( class_exists( $nombre_controlador ) ){
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
    
  }else{
    echo "La página que buscas no existe";
  }




?>