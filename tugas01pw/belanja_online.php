<?php 

//if
$_customer = $_POST["customer"];
$_produk = $_POST["produk"];
$_jumlah = $_POST["jumlah"];

                    if ($_produk == "TV"){
                        $harga = 4200000;
                    }
                     elseif ($_produk == "kulkas") {
                        $harga = 3100000;
                    } 
                    elseif ($_produk == "mesin cuci") {
                        $harga = 3800000;
                    } 
                    else {
                        $harga = 0;
                    }
                    $total_harga = $harga * $_jumlah ;


echo "customer :" . $_customer;
echo "<br>produk :" . $_produk;
echo "<br>jumlah :" . $_jumlah;
echo "<br>total :" . $total_harga



?>