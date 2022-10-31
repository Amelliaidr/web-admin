<?php

include "connection.php";



$id=$_POST['id'];
$nama=$_POST['nama'];
$produk=$_POST['produk'];
$gender=$_POST['gender'];
$agama=$_POST['agama'];
$alamat=$_POST['alamat'];
$penempatan=$_POST['penempatan'];
$status=$_POST['status'];



// Cek apakah user ingin mengubah fotonya atau tidak

if(isset($_POST['ubah_foto'])){ // Jika user menceklis checkbox yang ada di form ubah, lakukan :

    // Ambil data foto yang dipilih dari form

    $sumber = $_FILES['gambar']['name'];

    $nama_gambar = $_FILES['gambar']['tmp_name'];

    

    // Rename nama fotonya dengan menambahkan tanggal dan jam upload

    $fotobaru = date('dmYHis').$sumber;

    

    // Set path folder tempat menyimpan fotonya

    $path = "img/".$fotobaru;



    if(move_uploaded_file($nama_gambar, $path)){ // Cek apakah gambar berhasil diupload atau tidak

        // Query untuk menampilkan data user berdasarkan id yang dikirim

        $query = "SELECT * FROM home WHERE id='".$id."'";

        $sql = mysqli_query($conn, $query); // Eksekusi/Jalankan query dari variabel $query

        $data = mysqli_fetch_array($sql); // Ambil data dari hasil eksekusi $sql



        // Cek apakah file gambar sebelumnya ada di folder foto

        if(is_file("img/".$data['foto'])) // Jika gambar ada

            unlink("img/".$data['foto']); // Hapus file gambar sebelumnya yang ada di folder images

        

        // Proses ubah data ke Database

        $sql = "update home set nama='$nama', produk='$produk', gender='$gender', agama='$agama, alamat='$alamat', penempatan='$penempatan', status='$status', foto='$fotobaru' where id='$id' ";

        $result = mysqli_query($conn, $query); // Eksekusi/ Jalankan query dari variabel $query



        if(mysqli_query($conn, $query)){ // Cek jika proses simpan ke database sukses atau tidak

            // Jika Sukses, Lakukan :

            header("location: index.php"); // Redirect ke halaman index.php

        }else{

            // Jika Gagal, Lakukan :

            echo "Maaf, Terjadi kesalahan saat mencoba untuk menyimpan data ke database.";

            echo "<br><a href='index.php'>Kembali Ke Form</a>";

        }

    }else{

        // Jika gambar gagal diupload, Lakukan :

        echo   "<script> alert('Maaf, Gambar gagal untuk diupload'); 

                location = 'index.php'; 

                </script>";

    }

}else{ // Jika user tidak menceklis checkbox yang ada di form ubah, lakukan :

    // Proses ubah data ke Database

    $query = "UPDATE home set nama='$nama', produk='$produk', gender='$gender', agama='$agama, alamat='$alamat', penempatan='$penempatan', status='$status' where id='$id' ";

    $sql = mysqli_query($conn, $query); // Eksekusi/ Jalankan query dari variabel $query



    if($sql){ // Cek jika proses simpan ke database sukses atau tidak

        // Jika Sukses, Lakukan :

        header("location: index.php"); // Redirect ke halaman index.php

    }else{

        // Jika Gagal, Lakukan :

        echo "Maaf, Terjadi kesalahan saat mencoba untuk menyimpan data ke database.";

        echo "<br><a href='index.php'>Kembali Ke Form</a>";

    }

}



?>

