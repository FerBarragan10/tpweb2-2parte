{include file="header.tpl"}
{include file="navbaradmin.tpl"}

  <div class="row">
    <div class="container col-lg-6 col-sm-12">
      <h1 class="titulo">{$Titulo1}</h1>
    <table class="table table-bordered table-dark col-3">
      <thead>
      <tr>
        <th scope='col'>nombre_equipo</th>
        <th scope='col'>pos_tabla</th>
        <th scope='col'>clasificacion_copa</th>
      </tr>
    </thead>
    <tbody>
        <tr>
          {foreach from=$equipos item=equipo}
            <tr><td>{$equipo['nombre_equipo']}</td>
              <td>{$equipo['pos_tabla']}</td>
              <td>{$equipo['clasificacion_copa']}</td>
              <td >
                <a class="btn btn-danger btn-block" href="borrarEquipo/{$equipo['id_equipo']}" role="button">BORRAR</a>


                <a class="btn btn-warning btn-block" href="editarEquipo/{$equipo['id_equipo']}" role="button">EDITAR</a>
              </td>
            </tr>
           {/foreach}
        </tr>

      </tbody>
    </table>
      <a  href="addEquipo" class="btn btn-success btn-lg active " role="button" aria-pressed="true">agregar equipo</a>
    </div>






    <div class="container col-lg-6 col-sm-12">
    <h1 class="titulo">{$Titulo2}</h1>
    <table class="table table-bordered table-dark col-9">
    <thead>
    <tr>

      <th scope="col">equipo</th>
      <th scope="col">dorsal</th>
      <th scope="col">nombre de jugador</th>
      <th scope="col">fecha nacimiento</th>
      <th scope="col">altura</th>
    </tr>
    </thead>
    <tbody>
    <tr>
     {foreach from=$jugadores item=jugador}
      <tr>
          <td>
            {foreach from=$equipos item=equipo}
             {if $equipo['id_equipo'] eq {$jugador['id_equipo']}}
              {$equipo['nombre_equipo']}
              {/if}
            {/foreach}
          </td>
          <td>{$jugador['dorsal']}</td>
          <td>{$jugador['nombre_jugador']}</td>
          <td>{$jugador['fecha_nac']}</td>
          <td>{$jugador['altura']}</td>
          <td >
            <a class="btn btn-danger btn-block" href="borrar/{$jugador['id_jugador']}" role="button">BORRAR</a>
            <a class="btn btn-warning btn-block" href="editar/{$jugador['id_jugador']}" role="button">EDITAR</a>
          </td>
      </tr>
      {/foreach}

      </tr>
    </tbody>
    </table>
    <a  href="addJugador" class="btn btn-success btn-lg active " role="button" aria-pressed="true">agregar jugador</a>

    </div>


  </div>
  {include file="footer.tpl"}
