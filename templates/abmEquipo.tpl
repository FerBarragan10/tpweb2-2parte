{include file="header.tpl"}

    
    <div class="formequipo col-4">
      <form method="post" action="guardarEquipo" class="needs-validation" novalidate>
        <div class="form">
          <h3 class="titulo">FORMULARIO EQUIPO</h3>
          <div class="col-11 ">

            <input type="hidden" class="form-control" id="id_equipo" name="id_equipo"
             placeholder="id Equipo" value="{$equipo['id_equipo']}" >

          </div>
          <div class="col-11 ">
            <label class="titulo"for="validationTooltip01">Nombre de Equipo</label>
            <input type="text" class="form-control" id="nombre_equipo" name="nombre_equipo"
             placeholder="Nombre de Equipo" value="{$equipo['nombre_equipo']}" required>
            <div class="valid-tooltip">

            </div>
          </div>
          <div class="col-11">
            <label class="titulo"for="validationTooltip02">Posicion</label>
            <input type="text" class="form-control" id="pos_tabla" name="pos_tabla"placeholder="Posicion" value="{$equipo['pos_tabla']}" required>
            <div class="valid-tooltip">

            </div>
          </div>
          <div class="col-11">
            <label class="titulo"for="validationTooltip02">clasificacion copa</label>
            <input type="text" class="form-control" id="clasificacion_copa" name="clasificacion_copa"placeholder="clasificacion copa" value="{$equipo['clasificacion_copa']}" required>
            <div class="valid-tooltip">

            </div>
          </div>

        </div>
        <button class="btn btn-success" type="submit">Cargar</button>
      </form>
    </div>
{include file="footer.tpl"}
