<?php

$angka = "1,3,5,7,9,11,13,15";

$angka = explode(",", $angka);

for ($i = 0; $i < count($angka); $i++) {
    echo " " . $angka[$i] . " \n";
}
