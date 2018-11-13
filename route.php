<?php

  require_once "controller/equipoController.php";
  $controller= new equipoController();
   $partesURL=explode('/',$_GET['action']);
    if ($partesURL[0]== ''){
      $controller->home();

    }elseif ($partesURL[0]=='agregar'){
        $controller->Agrega_jugador();

    }  elseif($partesURL[0]=='borrar'){
          $controller->Borra_jugador($partesURL[1]);
       }

?>
