<?php
include "NacitavacOsob.php";
include "TextovaTabulka.php";


echo "</p><p>";

$nacitavac = new NacitavacOsob("data/osoby.csv");
$osoby = $nacitavac->nacitaj();

echo "<pre>" . TextovaTabulka::vykresli($osoby) . "</pre>";

echo "</p>";