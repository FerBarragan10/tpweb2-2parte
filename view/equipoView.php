<?php
require_once ('libs/Smarty.class.php');

class equipoView
{
  private $Smarty;
  function __construct(){
    $this->Smarty = new Smarty();
  }
  function mostrar($TITULO,$titulo1,$titulo2,$jugadores,$equipos,$temp,$usuario){
  $this->Smarty->assign('Titulo',$TITULO);
  $this->Smarty->assign('Titulo1',$titulo1);
  $this->Smarty->assign('Titulo2',$titulo2);
  $this->Smarty->assign('jugadores',$jugadores);
  $this->Smarty->assign('equipos',$equipos);
  $this->Smarty->assign('usuario',$usuario);
  $this->Smarty->display('templates/' . $temp . '.tpl');
  }

function muestraFormEquipo($titulo,$equipo){
    $this->Smarty->assign('Titulo',$titulo);
    $this->Smarty->assign('equipo',$equipo);
    $this->Smarty->assign('home',"http://".$_SERVER["SERVER_NAME"] . dirname($_SERVER["PHP_SELF"]));
    $this->Smarty->display('templates/abmEquipo.tpl');
  }
}
?>
