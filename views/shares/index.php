<h1>This is shares index</h1>
<div class="row">
  <div class="container mt-5">
  <div class='share-container'>
    <a class='share-button' href="<?php echo ROOT_URL . '/shares/add'; ?>">Compartilhe algo</a>
  </div>
  <?php foreach($rows as $share): ?>
    <h4 class='mt-5'><?php echo $share["title"] ?></h4>
    <p><?php echo $share["body"] ?></p>
    <a href="<?php echo $share["link"] ?>"><?php echo 'Link to ' . $share['title']; ?></a>
    <p><a href="<?php echo ROOT_URL . '/shares/delete?id=' . $share['id']; ?>">Delete Post</a></p>
  <?php endforeach; ?>
  </div>
</div>