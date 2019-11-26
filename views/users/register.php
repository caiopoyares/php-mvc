<h2 class="text-center mt-5">Registre-se</h2>
<p class="text-center">Crie uma nova conta para acessar novos shares.</p>
<form method="post" action="<?php $_SERVER['PHP_SELF']; ?>">
  <div class="form-group">
    <label for="exampleInputEmail1">Nome</label>
    <input type="text" name='name' class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" >
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Email</label>
    <input type="email" name='email' class="form-control" id="exampleInputPassword1"></input>
  </div>
  <div class="form-group">
    <label for="exampleInputPassword2">Senha</label>
    <input type="password" name='password' class="form-control" id="exampleInputPassword2">
  </div>
  <button type="submit" class="btn btn-primary">Enviar</button>
</form>