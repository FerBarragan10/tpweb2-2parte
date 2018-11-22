<?php
require_once  "./view/usuarioView.php";
require_once  "./model/usuarioModel.php";

class usuarioController extends securedController
{
  private $view;
  private $model;
  private $Titulo;

  function __construct()
  {

    $this->view = new usuarioView();
    $this->model = new usuarioModel();
    $this->Titulo = "nuevo Usuario";
  }

  function mostrarUsuario(){
      $Usuarios = $this->model->getUsuario();
      $this->view->mostrar($this->Titulo, $Usuarios);
  }
  /*function isLogged(){
      $Usuarios = $this->model->getUsuario();
      return ?true:false;
  }*/

  Function addUsuario(){
  $Usuario = $this->model->getUsuario();
  $this->view->addUser($this->Titulo,$Usuario);
  }
function getUser($user){
  return $this->model->getUser($user);
}
  function insertUsuario(){

    $nombre = $_POST["nombre"];
    $clave = $_POST["clave"];
    $this->model->agregarUsuario($nombre,$clave);
    header(LOGIN);
    }



}

 ?>
