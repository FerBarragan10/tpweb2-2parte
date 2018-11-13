{include file="header.tpl"}
<h1 class="titulo">{$Titulo}</h1>
<body>
  <div class="container">
    <form method="post" action="InsertarUsuario">
      <div class="form-group">
        <label class="titulo" for="exampleInputEmail1"> nombre usuario</label>
        <input type="input" class="form-control" id="nombre"name="nombre" aria-describedby="emailHelp" placeholder="nombre usuario">
      </div>
      <div class="form-group">
        <label class="titulo" for="exampleInputPassword1">Password</label>
        <input type="password" class="form-control" id="clave"name="clave" placeholder="Password">
      </div>
      <button type="submit" class="btn btn-success">crear usuario</button>
    </form>

  </div>
</body>
{include file="footer.tpl"}
