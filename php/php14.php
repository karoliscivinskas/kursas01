<?php
    function metai($sukurimas){

        if ($sukurimas >= date('Y')){
            echo "© " . date('Y');
        }   else {
            echo "© " . $sukurimas . " - " . date('Y');
        }
    }
    echo metai(2020);
?>
