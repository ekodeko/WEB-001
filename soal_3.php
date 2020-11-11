<?php

$array =  [20, 10, 100, 30, 15, 5];

sort($array);

echo "jawaban 1 a. ";
for ($i = 0; $i < count($array); $i++) {
    # code...
    echo $array[$i] . "\n";
}

echo "<br>";
echo "jawaban 1 b. ";
rsort($array);
for ($j = 0; $j < count($array); $j++) {
    # code...
    echo $array[$j] . "\n";
}

//------------------------------------------------------
echo "<br>";
echo "<br>";
echo "jawaban 2. ";
array_push($array, 180);
for ($j = 0; $j < count($array); $j++) {
    # code...
    echo $array[$j] . "\n";
}


//------------------------------------------------------
echo "<br>";
echo "<br>";
echo "jawaban 3. ";
array_splice($array, 1, 1);
for ($j = 0; $j < count($array); $j++) {
    # code...
    echo $array[$j] . "\n";
}
