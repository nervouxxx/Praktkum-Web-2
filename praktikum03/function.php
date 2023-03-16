<?php 

// buat fungsi
function hitungUmur ($thn_lahir) {
    $thn_skrng = 2023;
    // hitung umur
    $umur = $thn_skrng - $thn_lahir;
    // kembaliin data
    return $umur;
}
echo hitungUmur(2003);

?>