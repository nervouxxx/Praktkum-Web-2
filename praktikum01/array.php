<?php

// buat array
$animals = ["kucing", "Nyamuk", "Singa", "Ayam"];

echo $animals [3] . "<br>";
echo $animals [1] . "<br>";

foreach ($animals as $animal) {
    echo $animal . "<br>";
}

// Buat array assosiatif
$mahasiswa = ["nama"=>"Ziyad", "jurusan"=>"TI", "Semester"=>6];
echo $mahasiswa["jurusan"] . "<br>";

foreach ($mahasiswa as $key=>$value) {
    echo "key nya adalah" . $key . "value" . $value . "<br>";
}

// Buat Array Multidimensi

$dosen = [
    ["Pak Rojul", "Web"],
    ["Pak Nasrul", "DDP"],
    ["Pak Lukman", "OS"]
];
// 00 01 10 11 20 21
echo $dosen[0][0];

?>