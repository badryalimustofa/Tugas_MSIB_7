<?php
include_once("koneksi.php");

$first_name = $_POST['nama_depan'];
$last_name = $_POST['nama_belakang'];
$emaill = $_POST['surel'];
$phone = $_POST['no_telp'];
$address = $_POST['alamat'];

$result = mysqli_query($conn, "INSERT INTO `customer` (`first_name`,`last_name`,`email`,`phone`,`address`) VALUES ('$first_name','$last_name','$email','$phone','$address')");

error_reporting(E_ALL);
ini_set('display_errors', 1);

header("Location:index.php");
?>