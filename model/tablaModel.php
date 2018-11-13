<?php
class tablaModel{
  private $db;
  function __construct()
  {
    $this->db=$this->Connect();
  }
  private function Connect(){
    return new PDO('mysql:host=localhost;'
    .'dbname=superliga;charset=utf8'
    , 'root', '');
  }
  function getJugadores(){
    $sentencia =$this->db->prepare( "select * from jugadores order by id_equipo");
    $sentencia->execute();
    return $sentencia->fetchAll(PDO::FETCH_ASSOC);
    header("Location: http://".$_SERVER["SERVER_NAME"] . dirname($_SERVER["PHP_SELF"]));
  }
  function agregarJugador($id_equipo,$dorsal,$nombre_jugador,$fecha_nac,$altura){
    $sentencia = $this->db->prepare("INSERT INTO jugadores(id_equipo,dorsal,nombre_jugador,fecha_nac,altura) VALUES(?,?,?,?,?)");
    $sentencia->execute(array($id_equipo,$dorsal,$nombre_jugador,$fecha_nac,$altura));
  }
  function borrarJugador($id_jugador){
    $sentencia = $this->db->prepare("delete from jugadores where id_jugador=?");
    $sentencia->execute(array($id_jugador));
  }
  function guardarEditarJugador($id_equipo,$nombre_jugador,$fecha_nac,$dorsal,$altura,$id_jugador){
    $sentencia = $this->db->prepare( "update jugadores set id_equipo=?, nombre_jugador= ?, fecha_nac = ?, dorsal = ?, altura = ? where id_jugador=?");
    $sentencia->execute(array($id_equipo,$nombre_jugador,$fecha_nac,$dorsal,$altura,$id_jugador));


  }
  function getJugador($id_jugador){
    $sentencia = $this->db->prepare( "select * from jugadores where id_jugador=?");
    $sentencia->execute(array($id_jugador));
    return $sentencia->fetch(PDO::FETCH_ASSOC);
  }

  function getJugadoresEquipo($id_equipo){
    $sentencia = $this->db->prepare( "select * from jugadores where id_equipo='$id_equipo'");
    $sentencia->execute();
    //mysql_close($db);
    return $sentencia->fetch(PDO::FETCH_ASSOC);
  }


  function getEquipos(){
    $sentencia = $this->db->prepare( "select * from equipo order by pos_tabla");
    $sentencia->execute();
    //mysql_close($db);
    return $sentencia->fetchAll(PDO::FETCH_ASSOC);
    header("Location: http://".$_SERVER["SERVER_NAME"] . dirname($_SERVER["PHP_SELF"]));
  }
  //revisar
  function getEquipo($id_equipo){
    $sentencia = $this->db->prepare( "select * from equipo where id_equipo='$id_equipo'");
    $sentencia->execute();
    //mysql_close($db);
    return $sentencia->fetch(PDO::FETCH_ASSOC);
  }
  function guardarEquipo($id_equipo,$nombreequipo,$postabla,$clasificacioncopa){
    $sentencia = $this->db->prepare( "update equipo set nombre_equipo= ?, pos_tabla = ?, clasificacion_copa = ? where id_equipo=?");
    $sentencia->execute(array($nombreequipo,$postabla,$clasificacioncopa,$id_equipo));
  }
  function addEquipo($id_equipo,$nombreequipo, $postabla, $clasificacioncopa){
    $sentencia = $this->db->prepare("INSERT INTO equipo(id_equipo,nombre_equipo,pos_tabla,clasificacion_copa) VALUES(?,?,?,?)");
    $sentencia->execute(array($id_equipo,$nombreequipo, $postabla, $clasificacioncopa));
    header("Location: http://".$_SERVER["SERVER_NAME"] . dirname($_SERVER["PHP_SELF"]));
  }

  function removeEquipo($id_equipo){
    $accion = $this->db->prepare("delete from jugadores where id_equipo=?");
    $accion->execute(array($id_equipo));
    $accion2 = $this->db->prepare("delete from equipo where id_equipo=?");
    $accion2->execute(array($id_equipo));
  }
}
?>
