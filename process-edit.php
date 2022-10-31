<?php
include "connection.php";


if (isset($_POST["simpan"])) {
    # menampung data yg dikirim ke dalam variable
    $id = $_POST["id"];
    $nama = $_POST["nama"];
    $produk = $_POST["produk"];
    $gender = $_POST["gender"];
    $agama = $_POST["agama"];
    $alamat = $_POST["alamat"];
    $penempatan = $_POST["penempatan"];
    $status = $_POST["status"];
    # jika update data beserta gambar
    if (!empty($_FILES["img"]["name"])) {
        # ambil data nama file yg akan di hapus
        $sql = "select * from home where id='$id'";
        $hasil = mysqli_query($conn, $sql);
        $perawat = mysqli_fetch_array($hasil);
        $oldFileName = $perawat["img"];

        # membuat path file yg lama
        $path = "img/$oldFileName";

        # cek eksistensi file yg lama
        if (file_exists($path)) {
            # hapus file yg lama
            unlink($path);
        }

        # membuat file name baru
        $img = time()."-".$_FILES["img"]["name"];
        $folder = "img/$img";

        # proses upload file yg baru
        if (move_uploaded_file($_FILES["img"]["tmp_name"], $folder)) {
            $sql = "UPDATE home set  
            nama = '$nama', produk = '$produk',
            gender = '$gender', agama = '$agama', alamat = '$alamat',
            penempatan = '$penempatan', status = '$status', img='$img'
            where id = '$id'";
              
            if (mysqli_query($conn, $sql)) {
                # jika update berhasil
                header("location:index.php");
            } else {
                # jika update gagal
                echo mysqli_error($conn);
            }
            
        }
    }
     # jika update data saja
    else {
        $sql = "update home set  
        nama = '$nama', produk = '$produk',
        gender = '$gender', agama = '$agama', alamat = '$alamat',
        penempatan = '$penempatan', status = '$status'
        where id = '$id'";
            
            if (mysqli_query($conn, $sql)) {
                # jika update berhasil
                header("location:index.php");
            } else {
                # jika update gagal
                echo mysqli_error($conn);
            }
    }
} 
else {
    mysqli_error($conn);
}

// elseif (isset($_GET["id_mobil"])) {
//     $id_mobil = $_GET["id_mobil"];
//     # ambil data dari tabel mobil sesuai id mobil yg dikirim
//     $sql = "select * from mobil where id_mobil='$id_mobil'";
//     $hasil = mysqli_query($conn, $sql);
//     $mobil = mysqli_fetch_array($hasil);
    
//     # ambil data file name yg dihapus
//     $oldFileName = $mobil["gambar"];

//     # membuat path file yg lama
//     $path = "img/$oldFileName";

//     # hapus file yg ada di folder
//     # cek eksistensi file yg lama
//     if (file_exists($path)) {
//         # hapus file yg lama
//         unlink($path);
//     }

//     # hapus data yg ada di tabel mobil
//     $sql = "delete from mobil where id_mobil='$id_mobil";
//     if (mysqli_query($conn, $sql)) {
//         header("location:daftar-mobil.php");
//     } else {
//         mysqli_error($conn);
//     } 
// }
?>