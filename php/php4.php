<?php
    $cities = array('Berlynas','Roma','Londonas');
    $cities[] = 'Tokijas';
    $cities2 = [
        'tokijas' => 13.6,
        'vasingtonas' => 0.6,
        'maskva' => 11.5
    ];
//    $cities2[4] = 'londonas';
    $cities2['londonas'] = 8.6;
    print_r($cities2);
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>php4</title>
</head>

<body>
   <ul>
    <li><?php echo 'Gyventoju skaicius: ' . $cities2['tokijas']; ?></li>
    </ul>

</body>
</html>
