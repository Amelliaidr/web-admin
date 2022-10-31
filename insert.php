<?php
//insert.php
$connect = mysqli_connect("localhost", "root", "", "bossnanny");
if(!empty($_POST))
{
 $output = '';
 $nama = mysqli_real_escape_string($connect, $_POST["nama"]);  
 $produk = mysqli_real_escape_string($connect, $_POST["produk"]);  
 $gender = mysqli_real_escape_string($connect, $_POST["gender"]);  
 $agama = mysqli_real_escape_string($connect, $_POST["agama"]);
 $tinggi = mysqli_real_escape_string($connect, $_POST["tinggi"]);  
 $berat = mysqli_real_escape_string($connect, $_POST["berat"]);  
 $alamat = mysqli_real_escape_string($connect, $_POST["alamat"]);  
 $penempatan = mysqli_real_escape_string($connect, $_POST["penempatan"]);
    $query = "
    INSERT INTO home(nama, produk, gender, agama, tinggi, berat, alamat, penempatan)  
     VALUES('$nama', '$produk', '$gender', '$agama', '$tinggi', '$berat', '$alamat', '$penempatan')
    ";
    if(mysqli_query($connect, $query))
    {
     $output .= '<label class="text-success">Data Berhasil Masuk</label>';
     $select_query = "SELECT * FROM home ORDER BY id DESC";
     $result = mysqli_query($connect, $select_query);
     $output .= '
      <table class="table table-bordered">  
      <thead>
      <tr>
        <th>ID</th>
        <th>Nama Perawat</th>
        <th>Jenis Perawat</th>
        <th>Jenis Kelamin</th>
        <th>Agama</th>
        <th>Alamat Perawat</th>
        <th>Penempatan</th>
        <th>Images</th>
      </tr>
    </thead>
    <tfoot>
     ';
     while($row = mysqli_fetch_array($result))
     {
      $output .= '
       <tr>  
                         <td>' . $row["nama"] . '</td>  
                         <td><input type="button" name="view" value="Lihat Detail" id="' . $row["id"] . '" class="btn btn-info btn-xs view_data" /></td>  
                         <td><input type="button" name="edit" value="Edit" id="' . $row["id"] . '" class="btn btn-warning btn-xs edit_data" /></td>       
                         <td><input type="button" name="delete" value="Hapus" id="' . $row["id"] . '" class="btn btn-danger btn-xs hapus_data" /></td>
                  
                    </tr>
      ';
     }
     $output .= '</table>';
    }else{
        $output .= mysqli_error($connect);
    }
    echo $output;
}
?>