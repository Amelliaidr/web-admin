<?php  
//select.php  
if(isset($_POST["employee_id"]))
{
 $output = '';
 $connect = mysqli_connect("localhost", "root", "", "bossnanny");
 $query = "SELECT * FROM home WHERE id = '".$_POST["employee_id"]."'";
 $result = mysqli_query($connect, $query);

 $output .= '  
      <div class="table-responsive">  
           <table class="table table-bordered">';
    while($row = mysqli_fetch_array($result))
    {
     $output .= '
     
     <tr>  
     <td width="30%"><label>Nama</label></td>  
     <td width="70%">'.$row["nama"].'</td>  
 </tr>
 <tr>  
     <td width="30%"><label>Perawat</label></td>  
     <td width="70%">'.$row["produk"].'</td>  
 </tr>
 <tr>  
     <td width="30%"><label>Jenis Kelamin</label></td>  
     <td width="70%">'.$row["gender"].'</td>  
 </tr>

 <tr>  
     <td width="30%"><label>Agama</label></td>  
     <td width="70%">'.$row["agama"].'</td>  
 </tr>
 </tr>
 <tr>  
     <td width="30%"><label>Tinggi Badan</label></td>  
     <td width="70%">'.$row["tinggi"].'</td>  
 </tr>
 <tr>  
     <td width="30%"><label>Berat Badan</label></td>  
     <td width="70%">'.$row["berat"].'</td>  
 </tr>

 <tr>  
     <td width="30%"><label>Alamat</label></td>  
     <td width="70%">'.$row["alamat"].'</td>  
 </tr>
 <tr>  
     <td width="30%"><label>Lokasi</label></td>  
     <td width="70%">'.$row["penempatan"].'</td>  
 </tr>


  

 
     ';
    }
    $output .= '</table></div>';
    echo $output;
    

}
?>



