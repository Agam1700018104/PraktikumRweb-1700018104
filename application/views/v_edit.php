<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
<<<<<<< HEAD
    <title>Perijinan</title>
=======
    <title>Wisata</title>
>>>>>>> e2ff63977225663a468ced5de73eef6bcee3fba1
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
</head>
<body>

    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
<<<<<<< HEAD
        <a class="navbar-brand" href="/admin">Data Perijinan</a>
=======
        <a class="navbar-brand" href="/admin">Admin</a>
>>>>>>> e2ff63977225663a468ced5de73eef6bcee3fba1
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
<<<<<<< HEAD
                    <a class="nav-link" href="/admin">Data Pemohon <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?php echo site_url('pemohon/index') ?>">Pemohon</a>
=======
                    <a class="nav-link" href="/admin">Home <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?php echo site_url('wisata/index') ?>">Wisata</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/akomodasi">Akomodasi</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/acara">Event</a>
>>>>>>> e2ff63977225663a468ced5de73eef6bcee3fba1
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/berita">Berita</a>
                </li>
            </ul>
<<<<<<< HEAD
            <form class="form-inline my-2 my-lg-0" method="GET" action="/pemohon">
=======
            <form class="form-inline my-2 my-lg-0" method="GET" action="/wisata">
>>>>>>> e2ff63977225663a468ced5de73eef6bcee3fba1
                <input name="cari" class="form-control form-control-sm mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                <button class="btn btn-sm btn-outline-success my-2 mr-sm-2" type="submit">Search</button>
            </form>
            <form class="form-inline my-2 my-lg-0">
                <a href="<?php echo site_url('login/logout') ?>" button class="btn btn-sm btn-outline-danger mr-sm-1" type="submit">Logout</a>
            </form>
        </div>
    </nav>

        <body>
            <div class="container">
<<<<<<< HEAD
                <h2>Edit Data Pemohon</h2>
                <?php foreach ($pemohon as $pm) { ?>
                    <form action="<?php echo base_url() . 'pemohon/update'; ?>" method="post">
                        <table style="margin:20px auto;">
                            <input type="hidden" name="id" value="<?php echo $pm->id ?>">
                            <div class="form-group">
                                <label for="nik">NIK :</label>
                                <input type="text" class="form-control" id="nik" placeholder="Masukkan NIK" name="nik" value="<?php echo $pm->nik?>">
                            </div>
                            <div class="form-group">
                                <label for="nama">Nama :</label>
                                <input type="text" class="form-control" id="nama" placeholder="Masukkan nama" name="nama" value="<?php echo $pm->nama ?>">
                            </div>
                            <div class="form-group">
                                <label for="alamat">Alamat :</label>
                                <input type="text" class="form-control" id="alamat" placeholder="Masukkan alamat" name="alamat" value="<?php echo $pm->alamat ?>">
                            </div>
                            <div class="form-group">
                                <label for="jp">Jenis Perijinan :</label>
                                <input type="text" class="form-control" id="jp" placeholder="Masukkan jenis Perijinan" name="jp" value="<?php echo $pm->jp ?>">
=======
                <h2>Edit Data Wisata</h2>
                <?php foreach ($wisata as $ws) { ?>
                    <form action="<?php echo base_url() . 'wisata/update'; ?>" method="post">
                        <table style="margin:20px auto;">
                            <input type="hidden" name="id" value="<?php echo $ws->id ?>">
                            <div class="form-group">
                                <label for="nama">Wisata :</label>
                                <input type="text" class="form-control" id="nama" placeholder="Masukkan Wisata" name="nama" value="<?php echo $ws->nama ?>">
                            </div>
                            <div class="form-group">
                                <label for="alamat">Alamat :</label>
                                <input type="text" class="form-control" id="alamat" placeholder="Masukkan alamat" name="alamat" value="<?php echo $ws->alamat ?>">
                            </div>
                            <div class="form-group">
                                <label for="deskripsi">Tentang Wisata :</label>
                                <input type="text" class="form-control" id="deskripsi" placeholder="Masukkan Tentang Wisata" name="deskripsi" value="<?php echo $ws->deskripsi ?>">
>>>>>>> e2ff63977225663a468ced5de73eef6bcee3fba1
                                <tr>
                                    <td></td>
                                    <td><input type="submit" class="btn btn-sm btn-danger" value="Simpan"></td>
                                </tr>
                        </table>
                    </form>
                <?php } ?>
        </body>
