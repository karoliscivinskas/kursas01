<?php
    $cities4 = ['Tokijas', 'Vasingtonas', 'Maskva', 'Londonas'];
    print_r($cities4);
    echo "<ul>";
        for ($i=0; $i<=count($cities4); $i++) {
            echo "<li> $cities4[$i] </li>";
        }
    echo "</ul>";

    echo "<ul>";
        foreach ($cities4 as $city) {
            echo "<li>$city</li>";
        }
    echo "</ul>";
?>
