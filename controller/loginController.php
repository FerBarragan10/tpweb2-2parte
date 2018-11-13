<?php
require_once "./view/loginView.php";
require_once "./model/usuarioModel.php";


class loginController
{
  private $View;
  private $titulo;
  private $Model;
  function __construct()
  {
  $this->View=new loginView();
  $this->Model=new usuarioModel();
  $this->titulo="login";
  }

  function login(){

    $this->View->mostrarLogin($this->titulo);
  }

  function logout(){
    session_start();
    session_destroy();
    header(LOGIN);
  }

  function verificarLogin(){
      $user= $_POST["id_usuario"];
      $password= $_POST["pass"];
      $dbUser= $this->Model->getUser($user);
      if((isset($dbUser)&&count($dbUser)>0)){
        if (password_verify($password,$dbUser[0]["clave"])){
          session_start();
            $_SESSION["User"] = $user;
            header(HOMEADMIN);
          }
          else{
            $this->View->mostrarLogin($this->titulo,"Contraseña incorrecta");
          }
        }else{
        //No existe el usario
       $this->View->mostrarLogin($this->titulo,"No existe el usario");
      }
  }
}
 ?>
