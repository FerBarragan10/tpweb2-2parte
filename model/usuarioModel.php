<?php

class usuarioModel{
  private $db;

  function __construct()
  {
   $this->db=$this->Connect();
  }

  private function Connect(){
    return new PDO('mysql:host=localhost;'
   .'dbname=superliga;charset=utf8'
   , 'root','');
  }
  function getUsuario(){
        $sentencia = $this->db->prepare( "select * from usuario");
        $sentencia->execute();
        return $sentencia->fetchAll(PDO::FETCH_ASSOC);
    }


  function agregarUsuario($nombre,$clave){
    $sentencia = $this->db->prepare("INSERT INTO usuario(nombre,clave) VALUES(?,?)");
    $hash = password_hash($clave, PASSWORD_DEFAULT);
    $sentencia->execute(array($nombre,$hash));
  }
  function getUser($user){
    $sentencia =$this->db->prepare( "select * from usuario where nombre =? limit 1");
    $sentencia->execute(array($user));
    return $sentencia->fetchAll(PDO::FETCH_ASSOC);
  }
  function asignarAdmin($id_usuario){
    $sentencia = $this->db->prepare( "update  usuario SET esAdmin=1 where id_usuario=?");
    $sentencia->execute(array($id_usuario));
  }



}
 ?>
