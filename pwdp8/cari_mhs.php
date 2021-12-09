<?php 
include 'koneksi.php';// untuk menghubungkan dengan file koneksi
?>
<h3>Form Pencarian Dengan PHP MAHASISWA</h3> // judul
<form action="" method="get">
<label>Cari :</label> // label untuk cari
<input type="text" name="cari"> // untuk kolom input dengan type text
<input type="submit" value="Cari"> // untuk button yang disamping untuk submit yang value nya cari
</form>
<?php // proses untuk pencarian dari cari
if(isset($_GET['cari'])){
$cari = $_GET['cari'];
echo "<b>Hasil pencarian : ".$cari."</b>";//tampilan label untuk haril pencarian dari cari tadi
}
?>
<table border="1">// border untuk tabel hasil yang dibawah
<tr>// menampilakan label dalam tabel dengan no dan nama
<th>No</th>
<th>Nama</th>
</tr>
<?php //proses untuk melakukan pencarian pada database yang terlah terkoneksi
if(isset($_GET['cari'])){
$cari = $_GET['cari'];
$sql="SELECT * FROM mahasiswa WHERE nama like'%".$cari."%'";// kode untuk melakukan pencarian dari tabel mahasiswa dengan pencarian bedasarkan nama
$tampil = mysqli_query($con,$sql);
}else{
$sql="SELECT * FROM mahasiswa";//kode untuk melakukan pencarian dari from mahasiswa
$tampil = mysqli_query($con,$sql);
}
$no = 1;// permulaian dari nilai untuk penomoran
while($r = mysqli_fetch_array($tampil)){
?>
<tr>
<td><?php echo $no++; ?></td>//proses untuk no yang akan di increment
<td><?php echo $r['nama']; ?></td>// untuk menampilkan nama sesuai dengan yang ada
</tr>
<?php } ?>
</table>