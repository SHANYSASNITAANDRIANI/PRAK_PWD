<?php
session_start();//milai session
include "koneksi.php";//menghubungkan dengan database
$email = $_POST['email'];//mengambil data id_user
$id_user = $_POST['id_user'];//mengambil data id_user
$pass=($_POST['password']);//mengambil data password
$sql="SELECT * FROM users WHERE id_user='$id_user' AND password='$pass' AND email='$email'";
if ($_POST["captcha_code"] == $_SESSION["captcha_code"]) {//inout data ke database dan cek captcha
 
$login=mysqli_query($con,$sql);//buat variabel login dan connect dengan sql sebelumnya
$ketemu=mysqli_num_rows($login);//cek apa ada data tsb di database dengan hitung baris
$r= mysqli_fetch_array($login);
if ($ketemu > 0){//cek berhasil dengan bbrp baris dari inputan database
 $_SESSION['id_user'] = $r['id_user'];// cari data id_user pada database
 $_SESSION['password_user'] = $r['password'];//cari data password pada database
echo"USER BERHASIL LOGIN<br>";//pemberitahuan berhasil login
echo "id user =",$_SESSION['id_user'],"<br>";//memanggil id
echo "password=",$_SESSION['password_user'],"<br>";//memanggil password
echo "<a href=logout.php><b>LOGOUT</b></a></center>";
}
else{
 echo "<center>Login gagal! username & password tidak benar<br>";//error atau salah memberi pemberitahuan gagal
 echo "<a href=form_login.php><b>ULANGI LAGI</b></a></center>";//pemanggilan untuk mengarah kelaman untuk mengulang
}
mysqli_close($con); //tutup koneksi dengan database
} 
else {//kondisi salah captcha
echo "<center>Login gagal! Captcha tidak sesuai<br>";
 echo "<a href=form_login.php><b>ULANGI LAGI</b></a></center>"; }
?>