<h2 class='mx-auto text-center mt-5'>Login</h2>
<p class="text-center mb-5">Preenche os campos abaixo para acessar os shares.</p>
<form class="mx-auto" style="max-width:700px;" method="post" action="<?php $_SERVER['PHP_SELF']; ?>">
  <div class="form-group">
    <label for="exampleInputPassword1">Email</label>
    <input type="email" name='email' class="form-control" id="exampleInputPassword1"></input>
  </div>
  <div class="form-group">
    <label for="exampleInputPassword2">Senha</label>
    <input type="password" name='password' class="form-control" id="exampleInputPassword2">
  </div>
  <button type="submit" class="btn btn-primary">Acessar</button>
  <?php if($rows['emailValid'] === false): ?>
  <div class="mt-3 alert alert-danger">Sorry, but this e-mail was not found.</div>
  <?php endif; ?>
  <?php if($rows['passwordValid'] === false): ?>
  <div class=" mt-3 alert alert-danger">The password is incorrect. Try again.</div>
  <?php endif; ?>
</form>