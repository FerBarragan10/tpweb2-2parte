<?php
class ConfigApp
{
    public static $ACTION = 'action';
    public static $PARAMS = 'params';
    public static $ACTIONS = [
      ''=> 'TareasController#home',
      'home'=> 'TareasController#home',
      'fer'=> 'TareasController#home',
      'borrar'=> 'TareasController#BorrarTarea',
      'agregar'=> 'TareasController#InsertTarea',

    ];

}
 ?>
