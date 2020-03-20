<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>title</title>
    <link rel="stylesheet" href="style.css">
    <script src="script.js"></script>
  </head>
  <body>
    <?php foreach($tasks as $task) : ?>

      <li>
        <?php if($task->isComplete()) : ?>
          <strike><?= $task->getDescription(); ?></strike>
        <?php else: ?>
          <?= $task->getDescription(); ?>
        <?php endif; ?>
      </li>

    <?php endforeach; ?>
  </body>
</html>