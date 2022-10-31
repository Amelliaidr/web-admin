<?php
include"connection.php";

if (isset($_POST["save"])) {
    # menampung data yg dikirim ke dalam variable
    $id = $_POST["id"];
    $nama = $_POST["nama"];
    $produk = $_POST["produk"];
    $gender = $_POST["gender"];
    $agama = $_POST["agama"];
    $tinggi = $_POST["tinggi"];
    $berat = $_POST["berat"];
    $alamat = $_POST["alamat"];
    $penempatan = $_POST["penempatan"];
    $status = $_POST["status"];

    # manage upload file
    $fileName = $_FILES["img"]["name"]; // file name
    $extension = pathinfo($_FILES["img"]["name"]);
    $ext = $extension["extension"]; // eksetensi file

    $img = time()."-".$fileName;
    
    
    # proses upload
    $folderName = "img/$img";
    if (move_uploaded_file($_FILES["img"]["tmp_name"],$folderName)) {
        # proses insert data ke tabel home
        $sql = "insert into home values
        ('$id','$nama','$produk','$gender','$agama','$tinggi','$berat','$alamat','$penempatan','$img','$status')";

        # eksekusi perintah SQL
        mysqli_query($conn, $sql);

        echo "Tambah data perawat berhasil";
        # direct ke halaman list perawat
        header("location:index.php");
    }
    else{
        echo "Upload file gagal";
    }

}else {
    mysqli_error($conn);
}
?>