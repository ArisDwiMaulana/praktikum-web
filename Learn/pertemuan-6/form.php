<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
</head>
<body>
	<h2>Input Data Mahasiswa</h2>

	<form action="simpan.php" method="POST">
	    <label for="username">Username</label>
		<input type="text" id="username" name="username" required>
		<br><br>
		<label for="jurusan">Jurusan</label>
		<input type="text" id="jurusan" name="jurusan" required>
		<br><br>
		<button type="submit">Kirim</button>
	</form>
</body>
</html>
