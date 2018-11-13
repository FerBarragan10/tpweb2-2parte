<?php

require_once "Api.php";
require_once "./../model/equipoModel.php";

class EquipoApiController extends Api{

  private $model;
  function __construct(){
    parent::__construct();
    $this->model = new equipoModel();
  }

  function getEquipo($param = null){

    if(isset($param)){
        $id_equipo = $param[0];
        $arreglo = $this->model->getEquipo($id_equipo);
        $data = $arreglo;

    }else{
      $data = $this->model->getEquipos();
    }
      if(isset($data)){
        return $this->json_response($data, 200);
      }else{
        return $this->json_response(null, 404);
      }
  }

  function deleteEquipo($param = null){
    if(count($param) == 1){
        $id_equipo = $param[0];
        $r =  $this->model->removeEquipo($id_equipo);
        if($r == false){
          return $this->json_response($r, 300);
        }

        return $this->json_response($r, 200);
    }else{
      return  $this->json_response("No task specified", 300);
    }
  }

  function insertEquipo($param = null){
   $objetoJson = $this->getJSONData();
    $r = $this->model->addEquipo($objetoJson->id_equipo,$objetoJson->nombre_equipo, $objetoJson->pos_tabla, $objetoJson->clasificacion_copa);
    return $this->json_response($r, 200);
  }

  function updateEquipo($param = null){
    if(count($param) == 1){
      $id_equipo = $param[0];
      $objetoJson = $this->getJSONData();
      $r = $this->model->guardarEquipo($id_equipo,$objetoJson->nombre_equipo, $objetoJson->pos_tabla, $objetoJson->clasificacion_copa);
      return $this->json_response($r, 200);

    }else{
      return  $this->json_response("No task specified", 300);
    }

  }
}
 ?>
