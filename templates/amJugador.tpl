{include file="header.tpl"}
<div class="col-6">


<h3 class="titulo">FORMULARIO JUGADOR</h3>
<form method="POST" action="guardarJugador">

  <select class="custom-select" name="id_equipo">

    {foreach from=$equipos item=equipo}
    <option value= {$equipo['id_equipo']}  >{$equipo['nombre_equipo']}</option>
    {/foreach}
  </select>
  <input type="hidden" class="form-control" id="id_jugador" name="idjugador" value="{$jugador['id_jugador']}">
  <div class="form-group">
    <label for="nombre_jugador">nombre_jugador</label>
    <input type="text" class="form-control" id="nombrejugador" name="nombrejugador" value="{$jugador["nombre_jugador"]}">
  </div>
  <div class="form-group">
    <label for="fecha_nac">fecha de nacimiento</label>
    <input type="text" class="form-control" id="fecha_nac" name="fechanac" value="{$jugador['fecha_nac']}">
  </div>
  <div class="form-group">
    <label for="dorsal">dorsal</label>
    <input type="text" class="form-control" id="dorsal" name="dorsal" value="{$jugador['dorsal']}">
  </div>
  <div class="form-group">
    <label class="titulo" for="altura">altura</label>
    <input type="text" class="form-control" id="exampleInputPassword1"name="altura" value="{$jugador['altura']}">
  </div>
  <button type="submit" class="btn btn-warning">guardar jugador</button>
</form>

</div>
{include file="footer.tpl"}
