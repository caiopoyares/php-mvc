<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <link rel="stylesheet" href="<?php echo ROOT_URL . '/assets/css/styles.css'; ?>">
  <title>Shareboard</title>
</head>
<body>
  <div class="d-flex flex-column flex-md-row align-items-center p-3 px-md-4 mb-3 bg-white border-bottom shadow-sm">
    <h5 class="my-0 mr-md-auto font-weight-normal">
        Shareboard
    </h5>
    <nav class="my-2 my-md-0 mr-md-3">
      <?php if(isset($_SESSION['is_logged_in'])): ?>
        <a class="p-2 text-dark" href="<?php echo ROOT_URL; ?>">Olá, <strong><?php echo $_SESSION['user_data']['name'];?></strong></a>
        <a class="p-2 text-dark" href="<?php echo ROOT_URL . "/shares"; ?>">Shares</a>
        <a class="p-2 text-dark" href="<?php echo ROOT_URL . "/users/logout"; ?>">Sair</a>
      <?php else: ?>
      <a class="p-2 text-dark" href="<?php echo ROOT_URL . "/users/login"; ?>">Login</a>
      <a class="p-2 text-dark" href="<?php echo ROOT_URL . "/users/register"; ?>">Register</a>
      <?php endif; ?>
    </nav>
  </div>
  <div class="row">
    <div class="container">
      <?php require($view); ?>
    </div>
  </div>
</body>
</html>