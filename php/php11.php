
<!DOCTYPE html>
<html lang="">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title></title>
</head>

<body>
    <?php
        function daugyba($x, $y) {
                $plotas = $x*$y;
                return  $plotas ;
        }

            if (isset($_POST['skaiciuoti'])) {
                if ($_POST['ilgis'] && $_POST['plotis']) {
                    echo daugyba($_POST['ilgis'], $_POST['plotis']);
                } else {
                    echo "Iveskite laukelius";
                        }
                } else {  ?>
                  <form action="<?php $_PHP_SELF;?>" method="post">
                  <input type="text" name="ilgis">
                  <input type="text" name="plotis">
                  <input type="submit" name="skaiciuoti" value="Skaiciuoti" >

                  </form>
    <?php
            }
    ?>

</body>
</html>
