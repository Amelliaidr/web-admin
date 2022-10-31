<?php
include "navbar.php";
include "connection.php"?>

<!--// $servername = "localhost";
// $username = "root";
// $password = "";
// $dbname = "bossnanny";

// // Create connection
// $conn = new mysqli($servername, $username, $password, $dbname);
// -->
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <title>SB Admin - Start Bootstrap Template</title>
  <!-- Bootstrap core CSS-->
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <!-- Custom fonts for this template-->
  <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
  <!-- Page level plugin CSS-->
  <link href="vendor/datatables/dataTables.bootstrap4.css" rel="stylesheet">
  <!-- Custom styles for this template-->
  <link href="css/sb-admin.css" rel="stylesheet">
</head>

<body class="fixed-nav sticky-footer bg-dark" id="page-top">
  <!-- Navigation-->
  <div class="content-wrapper">
    <div class="container-fluid">
      <ol class="breadcrumb">
        <li class="breadcrumb-item">
          <a href="#">Dashboard</a>
        </li>
        <li class="breadcrumb-item active">My Dashboard</li>
      </ol>

    <body>

        <div class="container">

            <div class="row"> 

                <?php

                    $id=mysqli_real_escape_string($conn, $_GET['id']);
                    $query="select * from home where id='$id'";
                    $det=mysqli_query($conn, $query)or die(mysqli_error());

                    while($d=mysqli_fetch_array($det)){

                    ?>

                <div class="panel panel-primary">

                    <div class="panel-heading">

                    <div class="card mb-3">
                    <div class="card-header">
                    <i class="fa fa-user"></i> Edit Data Perawat </div>

                    </div>

                    <!-- /.panel-heading -->
                    <div class="col-md-8">
                    <div class="panel-body">

                      <form action="process-edit.php" method="post" enctype="multipart/form-data">

                            <input name="id" type="hidden" class="form-control" value="<?php echo $d['id'] ?>" required>

                            <div class="form-group ">

                                <label>Nama Perawat</label>

                                <input name="nama" type="text" class="form-control" value="<?php echo $d['nama'] ?>" required>

                            </div>

                            <div class="form-group">
                                <label>Jenis Layanan</label>
                                        <select name="produk" class="form-control">
                                        <option style="color:white" value="<?php $d['produk']?>"><?php echo $d['produk']?></option>
                                        <option value="ART">Asisten Rumah Tangga</option>  
                                        <option value="Nanny">Nanny</option>
                                        <option value="Perawat Lansia">Perawat Lansia</option>
                                        </select>
                            </div>

                            <div class="form-group">
                                <label>Jenis Kelamin</label>
                                        <select name="gender"  class="form-control">
                                        <option style="color:white" value="<?php $d['gender']?>"><?php echo $d['gender']?></option>
                                        <option value="Pria">Laki-Laki</option>  
                                        <option value="Wanita">Perempuan</option>
                                        </select>
                            </div>

                            <div class="form-group">
                                <label>Agama</label>
                                        <select name="agama" class="form-control">
                                        <option style="color:white" value="<?php $d['agama']?>"><?php echo $d['agama']?></option>
                                        <option value="Islam">Islam</option>  
                                        <option value="Kristen">Kristen</option>
                                        <option value="Katolik">Katolik</option>  
                                        <option value="Hindu">Hindu</option>  
                                        <option value="Buddha">Buddha</option>
                                        <option value="Kong_Hu_Cu">Kong Hu Cu</option>
                                        </select>
                            </div>

                            <div class="form-group">

                                <label>Alamat</label>

                                <input name="alamat" type="text" class="form-control" value="<?php echo $d['alamat'] ?>" required>

                            </div>

                            <div class="form-group">
                                <label>Lokasi Penempatan</label>
                                        <select name="penempatan" id="penempatan" class="form-control">
                                        <option style="color:white" value="<?php $d['penempatan'] ?>"><?php echo $d['penempatan']?></option>
                                        <option value="">Lokasi Pasien</option>
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
                                        <option style="color:white" value="<?php $d['status']?>"><?php echo $d['status']?></option>
                                        <option value="Tersedia">Tersedia</option>  
                                        <option value="Kosong">Kosong</option>
                                        </select>
                            </div>

                            <div class="form-group">

                                <label>Foto Perawat</label><br>

                                <img src="img/<?php echo $d['img'] ?>" width="100px" height="100px" /></br>


                                <input name="gambar" id="gambar" type="file" class="form-control">

                            </div>

                            <a href="process-edit.php?id=<?=$row["id"]?>">
                                <button type="submit" 
                                class="btn btn-primary btn-xs edit_data"
                                name="simpan">
                                Simpan
                                </button>
                              </a>
                            <a href="index.php" class="btn btn-warning"> Kembali</a>
                      </form>
                        <?php 

                            }

                            ?>
                             <footer class="sticky-footer">
                            <div class="container">
                                <div class="text-center">
                                <small>Made with ❤</small>
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
                    </div>

                </div>

            </div>

        </div>

    
    </body>
 <!-- Bootstrap core JavaScript-->
 <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>
    <!-- Page level plugin JavaScript-->
    <script src="vendor/chart.js/Chart.min.js"></script>
    <script src="vendor/datatables/jquery.dataTables.js"></script>
    <script src="vendor/datatables/dataTables.bootstrap4.js"></script>
    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin.min.js"></script>
    <!-- Custom scripts for this page-->
    <script src="js/sb-admin-datatables.min.js"></script>
    <script src="js/sb-admin-charts.min.js"></script>
  </div>
</body>
</html>    



  