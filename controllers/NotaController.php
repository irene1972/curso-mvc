<?php 

  class NotaController{
    
    public function listar(){

      //Modelo
      require_once 'models/Nota.php';

      //logica de la acción del controlador
      $nota = new Nota();
      $nota->setNombre("Nota1");
      $nota->setContenido("Hola Mundo PHP MVC");

      //vista
      require_once 'views/notas/listar.php';

    }

    public function crear(){
      echo "Nota Creada!";
    }

    public function borrar(){
      echo "Nota Borrada!";
    }
  }

?>