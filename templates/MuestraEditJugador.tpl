{include file="header.tpl"}

    <h1>{$Titulo}</h1>


    <div class="container">
      <h2>Formulario</h2>
      <form method="POST" action="{$home}/guardarEditar">
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
        <button type="submit" class="btn btn-primary">Editar Jugador</button>
      </form>
    </div>
{include file="footer.tpl"}
