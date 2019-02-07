<!DOCTYPE html>
<html lang="lt">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>php12</title>
</head>

<body>
    <?php
        if (isset($_POST['ivesti'])){
            if ($_POST['vardas'] && $_POST['pavarde']){
                echo "Vardas - " . $_POST['vardas'] . "Pavarde - " . $_POST['pavarde'];
            } else {
                echo "Uzpildykite laukelius";
            }
            } else {
                ?>
                <form action="<?php $_PHP_SELF;?>" method="post">
                <input type="text" name="vardas">
                <input type="text" name="pavarde">
                <input type="submit" name="ivesti" value="Ivesti">
                </form>


    <?php
            }
    ?>
</body>
</html>
