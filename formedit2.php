
<?php 
include "navbar.php";
include "connection.php"?>

?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <title>Bossnanny</title>
  <!-- Bootstrap core CSS-->
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <!-- Custom fonts for this template-->
  <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
  <!-- Custom styles for this template-->
  <link href="css/sb-admin.css" rel="stylesheet">
</head>

<body class="fixed-nav sticky-footer bg-dark" id="page-top">
  <!-- Navigation-->
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top" id="mainNav">
    <a class="navbar-brand" href="index.php">Start Bootstrap</a>
    <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarResponsive">
      <ul class="navbar-nav navbar-sidenav" id="exampleAccordion">
        <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Dashboard">
          <a class="nav-link" href="index.php">
            <i class="fa fa-fw fa-dashboard"></i>
            <span class="nav-link-text">Dashboard</span>
          </a>
        </li>
        <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Charts">
          <a class="nav-link" href="charts.html">
            <i class="fa fa-check-square"></i>
            <span class="nav-link-text">Edit Data Perawat</span>
          </a>
        </li>
        
                  <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Charts">
          <a class="nav-link" href="register.php">
            <i class="fa fas fa-user"></i>
            <span class="nav-link-text">Register Users</span>
          </a>
        </li>
          
      </ul>
      <ul class="navbar-nav sidenav-toggler">
        <li class="nav-item">
          <a class="nav-link text-center" id="sidenavToggler">
            <i class="fa fa-fw fa-angle-left"></i>
          </a>
        </li>
      </ul>
      <ul class="navbar-nav ml-auto">
        <li class="nav-item dropdown">
          <!-- <a class="nav-link dropdown-toggle mr-lg-2" id="messagesDropdown" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">   -->
        <li class="nav-item">
          <form class="form-inline my-2 my-lg-0 mr-lg-2">
            <div class="input-group">
              <input class="form-control" type="text" placeholder="Search for...">
              <span class="input-group-append">
                <button class="btn btn-primary" type="button">
                  <i class="fa fa-search"></i>
                </button>
              </span>
            </div>
          </form>
        </li>
        <li class="nav-item">
          <a class="nav-link" data-toggle="modal" data-target="#exampleModal">
            <i class="fa fa-fw fa-sign-out"></i>Logout</a>
        </li>
      </ul>
    </div>
  </nav>

  <div class="content-wrapper">
    <div class="container-fluid">
      <!-- Breadcrumbs-->
      <ol class="breadcrumb">
        <li class="breadcrumb-item">
          <a href="index.php">Dashboard</a>
        </li>
        <li class="breadcrumb-item active">Halaman Edit </li>
      </ol>
      <div class="row">
      <?php

        //$id=mysqli_real_escape_string($conn, $_GET['id']);
        //$query="select * from home where id='$id'";
        //$det=mysqli_query($conn, $query)or die(mysqli_error());

        //while($d=mysqli_fetch_array($det)){

      $id = $_GET["id"];
      $sql = "select * from home where id = '$id'";

      include"connection.php";

      $hasil = mysqli_query($conn, $sql);

      $perawat = mysqli_fetch_array($hasil);
      ?>

        <div class="col-12">
          <h1>Edit Perawat </h1>
        </div> 
         
         <div class="col-md-8">
            
        

        <form action="process-edit.php" method="post" enctype="multipart/form-data">

        <input name="id" type="hidden" class="form-control" value="<?=$perawat["id"]?>" required>

        <div class="form-group ">
          <label>Nama Perawat</label>
          <input name="nama" type="text" class="form-control" value="<?=$perawat["nama"]?>" required>
        </div>

        <div class="form-group">
            <label>Jenis Layanan</label>
                    <select name="produk" class="form-control">
                    <option value="<?=$perawat["produk"]?>" selected>
                            <?=$perawat["produk"]?>
                        </option>
                    <option value="ART">Asisten Rumah Tangga</option>  
                    <option value="Nanny">Nanny</option>
                    <option value="Perawat Lansia">Perawat Lansia</option>
                    </select>
        </div>

        <div class="form-group">
            <label>Jenis Kelamin</label>
                    <select name="gender" class="form-control">
                    <option value="<?=$perawat["gender"]?>" selected>
                            <?=$perawat["gender"]?>
                        </option>
                    <option value="Pria">Laki-Laki</option>  
                    <option value="Wanita">Perempuan</option>
                    </select>
        </div>

        <div class="form-group">
            <label>Agama</label>
                    <select name="agama" class="form-control">
                    <option value="<?=$perawat["agama"]?>" selected>
                            <?=$perawat["agama"]?>
                    </option>
                    <option value="Islam">Islam</option>  
                    <option value="Kristen">Kristen</option>
                    <option value="Katolik">Katolik</option>  
                    <option value="Hindu">Hindu</option>  
                    <option value="Buddha">Buddha</option>
                    <option value="Kong Hu Cu">Kong Hu Cu</option>
                    </select>
        </div>

        <div class="form-group">
          <label>Alamat</label>
          <input name="alamat" type="text" class="form-control" value="<?=$perawat["alamat"]?>" required>
        </div>

        <div class="form-group">
            <label>Lokasi Penempatan</label>
                    <select name="penempatan" id="penempatan" class="form-control">
                    <option value="<?=$perawat["penempatan"]?>" selected>
                            <?=$perawat["penempatan"]?>
                        </option>
                    <option value="Malang">Malang</option>
                    <option value="Surabaya">Surabaya</option>
                    <option value="Banyuwangi">Banyuwangi</option>
                    <option value="Jember">Jember</option>
                    <option value="Lumajang">Lumajang</option>
                    <option value="Probolinggo">Probolinggo</option>
                    <option value="Sidoarjo">Sidoarjo</option>
                    <option value="Madiun">Madiun</option>
                    <option value="Ngawi">Ngawi</option>
                    <option value="Bojonegoro">Bojonegoro</option>
                    </select>
        </div>

        <div class="form-group">
            <label>Status</label>
                    <select name="status"  class="form-control">
                    <option value="<?=$perawat["status"]?>" selected>
                            <?=$perawat["status"]?>
                        </option>
                    <option value="Tersedia">Tersedia</option>  
                    <option value="Kosong">Kosong</option>
                    </select>
        </div>

        <div class="form-group">
          <label>Foto Perawat</label><br>
          <img src="img/<?=$perawat["img"]?>" width="100px" height="100px" /></br>
            <!-- <input type="checkbox" name="ubah_foto" value="true"> Ceklis jika ingin mengubah foto<br> -->
          <input name="gambar" id="gambar" type="file" class="form-control">
        </div>

          <button type="submit" class="btn btn-primary btn-xs edit_data" name="simpan">
            Simpan
          </button>
        </a>

        <a href="index.php" class="btn btn-warning"> Kembali</a>

        </form>

         </div>
      </div>
    </div>
    <!-- /.container-fluid-->
    <!-- /.content-wrapper-->
    <footer class="sticky-footer">
      <div class="container">
        <div class="text-center">
          <small>Made with ❤ </small>
        </div>
      </div>
    </footer>
    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
      <i class="fa fa-angle-up"></i>
    </a>
    <!-- Logout Modal-->
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
            <button class="close" type="button" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">×</span>
            </button>
          </div>
          <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
          <div class="modal-footer">
            <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
            <a class="btn btn-primary" href="logout.php">Logout</a>
          </div>
        </div>
      </div>
    </div>
    <!-- Bootstrap core JavaScript-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>
    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin.min.js"></script>
  </div>
</body>

</html>
