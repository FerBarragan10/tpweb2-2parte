<?php
//referencias de acciones para usar en el controler
//define('PUERTO', ":8888");
define('PUERTO', "");
define('PASSDB', "");//root
//define('BASE', "http://localhost:8888/TPweb2/");
define('BASE', "http://localhost/TPweb2/");

define('HOME', 'Location: http://'.$_SERVER["SERVER_NAME"] . PUERTO. dirname($_SERVER["PHP_SELF"]) .'/home');
define('LOGIN', 'Location: http://'.$_SERVER["SERVER_NAME"] . PUERTO . dirname($_SERVER["PHP_SELF"]). '/login');
define('LOGOUT', 'Location: http://'.$_SERVER["SERVER_NAME"] . PUERTO . dirname($_SERVER["PHP_SELF"]). '/logout');

class configApp
{
    public static $ACTION = 'action';
    public static $PARAMS = 'params';
    public static $ACTIONS = [
      ''=> 'equipoController#home',
      'home'=> 'equipoController#home' ,



      'borrar'=> 'jugadorController#borraJugador',
      'editar'=> 'jugadorController#editarJugador',
      'addJugador'=> 'jugadorController#addJugador',
      'guardarJugador'=> 'jugadorController#guardarJugador',

      'MostrarUsuarios'=> 'usuarioController#mostrarUsuario',
      'login'=>'loginController#login',
      'logout'=>'loginController#logout',
      'verificarLogin'=> 'loginController#verificarLogin',


      'borrarEquipo'=> 'equipoController#removeEquipo',
      'guardarEquipo'=> 'equipoController#guardarEquipo',
      'editarEquipo'=> 'equipoController#editEquipo',
      'addEquipo'=> 'equipoController#addEquipo',


      'addUsuario'=>'usuarioController#addUsuario',
      'InsertarUsuario'=>'usuarioController#insertUsuario'


    ];

}
 ?>
