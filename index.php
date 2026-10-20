<?php
include "factorial.php";

echo "Ahoj svet! <p>";

for ($i = 1; $i < 11; $i++) {
    echo $i . "<br>";
}
echo "</p><p>";

for ($i = 1; $i < 11; $i++) {
    echo factorial($i) . "<br>";
}