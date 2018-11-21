{include file="header.tpl"}
{include file="navbar.tpl"}
<div class="row">
  <div class="container col-lg-4 col-sm-12">
    <h1 class="titulo">{$Titulo1}</h1>
  <table class="table table-bordered table-dark col-3">
    <thead>
    <tr>
      <th scope='col'>Usuario</th>
      <th scope='col'>comentario</th>

    </tr>
  </thead>
  <tbody>
      <tr>
        {foreach from=$usuarios item=usuario}
          <tr><td>{$usuario['nombre']}</td>
          

          </tr>
         {/foreach}
      </tr>

    </tbody>
  </table>
  </div>






{include file="footer.tpl"}
