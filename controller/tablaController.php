<?php
require_once "./view/tablaView.php";
require_once "./model/tablaModel.php";
require_once "securedController.php";

class tablaController
{
  private $View;
  PRIVATE $TITULO;
  private $titulo1;
  private $titulo2;
  private $Model;

    function __construct()
    {
    $this->View=new tablaView();
    $this->Model=new tablaModel();
    $this->titulo1="Equipos de la Superliga  Argentina";
    $this->titulo2="Jugadores de la Superliga  Argentina";
    $this->tituloedit="editar jugador";
    $this->Titulo="HOME";
    }
    function addJugador(){
        $equipos = $this->Model->getEquipos();
        $this->View->addJugador($this->titulo2,$equipos);
    }


  function homeAdmin(){
    $jugadores =$this->Model->getJugadores();
    $equipos = $this->Model->getEquipos();
    $this->View->mostrarAdmin($this->Titulo,$this->titulo1,$this->titulo2,$jugadores,$equipos);
  }

  function home(){
    $jugadores =$this->Model->getJugadores();
    $equipos = $this->Model->getEquipos();
    $this->View->mostrarC($this->Titulo,$this->titulo1,$this->titulo2,$jugadores,$equipos);

  }
  function agregaJugador(){
   $id_equipo=$_POST["id_equipo"];
   $dorsal=$_POST["dorsal"];
   $nombre_jugador=$_POST["nombre_jugador"];
   $fecha_nac=$_POST["fecha_nac"];
   $altura=$_POST["altura"];
   $this->Model->agregarJugador($id_equipo,$dorsal,$nombre_jugador,$fecha_nac,$altura);
   header(HOMEADMIN);
  }
 function borraJugador($param){
     $this->Model->borrarJugador($param[0]);
     header(HOMEADMIN);
 }
 function guardarEditarJugador(){
 $id_equipo = $_POST["id_equipo"];
 $nombre_jugador = $_POST["nombrejugador"];
 $fecha_nac = $_POST["fechanac"];
 $dorsal=$_POST["dorsal"];
 $altura=$_POST["altura"];
 $id_jugador=$_POST["idjugador"];
 $this->Model->guardarEditarJugador($id_equipo,$nombre_jugador,$fecha_nac,$dorsal,$altura,$id_jugador);
 header(HOMEADMIN);
}

 function editarJugador($param){
       $id_jugador = $param[0];
       $jugador = $this->Model->getJugador($id_jugador);
       $equipos = $this->Model->getEquipos();
       $this->View->muestraEditJugador($this->tituloedit,$jugador,$equipos);
   }
 function editEquipo($param){
     $id_equipo = $param[0];
     $equipo = $this->Model->getEquipo($id_equipo);
     $this->View->muestraFormEquipo($this->tituloedit,$equipo);
 }
 function guardarEquipo(){
   $id_equipo = $_POST['id_equipo'];
   $nombreequipo = $_POST['nombre_equipo'];
   $postabla = $_POST['pos_tabla'];
   $clasificacioncopa = $_POST['clasificacion_copa'];
   if ($id_equipo=="") {
     $this->Model->addEquipo($id_equipo,$nombreequipo,$postabla,$clasificacioncopa);
     header(HOMEADMIN);
   }
   else {
     $this->Model->guardarEquipo($id_equipo,$nombreequipo,$postabla,$clasificacioncopa);
     header(HOMEADMIN);
   }
 }


 function  removeEquipo($param){
     $this->Model->removeEquipo($param[0]);//id_equipo
     header(HOMEADMIN);
 }
 function addEquipo(){
     $equipo=0;
     $this->View->muestraFormEquipo($this->tituloedit,$equipo);
 }
 function adddEquipo($param){

  $nombreequipo = $_POST['nombre_equipo'];
  $postabla = $_POST['pos_tabla'];
  $clasificacioncopa = $_POST['clasificacion_copa'];
  if(isset($nombreequipo) && !empty($postabla) && !empty($clasificacioncopa)){
      $this->Model->addEquipo($nombreequipo,$postabla,$clasificacioncopa);
    }
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
