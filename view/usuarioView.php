<?php

require_once ('libs/Smarty.class.php');
class usuarioView
{
  private $Smarty;
   function __construct(){
     $this->Smarty = new Smarty();
   }
  function mostrar($Titulo, $Usuarios){
    $this->Smarty = new Smarty();
    $this->Smarty->assign('Titulo',$Titulo); // El 'Titulo' del assign puede ser cualquier valor
    $this->Smarty->assign('Usuarios',$Usuarios);
    //$smarty->debugging = true;
    $this->Smarty->display('templates/MostrarUsuarios.tpl');
  }
  function addUser($Titulo,$Usuario){
  $this->Smarty->assign('Titulo',$Titulo);
  $this->Smarty->assign('Usuario',$Usuario);
  $this->Smarty->display('templates/agregaUsuario.tpl');

}
}

 ?>
