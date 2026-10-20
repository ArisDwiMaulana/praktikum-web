<?php
include "koneksi.php";

$query = mysqli_query($conn, "SELECT * FROM mahasiswa");
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
</head>
<body>
    <h2>Daftar Mahasiswa</h2>
    <a href="form.php">Tambah Mahasiswa</a>

    <table border="1">
        <tr>
            <th>ID</th>
            <th>Username</th>
            <th>Jurusan</th>
        </tr>
        <?php while ($row = mysqli_fetch_assoc($query)) { ?>
                <tr>
                    <td><?= $row["id"] ?></td>
                    <td><?= htmlspecialchars($row["username"]) ?></td>
                    <td><?= htmlspecialchars($row["jurusan"]) ?></td>
                </tr>
            <?php } ?>
    </table>
</body>
</html>
