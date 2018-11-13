{include file="header.tpl"}

<h1>{$Titulo}</h1>


<form method="post" action="agregar">
<div class="container">
  <select class="custom-select" name="id_equipo">
    <option selected>equipo</option>
    {foreach from=$equipos item=equipo}
      <option name="{$equipo['id_equipo']}" >{$equipo['id_equipo']}---{$equipo['nombre_equipo']}</option>
     {/foreach}
  </select>
</div>

<div class="form-group">
  <label for="dorsal">dorsal</label>
  <input type="text" class="form-control" id="exampleInputPassword1"name="dorsal">
</div>
<div class="form-group">
  <label for="nombre_jugador">nombre_jugador</label>
  <input type="text" class="form-control" id="exampleInputPassword1"name="nombre_jugador">
</div>
<div class="form-group">
  <label for="fecha_nac">fecha_nacimiento</label>
  <input type="text" class="form-control" id="exampleInputPassword1"name="fecha_nac">
</div>
<div class="form-group">
  <label for="altura">altura</label>
  <input type="text" class="form-control" id="exampleInputPassword1"name="altura">
</div>
<button type="submit" class="btn btn-primary">crear jugador</button>
</form>
{include file="footer.tpl"}
