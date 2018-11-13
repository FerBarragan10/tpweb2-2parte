<?php

require_once "Api.php";
require_once "./../model/jugadorModel.php";

class JugadoresApiController extends Api{

  private $model;
  function __construct(){
   parent::__construct();
    $this->model = new jugadorModel();
  }

  function getJugadores($param = null){

    if(isset($param)){
        $id_jugador = $param[0];
        $arreglo = $this->model->getJugador($id_jugador);
        $data = $arreglo;

    }else{
      $data = $this->model->getJugadores();
    }
      if(isset($data)){
        return $this->json_response($data, 200);
      }else{
        return $this->json_response(null, 404);
      }
  }

  function deleteJugador($param = null){
    if(count($param) == 1){
        $id_jugador = $param[0];
        $r =  $this->model->borrarJugador($id_jugador);
        if($r == false){
          return $this->json_response($r, 300);
        }

        return $this->json_response($r, 200);
    }else{
      return  $this->json_response("No task specified", 300);
    }
  }

  function insertJugador($param = null){

    $objetoJson = $this->getJSONData();
    $r = $this->model->agregarJugador($objetoJson->id_equipo,$objetoJson->dorsal,$objetoJson->nombre_jugador,$objetoJson->fecha_nac,$objetoJson->altura);

    return $this->json_response($r, 200);
  }

  function updateJugador($param = null){
    if(count($param) == 1){
      $id_jugador = $param[0];
      $objetoJson = $this->getJSONData();
      $r = $this->model->guardarEditarJugador($objetoJson->id_equipo,$objetoJson->nombre_jugador,$objetoJson->fecha_nac,$objetoJson->dorsal,$objetoJson->altura,$id_jugador);
      return $this->json_response($r, 200);

    }else{
      return  $this->json_response("No task specified", 300);
    }

  }
}
 ?>
