<html>
<head><title>Tambah Data</title></head>
<body>
<h3><p align="left">Tambah Data Mahasiswa</p></h3>
<form name="form1" method="post" action="entry.php">
<table>
<tr>
<td>Nama</td>
<td><input type="text" name="nama" size="30"></td>
</tr>
<tr>
<td>Alamat</td>
<td><input type="text" name="alamat" size="50"></td>
</tr>
<tr>
<td>Agama</td>
<td><input type="text" name="agama" size="10"></td>
</tr>
<tr>
<td>No. Tlpn</td>
<td><input type="text" name="notlpn" size="15"></td>
</tr>
<tr>
<td><input value="Simpan" name="submit" type="submit" /></td>
</tr>
<tr>
<td><input value="ulangi" type="reset" /></td>
</tr>
<tr>
<td><input value="Kembali" type="button"  onClick="self.history.back()"></td>
</tr>
</table>
</form>
</body>
</html>