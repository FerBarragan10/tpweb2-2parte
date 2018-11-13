<?php
class equipoModel{
  private $db;
  function __construct()
  {
    $this->db=$this->connect();
  }
  private function connect(){
    return new PDO('mysql:host=localhost;'
    .'dbname=superliga;charset=utf8'
    , 'root', '');
  }




  function getEquipos(){
    $sentencia = $this->db->prepare( "select * from equipo order by pos_tabla");
    $sentencia->execute();
    //mysql_close($db);
    return $sentencia->fetchAll(PDO::FETCH_ASSOC);
    //header(HOME);
  }
  //revisar
  function getEquipo($id_equipo){
    $sentencia = $this->db->prepare( "select * from equipo where id_equipo='$id_equipo'");
    $sentencia->execute();
    return $sentencia->fetch(PDO::FETCH_ASSOC);
  }
  function guardarEquipo($id_equipo,$nombreequipo,$postabla,$clasificacioncopa){
    $sentencia = $this->db->prepare( "update equipo set nombre_equipo= ?, pos_tabla = ?, clasificacion_copa = ? where id_equipo=?");
    $sentencia->execute(array($nombreequipo,$postabla,$clasificacioncopa,$id_equipo));
  }
  function addEquipo($id_equipo,$nombreequipo, $postabla, $clasificacioncopa){
    $sentencia = $this->db->prepare("INSERT INTO equipo(id_equipo,nombre_equipo,pos_tabla,clasificacion_copa) VALUES(?,?,?,?)");
    $sentencia->execute(array($id_equipo,$nombreequipo, $postabla, $clasificacioncopa));
    //header(HOMEADMIN);
  }

  function removeEquipo($id_equipo){
    $accion = $this->db->prepare("delete from jugadores where id_equipo=?");
    $accion->execute(array($id_equipo));
    $accion2 = $this->db->prepare("delete from equipo where id_equipo=?");
    $accion2->execute(array($id_equipo));
  }


}
?>
