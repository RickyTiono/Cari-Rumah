<?php
session_start();

include 'header.php';

?> 

<body>
	<form action="admininput.php" method="POST">
	<br>

<h3>Tambah Data</h3>
	Alamat: <br><textarea placeholder="Alamat" name="alamat"></textarea><br>

	Harga: <input type="text" placeholder="Harga" name="harga" value="" style="width: 150px"><br>

	Deskripsi: <br><textarea name="deskripsi" placeholder="Deskripsi" rows="4" cols="30"></textarea>
	<br>

	No.Telp: <input type="text" placeholder="Nomor Telepon" name="nomor" value="" style="width: 150px"><br>

	Foto: <input type="file" name="photo"><br>

	<input type="submit" name="submit" value="Submit"><br>

	<h3>Hapus Data</h3>

	No.Telp: <input type="text" placeholder="Nomor Telepon" name="notlp" value="" style="width: 150px"><br>

	<input type="submit" name="delete" value="Delete">

</form>
</body>
