
<?php 
include('navbar.php');
include('connection.php'); 

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
        <div class="col-12">
          <h1>Edit Perawat </h1>
        </div> 
         
         <div class="col-md-8">
            
<form method="post" action="edit.php">

  <div class="form-group">
    <label>Nama Perawat</label>
    <input type="text" class="form-control" name="nama" required>
  </div>

  <div class="form-group">
    <label>Jenis Perawat</label>
    <input type="text" class="form-control"  name="produk" required>
  </div>

 <div class="form-group">
    <label>Jenis Kelamin</label>
    <input type="text" class="form-control" name="pcat" required>
  </div>

  <div class="form-group">
    <label>Agama</label>
    <input type="text" class="form-control" name="nama" required>
  </div>

  <div class="form-group">
    <label>Alamat Perawat</label>
    <input type="text" class="form-control"  name="produk" required>
  </div>

 <div class="form-group">
    <label>Penempatan</label>
    <input type="text" class="form-control" name="pcat" required>
  </div>


  <div class="form-group">
    <label>Foto Perawat </label>
    <input type="file" name="img" class="form-control">
  </div>

  <button type="submit" class="btn btn-primary" name="reg_p">Submit</button>
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
