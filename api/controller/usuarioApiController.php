<?php

require_once "Api.php";
require_once "./../model/usuarioModel.php";

class usuarioApiController extends Api{

  private $model;
  function __construct(){
    parent::__construct();
    $this->model = new usuarioModel();
  }
  function getUsuario($param = null){
    if(isset($param)){
        $id_usuario=$param[0];
        $arreglo = $this->model->getUser($id_usuario);
        $data = $arreglo;

    }else{
      $data = $this->model->getUsuarios();
    }
      if(isset($data)){
        return $this->json_response($data, 200);
      }else{
        return $this->json_response(null, 404);
      }
  }

  function deleteUsuario($param = null){
    if(count($param) == 1){
        $id_usuario = $param[0];
        $r =  $this->model->removeUsuario($id_usuario);
        if($r == false){
          return $this->json_response($r, 300);
        }

        return $this->json_response($r, 200);
    }else{
      return  $this->json_response("No task specified", 300);
    }
  }
  function insertUsuario($param = null){
   $objetoJson = $this->getJSONData();
    $r = $this->model->agregarUsuario($objetoJson->nombre, $objetoJson->clave, $objetoJson->esAdmin);
    return $this->json_response($r, 200);



        $objetoJson = $this->getJSONData();
        $r = $this->model->agregarJugador($objetoJson->id_equipo,$objetoJson->dorsal,$objetoJson->nombre_jugador,$objetoJson->fecha_nac,$objetoJson->altura);

        return $this->json_response($r, 200);

  }
}
 ?>
