<?php

class ConfigApi
{
    public static $RESOURCE = 'resource';
    public static $PARAMS = 'params';
    public static $RESOURCES = [
      'equipo#GET'=> 'EquipoApiController#getEquipo',
      'equipo#DELETE'=> 'EquipoApiController#deleteEquipo',
      'equipo#POST'=> 'EquipoApiController#insertEquipo',
      'equipo#PUT'=> 'EquipoApiController#updateEquipo',

     'jugador#GET'=> 'JugadoresApiController#getJugadores',
      'jugador#DELETE'=> 'JugadoresApiController#DeleteJugador',
      'jugador#POST'=> 'JugadoresApiController#InsertJugador',
     'jugador#PUT'=> 'JugadoresApiController#updateJugador'
    ];

}

 ?>
