<?php 

//loop

for ($i=1; $i <= 10; $i++) { 
    echo $i . "<br>";
}

//looping pertama

echo "<h3>looping pertama </h3>";

for ($i = 2; $i <= 20; $i += 2){
    echo $i . "-I love PHP<br>";
}

//looping pertama

echo "<h3>looping kedua </h3>";

for ($i = 20; $i >= 2; $i -= 2){
    echo $i . "-I love PHP<br>";
}


//buat array
$buah = ["Anggur", "Mangga", "Melon"];

foreach ($buah as $b) {
    echo $b . "<br>";
}



?>