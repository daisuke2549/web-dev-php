<?php


require('../app/functions.php');


$names = [
  'jiro',
  'goro',
  'daisuke',
] 



?>


<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="utf-8">
  <title>PHP with docker</title>
</head>
<body>
<ul>  
<?php if (empty($names)) { ?>
    <li>Nobody!</li>
    <?php } else { ?>
   <?php foreach ($names as $name){ ?>
    <li><?= h($name); ?></li>
   <?php }?>
   <?php }?>
</ul>
</body>
</html>