<?php
require_once "./view/jugadorView.php";
require_once "./model/jugadorModel.php";
require_once "./model/equipoModel.php";
require_once "securedController.php";

class jugadorController
{
  private $jugadorView;
  PRIVATE $TITULO;
  private $titulo1;
  private $titulo2;
  private $jugadorModel;
  private $equipoModel;

    function __construct()
    {
    $this->jugadorView=new jugadorView();
    $this->jugadorModel=new jugadorModel();
    $this->equipoModel=new equipoModel();
    $this->titulo1="Equipos de la Superliga  Argentina";
    $this->titulo2="Jugadores de la Superliga  Argentina";
    $this->tituloedit="editar jugador";
    $this->Titulo="HOME";
    }


 function guardarJugador(){
 $id_equipo = $_POST["id_equipo"];
 $nombre_jugador = $_POST["nombrejugador"];
 $fecha_nac = $_POST["fechanac"];
 $dorsal=$_POST["dorsal"];
 $altura=$_POST["altura"];
 $id_jugador=$_POST["idjugador"];
 if ( $id_jugador=="") {
  $this->jugadorModel->agregarJugador($id_equipo,$dorsal,$nombre_jugador,$fecha_nac,$altura);
  header(HOME);
 }
 else{
   $this->jugadorModel->guardarEditarJugador($id_equipo,$nombre_jugador,$fecha_nac,$dorsal,$altura,$id_jugador);
   header(HOME);
 }

}
function addjugador(){
    $equipos = $this->equipoModel->getEquipos();
    $this->jugadorView->muestraFormJugador($this->tituloedit,$jugador,$equipos);
}

 function editarJugador($param){
       $id_jugador = $param[0];
       $jugador = $this->jugadorModel->getJugador($id_jugador);
       $equipos = $this->equipoModel->getEquipos();
       $this->jugadorView->muestraFormJugador($this->tituloedit,$jugador,$equipos);
   }
   function borraJugador($param){
       $this->jugadorModel->borrarJugador($param[0]);
       header(HOME);
   }


   function getJugadoresEquipo($equipo){
    $jugadores=$this->jugadorModel->getJugadoresEquipo($equipo);

    return $jugadores;
    }
    function getJugadores(){
      $jugadores=$this->jugadorModel->getJugadores();
      return $jugadores;
     }



function getEquipo(){
 $nombreequipo = $_POST['nombre_equipo'];
 if(isset($_POST['nombre_equipo'])) {
     $equipo=$this->Model->getEquipo($nombreequipo);
     $jugadores=$this->Model->getJugadores($equipo['id_equipo']);
     $this->View->mostrar($equipo,$jugadores);
   }
 }
}
?>
