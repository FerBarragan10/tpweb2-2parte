<?php
require('libs/smarty.class.php');

class tablaView
{
  private $Smarty;
  function __construct(){
    $this->Smarty = new Smarty();
  }
  function mostrarAdmin($TITULO,$titulo1,$titulo2,$jugadores,$equipos){
  $this->Smarty->assign('Titulo',$TITULO);
  $this->Smarty->assign('Titulo1',$titulo1);
  $this->Smarty->assign('Titulo2',$titulo2);
  $this->Smarty->assign('jugadores',$jugadores);
  $this->Smarty->assign('equipos',$equipos);
  //$this->Smarty->debugging = true;
  $this->Smarty->display('templates/homeAdmin.tpl');
  }
  function mostrarC($TITULO,$titulo1,$titulo2,$jugadores,$equipos){
  $this->Smarty->assign('Titulo',$TITULO);
  $this->Smarty->assign('Titulo1',$titulo1);
  $this->Smarty->assign('Titulo2',$titulo2);
  $this->Smarty->assign('jugadores',$jugadores);
  $this->Smarty->assign('equipos',$equipos);

  //$this->Smarty->debugging = true;
  $this->Smarty->display('templates/homec.tpl');
  }
  function muestraEditJugador($titulo,$jugador,$equipos){

    $this->Smarty->assign('Titulo',$titulo); // El 'Titulo' del assign puede ser cualquier valor
    $this->Smarty->assign('jugador',$jugador);
    $this->Smarty->assign('equipos',$equipos);
    $this->Smarty->assign('home',"http://".$_SERVER["SERVER_NAME"] . dirname($_SERVER["PHP_SELF"]));
    //$smarty->debugging = true;
    $this->Smarty->display('templates/MuestraEditJugador.tpl');
  }
  function addJugador($titulo,$equipos){
    $this->Smarty->assign('Titulo',$titulo);
    $this->Smarty->assign('equipos',$equipos);
    $this->Smarty->display('templates/addJugador.tpl');

  }

  function muestraFormEquipo($titulo,$equipo){

    $this->Smarty->assign('Titulo',$titulo);
    $this->Smarty->assign('equipo',$equipo);
    $this->Smarty->assign('home',"http://".$_SERVER["SERVER_NAME"] . dirname($_SERVER["PHP_SELF"]));
    //$smarty->debugging = true;
    $this->Smarty->display('templates/abmEquipo.tpl');
  }


}
?>
