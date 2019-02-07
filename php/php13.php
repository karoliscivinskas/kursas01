<?php
    class Zmogus {
        public $vardas;
        public $pavarde;
        public function hello () {
            return "Labas, as esu " . $this ->vardas . " " . $this -> pavarde;
        }
    }
$asmuo1 = new Zmogus();
$asmuo2 = new Zmogus();

$asmuo1 ->vardas = "Dima";
$asmuo1 ->pavarde = "X";

$asmuo2 ->vardas = "Vova";
$asmuo2 ->pavarde = "Y";

echo $asmuo1 -> hello() . "<br>";
echo $asmuo2 -> hello();

?>
