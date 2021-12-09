<?php
$host="localhost";// panggil localhost
$username="root";//username dalam sql
$password="";//password sql
$databasename="akademic";
$con=@mysqli_connect($host,$username,$password,$databasename);//koneksi dengan database
if (!$con) {//pengecekan terhubung atau tidak
 echo "Error: " . mysqli_connect_error();
exit();
}
?>