<form method="post" action="<?php $_SERVER['PHP_SELF']; ?>">
  <div class="form-group">
    <label for="exampleInputEmail1">Title</label>
    <input type="text" name='title' class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" >
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Body</label>
    <textarea type="text" name='body' class="form-control" id="exampleInputPassword1"></textarea>
  </div>
  <div class="form-group">
    <label for="exampleInputPassword2">Link</label>
    <input type="text" name='link' class="form-control" id="exampleInputPassword2">
  </div>
  <button type="submit" class="btn btn-primary">Enviar</button>
  <a href="<? echo ROOT_URL . '/shares'; ?>" class="btn btn-danger">Cancelar</a>
</form>