<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Perijinan</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
</head>
<body>

    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <a class="navbar-brand" href="/admin">Data Perijinan</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="/admin">Pemohon <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/berita">Berita</a>
                </li>
            </ul>
            <form class="form-inline my-2 my-lg-0" method="GET" action="/Perijinan">
                <input name="cari" class="form-control form-control-sm mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                <button class="btn btn-sm btn-outline-success my-2 mr-sm-2" type="submit">Search</button>
            </form>
            <form class="form-inline my-2 my-lg-0">
                <a href="<?php echo site_url('login/logout') ?>" button class="btn btn-sm btn-outline-danger mr-sm-1" type="submit">Logout</a>
            </form>
        </div>
    </nav>

	<div class="container">
		<table class="table table-hover">
			<thead>
				<tr>
                    <th>No</th>
					<th>NIK</th>
					<th>Nama</th>
					<th>Alamat</th>
					<th>Jenis Perijinan</>
					<th>Aksi</th>
				</tr>
			</thead>
			<tbody>
			<?php
				$no = 1;
				foreach ($pemohon as $pm) {
			?>
				<tr>
					<td><?= $no++ ?></td>
                    <td><?= $pm->nik ?></td>
					<td><?= $pm->nama ?></td>
					<td><?= $pm->alamat ?></td>
					<!-- <td><?= $ws->image ?></td> -->
					<td><?= $pm->jp ?></td>
					<td>
						<?php echo anchor('pemohon/edit/' . $pm->id, 'Edit'); ?> |
						<?php echo anchor('pemohon/hapus/' . $pm->id, 'Hapus'); ?>
					</td>
				</tr>
			<?php } ?>
			</tbody>
		</table>
		<div align="center">
			<a type="button" href="<?php echo site_url('pemohon/tambah') ?>" class="btn btn-primary">Tambah Data</a>
		</div>
	</div>
</body>
