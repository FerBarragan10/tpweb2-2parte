{include file="header.tpl"}
<div class="">
  <h1 class="titulo">{$Titulo}</h1>

  <div class="container">
    <ul class="list-group">
          {foreach from=$Usuarios item=usuario}
              <li class="list-group-item">{$usuario['nombre']} ----- {$usuario['clave']}<a href="borrar/{$usuario['id']}">BORRAR</a> </li>
          {/foreach}
    </ul>
  </div>
</div>



{include file="footer.tpl"}
