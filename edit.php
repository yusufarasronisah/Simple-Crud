<!DOCTYPE html>
<html>
<head>
	<title>Edit Data</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
</head>
<body>
<div class="container">
<div class="row">
<div class="col-md-7">
<h1>Edit Data</h1>
<hr/>

<?php

 include 'koneksi.php';
 $id = $_GET['id'];
 $data = mysqli_query($koneksi,"select * from calon_mahasiswa where id='$id'");
 while($d = mysqli_fetch_array($data)){
?>
<form method="post" action="update.php">
  <div class="form-group">
    <input type="hidden" name="id" value="<?php echo $d['id']; ?>">
    <label for="exampleInputEmail1">Nama</label>
    <input type="text" class="form-control" id="exampleInputEmail1"  placeholder="Enter name" name="nama" value=" <?php echo $d['nama']; ?>">  
  </div>

  <div class="form-group">
    <label for="exampleInputEmail1">Nim</label>
    <input type="text" class="form-control" id="exampleInputEmail1"  placeholder="Enter nim" name="nim" value=" <?php echo $d['nim']; ?>">  
  </div>

  <div class="form-group">
     <label for="exampleFormControlTextarea1">Alamat</label>
    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="alamat" value=" "><?php echo $d['alamat']; ?></textarea>
  </div>
  
  <div class="form-check">
    <input type="checkbox" class="form-check-input" id="exampleCheck1">
    <label class="form-check-label" for="exampleCheck1">Check me out</label>
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
<?php
}
?>

</div>
</div>
</div>


<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
</body>
</html>