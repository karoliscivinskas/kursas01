<?php
    $temp = [4, 3, 9, 19, 19, 9, 12, 20, 24, 20, 12, 14, 18, 21, 20, 23, 16, 16, 15,19, 19, 17, 17, 15, 12, 13, 13, 15, 19, 21];

    $suma = array_sum($temp);
    $dienu_skaicius = count($temp);
    $vidurkis = round($suma/$dienu_skaicius);

    echo "Vidutine balandzio menesio temperatura Vilniuje + $vidurkis C<br>";
    echo "<hr>";

    rsort($temp);
    $penkios_salciausios = array_slice($temp, -5, 5);
    $penkios_silciausios = array_slice($temp, 0, 5);

    echo "Penkios salciausios: <br>";
    foreach($penkios_salciausios as $salciausia){
        echo $salciausia . '<br>';
    };
    echo "<hr>";
    echo "Penkios silciausios: <br>";
    foreach($penkios_silciausios as $silciausia){
        echo $silciausia . '<br>';
    }
?>
