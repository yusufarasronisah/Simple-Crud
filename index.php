<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
</head>
<body>
<div class="container">
<div class="row">
<div class="col-md-7">
<h1>SIMPLE CRUD DATA EXAMPLE</h1>
<hr/>
<a class="btn btn-primary" href="tambah.php" role="button">Tambah Data</a>
<table class="table table-striped">
  <thead>
    <tr>
      <th scope="col">No</th>
      <th scope="col">Nama </th>
      <th scope="col">Nim</th>
      <th scope="col">Alamat</th>
      <th scope="col">Opsi</th>
    </tr>
  </thead>
  <tbody>
  	<?php 
		include 'koneksi.php';
		$no = 1;
		$data = mysqli_query($koneksi,"select * from calon_mahasiswa");
		while($d = mysqli_fetch_array($data)){
	?>
    <tr>
      <th scope="row"><?php echo $no++; ?></th>
      <td><?php echo $d['nama']; ?></td>
      <td><?php echo $d['nim']; ?></td>
      <td><?php echo $d['alamat']; ?></td>
      <td><a class="btn btn-primary" href="edit.php?id=<?php echo $d['id']; ?>" role="button">Edit</a> | <a class="btn btn-primary" href="hapus.php?id=<?php echo $d['id']; ?>" role="button">Hapus</a></td>
    </tr>
    <?php 
		}
		?>
  </tbody>
</table>
</div>
</div>
</div>


<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
</body>
</html>