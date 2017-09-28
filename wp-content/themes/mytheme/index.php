<?php

$tableau=['Sushi','Sashimi','Maki'];

 ?>

<html>

  <head>

  </head>

  <body>
    <ul>
    <?php foreach ($tableau as $var) :?>
    <li>  <?php echo $var ?> </li>
  <?php endforeach; ?>
    </ul>

  </body>
  </html>
  
