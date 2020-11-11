<?php
// ---------------------------------------- SOAL 5 A.
$buah = array(
    array("NAMA" => "JERUK", "HARGA" => 5000, "RASA" => "ASAM"),
    array("NAMA" => "MANGGA", "HARGA" => 20000, "RASA" => "MANIS"),
    array("NAMA" => "APEL", "HARGA" => 5000, "RASA" => "MANIS"),
    array("NAMA" => "DURIAN", "HARGA" => 50000, "RASA" => "MANIS"),
    array("NAMA" => "DUKU", "HARGA" => 10000, "RASA" => "ASAM"),
    array("NAMA" => "NANAS", "HARGA" => 5000, "RASA" => "ASAM")
);

array_push($buah, ["NAMA" => "PISANG", "HARGA"   => 5000, "RASA"   => "MANIS"]);
arsort($buah);
foreach ($buah as $key => $value) {
    echo $value['NAMA'], "<br>";
}

// ----------------------------------- SOAL 5 B.
echo '<br>';
function check_contain_letter($buah, $search)
{
    foreach ($buah as $key => $value) {
        if (strpos($value['NAMA'], $search)) {
            echo $value['NAMA'], "<br>";
        }
    }
}
echo 'Buah yang mengandung huruf k diantaranya = ';
echo '<br>';
check_contain_letter($buah, "K");


// ----------------------------------- SOAL 5 C.
echo '<br>';
function check_price_and_taste($buah, $price, $taste)
{
    foreach ($buah as $key => $value) {
        if ($value['HARGA'] < $price && $value['RASA'] == 'MANIS') {
            echo $value['NAMA'], "<br>";
        }
    }
}
echo 'Buah yang Harganya di bawah 10.000 dan Rasanya MANIS diantaranya = ';
echo '<br>';
check_price_and_taste($buah, 10000, "MANIS");
