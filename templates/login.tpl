{include file="header.tpl"}
{include file="navbar.tpl"}

<body>
  <div class="container col-8">
    <h1 class="titulo">{$Titulo}</h1>
    <form method="post" action="verificarLogin">
      <div class="form-group">
        <label class="titulo"for="exampleInputEmail1">Usuario</label>
        <input type="input" class="form-control" id="id_usuario"name="id_usuario" aria-describedby="emailHelp" placeholder="Enter email">
      </div>
      <div class="form-group">
        <label class="titulo" for="exampleInputPassword1">Password</label>
        <input type="password" class="form-control" id="pass"name="pass" placeholder="Password">
      </div>
      <div class="titulo">
        {$message}
      </div>
      <button type="submit" class="btn btn-success">Login</button>
    </form>

  </div>
</body>


{include file="footer.tpl"}
