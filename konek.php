<?php
$host       ="localhost";
$user       ="root";
$password   ="";
$database   ="evalpakan";
$konek      = mysqli_connect($host, $user, $password, $database);
if($konek) {
    echo "koneksi berhasil";
 } else {
    echo "koneksi gagal";
    }


        
        
        
        
?>





