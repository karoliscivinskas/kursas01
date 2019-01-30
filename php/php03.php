<?php
   $x = 10;
   $y = 7;
?>

<!DOCTYPE html>
<html lang="lt">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>php2</title>
</head>

<body>
     <p><?php $result = $x+$y; ?>
     <?= "$x + $y = $result<br>"; ?>
     <?php $result = $x-$y; ?>
     <?= "$x - $y = $result<br>"; ?>
     <?php $result = $x*$y; ?>
     <?= "$x * $y = $result<br>"; ?>
     <?php $result = $x/$y; ?>
     <?= "$x / $y = $result<br>"; ?>
     <?php $result = $x%$y; ?>
     <?= "$x % $y = $result<br>"; ?>
     </p>

</body>
</html>
