<?php
require_once ('libs/Smarty.class.php');

class equipoView
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
  $this->Smarty->display('templates/homeAdmin.tpl');
  }
  function mostrarC($TITULO,$titulo1,$titulo2,$jugadores,$equipos){
  $this->Smarty->assign('Titulo',$TITULO);
  $this->Smarty->assign('Titulo1',$titulo1);
  $this->Smarty->assign('Titulo2',$titulo2);
  $this->Smarty->assign('jugadores',$jugadores);
  $this->Smarty->assign('equipos',$equipos);
  $this->Smarty->display('templates/homec.tpl');
  }
function muestraFormEquipo($titulo,$equipo){
    $this->Smarty->assign('Titulo',$titulo);
    $this->Smarty->assign('equipo',$equipo);
    $this->Smarty->assign('home',"http://".$_SERVER["SERVER_NAME"] . dirname($_SERVER["PHP_SELF"]));
    $this->Smarty->display('templates/abmEquipo.tpl');
  }
}
?>
