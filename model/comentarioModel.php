<?php
class comentarioModel{
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
  function getComentario($id_comentario){
    $sentencia = $this->db->prepare( "select * from comentarios where id_comentario=?");
    $sentencia->execute(array($id_comentario));
    return $sentencia->fetch(PDO::FETCH_ASSOC);
  }
  function getComentarios(){
    $sentencia =$this->db->prepare( "select * from comentarios order by id_usuario");
    $sentencia->execute();
    return $sentencia->fetchAll(PDO::FETCH_ASSOC);
  }
  function getJugadoresUsuario($id_usuario){
    $sentencia = $this->db->prepare( "select * from comentarios where id_usuario=?");
    $sentencia->execute(array($id_usuario));
    return $sentencia->fetchAll(PDO::FETCH_ASSOC);

  }
  function addComentario($comentario,$id_usuario,$id_jugador,$imagen,$fecha){
    $sentencia = $this->db->prepare("INSERT INTO comentarios(comentario,id_usuario,id_jugador,imagen,fecha) VALUES(?,?,?,?,?)");
    $sentencia->execute(array($comentario,$id_usuario,$id_jugador,$imagen,$fecha));
  }
  function removeComentario($id_comentario){
    $sentencia = $this->db->prepare("delete from comentarios where id_comentario=?");
    $sentencia->execute(array($id_comentario));
  }
}
?>
