<?php
class jugadorModel{
  private $db;
  function __construct()
  {
    $this->db=$this->connect();
  }
  private function connect(){
    return new PDO('mysql:host=localhost;'
    .'dbname=superliga;charset=utf8'
    , 'root','');
  }

  function getJugadores(){
    $sentencia =$this->db->prepare( "select * from jugadores order by id_equipo");
    $sentencia->execute();
    return $sentencia->fetchAll(PDO::FETCH_ASSOC);

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
    $sentencia = $this->db->prepare( "select * from jugadores where id_equipo=?");
    $sentencia->execute(array($id_equipo));
    return $sentencia->fetchAll(PDO::FETCH_ASSOC);

  }


}
?>
