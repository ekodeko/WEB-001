<?php

$tanggal_sekarang = '2020-05-01';

$bulan = substr($tanggal_sekarang, 5, 2);
$tahun = substr($tanggal_sekarang, 2, 2);
$tanggal = substr($tanggal_sekarang, 8, 2);

$tanggal_substring = $bulan . "-" . $tahun . "-" . $tanggal;
echo "jawaban a. " . $tanggal_substring;
echo "<br>";

$tanggal_date_format = date_format(date_create($tanggal_sekarang), 'm-y-d');
echo "jawaban b. " . $tanggal_date_format;
echo "<br>";

$tanggal_6_bulan_kedepan = date('Y-m-d', strtotime('+6 month', strtotime($tanggal_sekarang)));
echo "jawaban c. " . $tanggal_6_bulan_kedepan;
echo "<br>";

$umur   = date_diff(date_create($tanggal_sekarang), date_create('1995-07-24'));
// var_dump($umur);
echo "jawaban d. " . $umur->y . " Tahun " . $umur->m . " Bulan " . $umur->d . " Hari";
