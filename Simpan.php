<?php
include("Koneksi.php");
$nama = $_POST['nama'];
$email = $_POST['email'];
$pesan = $_POST['pesan'];
$query = mysql_query("insert into contact values  ('$nama','$email','$pesan')");
echo "Data Telah disimpan<br>
<a href=\"index.html\">Kembali</a>";
?>