<?php
include "NacitavacOsob.php";


echo "</p><p>";

$nacitavac = new NacitavacOsob("data/osoby.csv");
$osoby = $nacitavac->nacitaj();

foreach ($osoby as $osoba) {
    echo $osoba->getMeno() . " " . $osoba->getPriezvisko() . ", " .
        $osoba->getRokNarodenia() . ", " . $osoba->getPohlavie() . "<br>";
}

echo "</p>";