<div class="banner">
<h1></h1>
</div>
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <a class="navbar-brand" href="#">SuperLiga</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item active">
          <a class="nav-link" href="homeadmin">home<span class="sr-only">(current)</span></a>
        </li>





      </ul>
    </div>
    <form class="form-inline">
{if session_start() == "1"}
  {if isset($smarty.session["User"])}
    <a class="btn btn-danger btn-block" href="logout" role="button">Log Out</a>
  {else}
    <a class="btn btn-success btn-block" href="login" role="button">Log In</a>
  {/if}
{/if}
</form>
  </nav>
