<?php

require_once "Api.php";
require_once "./../model/comentarioModel.php";

class ComentariosApiController extends Api{

  private $model;
  function __construct(){
    parent::__construct();
    $this->model = new comentarioModel();
  }
  function getComentario($param = null){
    if(isset($param)){
        $id_comentario=$param[0];
        $arreglo = $this->model->getComentario($id_comentario);
        $data = $arreglo;

    }else{
      $data = $this->model->getComentarios();
    }
      if(isset($data)){
        return $this->json_response($data, 200);
      }else{
        return $this->json_response(null, 404);
      }
  }

  function deleteComentario($param = null){
    if(count($param) == 1){
        $id_comentario = $param[0];
        $r =  $this->model->removeComentario($id_comentario);
        if($r == false){
          return $this->json_response($r, 300);
        }

        return $this->json_response($r, 200);
    }else{
      return  $this->json_response("No task specified", 300);
    }
  }

  function insertComentario($param = null){
   $objetoJson = $this->getJSONData();
    $r = $this->model->addComentario($objetoJson->comentario, $objetoJson->id_usuario, $objetoJson->id_jugador,$objetoJson->imagen);
    return $this->json_response($r, 200);
  }


}
 ?>
