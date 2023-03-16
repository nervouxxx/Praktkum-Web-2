<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">

    <title> <?php echo 'Belanja Online' ?></title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">


</head>

<body>
    <div>
    <h3>Belanja Online</h3>
    <form action="belanja_online.php" method="POST">
        <div class="form-group row">
            <label for="" class="col-4 col-form-label">Customer</label>
            <div class="col-8">
                <input id="customer" name="customer" type="text" class="form-control">
            </div>
        </div>
        <div class="form-group row">
            <label class="col-4">Pilih produk</label>
            <div class="col-8">
                <div class="custom-control custom-radio custom-control-inline">
                    <input name="produk" id="Pilihan produk_0" type="radio" class="custom-control-input" value="TV">
                    <label for="Pilihan produk_0" class="custom-control-label">TV</label>
                </div>
                <div class="custom-control custom-radio custom-control-inline">
                    <input name="produk" id="Pilihan produk_1" type="radio" class="custom-control-input" value="Kulkas">
                    <label for="Pilihan produk_1" class="custom-control-label">Kulkas</label>
                </div>
                <div class="custom-control custom-radio custom-control-inline">
                    <input name="produk" id="Pilihan produk_2" type="radio" class="custom-control-input" value="Mesin cuci">
                    <label for="Pilihan produk_2" class="custom-control-label">Mesin cuci</label>
                </div>
            </div>
        </div>
        <div class="form-group row">
            <label for="text" class="col-4 col-form-label">Jumlah</label>
            <div class="col-8">
                <input id="jumlah" name="jumlah" type="text" class="form-control">
            </div>
        </div>
        <div class="form-group row">
            <div class="offset-4 col-8">
                <button name="submit" type="submit" class="p-3 mb-2 bg-success text-white">kirim</button>
            </div>
        </div>
        <div>
        <table 
        border ="1" class="border-radius">
                    <tr style="background-color:blue;">
                        <td>DAFTAR HARGA</td>
                    </tr>
                    
                    <tr style="background-color:white;">
                        <td>TV : 4.200.000</td>
                    </tr>
                    <tr  style="background-color:white;">
                        
                        <td>Kulkas : 3.100.000</td>
                    </tr>
                    <tr style="background-color:white;">
                        <td>Mesin Cuci : 3.800.000</td>
                    </tr>
                    <tr style="background-color:blue;">
                        <td>Harga Dapat Berubah Setiap Saat</td>
                    </tr>
                </table>
        </div>
    </form>
    </div>


    



    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <!--<script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>
    -->
    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.min.js" integrity="sha384-+sLIOodYLS7CIrQpBjl+C7nPvqq+FbNUBDunl/OZv93DB7Ln/533i8e/mZXLi/P+" crossorigin="anonymous"></script>
    -->
</body>

</html>