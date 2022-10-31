<?php
include './connection.php';

$id = $_GET['id'];

$sql ="delete from home where id = '".$id."'" ;

$result = mysqli_query($conn,$sql);

if ($result) {
    header('location:index.php');
} else {
    printf('Maaf gagal menghapus data'.mysqli_error($conn));
    exit();
}

?>