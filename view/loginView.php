<?php
class loginView
{
 private $Smarty;
  function __construct(){
    $this->Smarty = new Smarty();
  }
  function mostrarLogin($titulo,$message= ''){
    $this->Smarty->assign('Titulo',$titulo);
    $this->Smarty->assign('message',$message);
  //  $this->Smarty->debugging = true;
    $this->Smarty->display('templates/login.tpl');
  }
}
 ?>
