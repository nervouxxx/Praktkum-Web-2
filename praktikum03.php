<?php
require_once 'header.php';
require_once 'sidebar.php';
?>

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Praktikum03</h1>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">

        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <!-- Default box -->
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">Form Registrasi</h3>
                            <br>
                            <div class="container">
        <h2>Form Registrasi IT CLub Data Science</h2>
        <form method="POST">
            <form>
                <div class="form-group row">
                    <label for="NIM" class="col-4 col-form-label">NIM</label>
                    <div class="col-8">
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <div class="input-group-text">
                                    <i class="fa fa-adn"></i>
                                </div>
                            </div>
                            <input id="NIM" name="NIM" type="text" class="form-control">
                        </div>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="nama " class="col-4 col-form-label">Nama Lengkap</label>
                    <div class="col-8">
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <div class="input-group-text">
                                    <i class="fa fa-address-book"></i>
                                </div>
                            </div>
                            <input id="nama " name="nama " type="text" class="form-control">
                        </div>
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-4">Jenis Kelamin</label>
                    <div class="col-8">
                        <div class="custom-control custom-radio custom-control-inline">
                            <input name="jenis klamin" id="jenis klamin_0" type="radio" class="custom-control-input" value="laki">
                            <label for="jenis klamin_0" class="custom-control-label">Laki-laki</label>
                        </div>
                        <div class="custom-control custom-radio custom-control-inline">
                            <input name="jenis klamin" id="jenis klamin_1" type="radio" class="custom-control-input" value="Perempuan">
                            <label for="jenis klamin_1" class="custom-control-label">Perempuan</label>
                        </div>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="parodi" class="col-4 col-form-label">Program Studi</label>
                    <div class="col-8">
                        <select id="parodi" name="parodi" class="custom-select">
                            <option value="SI">Sistem Informasi</option>
                            <option value="TI">Teknik Informasi</option>
                        </select>
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-4">Checkboxes</label>
                    <div class="col-8">
                        <div class="custom-control custom-checkbox custom-control-inline">
                            <input name="checkbox" id="checkbox_0" type="checkbox" class="custom-control-input" value="CSS">
                            <label for="checkbox_0" class="custom-control-label">HTML</label>
                        </div>
                        <div class="custom-control custom-checkbox custom-control-inline">
                            <input name="checkbox" id="checkbox_1" type="checkbox" class="custom-control-input" value="Html">
                            <label for="checkbox_1" class="custom-control-label">CSS</label>
                        </div>
                        <div class="custom-control custom-checkbox custom-control-inline">
                            <input name="checkbox" id="checkbox_2" type="checkbox" class="custom-control-input" value="Java scrip">
                            <label for="checkbox_2" class="custom-control-label">JavaScript</label>
                        </div>
                        <div class="custom-control custom-checkbox custom-control-inline">
                            <input name="checkbox" id="checkbox_3" type="checkbox" class="custom-control-input" value="RWD Bootsrap">
                            <label for="checkbox_3" class="custom-control-label">RWD Bootstrap</label>
                        </div>
                        <div class="custom-control custom-checkbox custom-control-inline">
                            <input name="checkbox" id="checkbox_4" type="checkbox" class="custom-control-input" value="python">
                            <label for="checkbox_4" class="custom-control-label">PHP</label>
                        </div>
                        <div class="custom-control custom-checkbox custom-control-inline">
                            <input name="checkbox" id="checkbox_5" type="checkbox" class="custom-control-input" value="java">
                            <label for="checkbox_5" class="custom-control-label">Python</label>
                        </div>
                        <div class="custom-control custom-checkbox custom-control-inline">
                            <input name="checkbox" id="checkbox_6" type="checkbox" class="custom-control-input" value="PHP">
                            <label for="checkbox_6" class="custom-control-label">Java</label>
                        </div>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="domisili" class="col-4 col-form-label">Tempat Domisili</label>
                    <div class="col-8">
                        <select id="domisili" name="domisili" class="custom-select">
                            <option value="Jakarta">Jakarta</option>
                            <option value="depok">Depok</option>
                            <option value="bogor">Bekasi</option>
                        </select>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="email" class="col-4 col-form-label">Email</label>
                    <div class="col-8">
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <div class="input-group-text">
                                    <i class="fa fa-envelope"></i>
                                </div>
                            </div>
                            <input id="email" name="email" type="text" class="form-control">
                        </div>
                    </div>
                </div>
                
                <div class="form-group row">
                    <div class="offset-4 col-8">
                        <button name="submit" type="submit" class="btn btn-primary">Submit</button>
                    </div>
                </div>
            </form>
    </div>


<?php
require_once 'footer.php';
?>