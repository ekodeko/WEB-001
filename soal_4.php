<?php

$string = "AKU SUKA MAKAN NASI PADANG";

$arr_string = explode(" ", $string);

$arr_asc = [];
$str_asc = "";
for ($i = 0; $i < count($arr_string); $i++) {
    # code...
    $str_asc .= $arr_string[$i] . " \n";
    array_push($arr_asc, $str_asc);
}

$arr_desc = [];
$str_desc = "";

for ($x = count($arr_string) - 1; $x >= 0; $x--) {
    # code...
    $str_desc .= $arr_string[$x] . " \n";
    array_push($arr_desc, $str_desc);
}

$new_arr = array_merge($arr_asc, $arr_desc);
print_r($new_arr);
