<?php
require_once ('libs/Smarty.class.php');

class jugadorView
{
  private $Smarty;
  function __construct(){
    $this->Smarty = new Smarty();
  }

  function muestraFormJugador($titulo,$jugador,$equipos){
    $this->Smarty->assign('Titulo',$titulo); // El 'Titulo' del assign puede ser cualquier valor
    $this->Smarty->assign('jugador',$jugador);
    $this->Smarty->assign('equipos',$equipos);
    $this->Smarty->assign('home',"http://".$_SERVER["SERVER_NAME"] . dirname($_SERVER["PHP_SELF"]));
    //$smarty->debugging = true;
    $this->Smarty->display('templates/amJugador.tpl');
  }

}
?>
