<?php 

  class NotaController{
    
    public function listar(){

      //Modelo
      require_once 'models/Nota.php';

      //logica de la acción del controlador
      $nota = new Nota();
      //$nota->setNombre("Nota1");
      //$nota->setContenido("Hola Mundo PHP MVC");

      //la pasamos como parámetro el nombre de la tabla a listar
      $notas = $nota->conseguirTodos('notas');

      //vista
      require_once 'views/notas/listar.php';

    }

    public function crear(){
      //Modelo
      require_once 'models/Nota.php';

      $nota = new Nota();
      $nota->setUsuario_id(1);
      $nota->setTitulo('Nota X');
      $nota->setDescripcion('Nota guardada desde mi metodo save');
      $nota->guardar();

      //echo $nota->db->error;
      //die('zzz');

      header("Location: index.php?controller=Nota&action=listar");
    }

    public function borrar(){
      echo "Nota Borrada!";
    }
  }

?>