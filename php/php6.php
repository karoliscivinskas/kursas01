<?php
    $cities3 = [
        'Tokijas' => [13.6, 1868, 'Japonija'],
        'Vasingtonas' => [0.6, 1790, 'JAV'],
        'Maskva' => [11.5, 1147, 'Rusija']
    ];

   $metai = 1600;
    if ($metai >= $cities3['Vasingtonas'][1]){
        echo "Vasingtonas yra JAV sostine";
    } else if ($metai == 1774) {
        echo "JAV sostine vis dar Filadelfijoje";
    } else {
        echo "Liko " . ($cities3['Vasingtonas'][1] - $metai) . " metai iki Vasingtono ikurimo";
    }
?>

