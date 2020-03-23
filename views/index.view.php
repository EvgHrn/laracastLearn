<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>title</title>
    <link rel="stylesheet" href="style.css">
    <script src="script.js"></script>
  </head>
  <body>
    <nav>
      <ul>
        <li><a href="/about">About us</a></li>
        <li><a href="/contact">Contact us</a></li>
      </ul>
    </nav>
    <h1>
      My tasks
    </h1>
    <?php foreach($tasks as $task) : ?>

      <li>
        <?php if($task->completed) : ?>
          <strike><?= $task->description; ?></strike>
        <?php else: ?>
          <?= $task->description; ?>
        <?php endif; ?>
      </li>

    <?php endforeach; ?>
  </body>
</html>