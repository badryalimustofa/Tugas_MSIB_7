<?php
$hostName = "localhost"; //silahkan ganti jika error (sesuaikan dengan nama host yang ada di local)
$username = "root"; //silahkan ganti jika error (sesuaikan dengan nama username yang ada di local)
$password = ""; //silahkan ganti jika error (sesuaikan dengan nama password yang ada di local)
$dbName = "kampus-merdeka"; //silahkan ganti jika error (sesuaikan dengan nama database yang ada di local)
error_reporting(E_ALL);
ini_set('display_errors', 1);
$koneksi = mysqli_connect($hostName, $username, $password, $dbName);

if ($koneksi) {
    echo "connected";
} else {
    echo "not connected";
}

?>