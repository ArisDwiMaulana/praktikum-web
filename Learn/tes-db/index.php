<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <?php
    $connect = mysqli_connect('db', 'root', '', 'nwind2211');
    $query = mysqli_query($connect, 'SELECT * FROM employees');
    ?>
</head>

<body>
    <h1>Daftar Karyawan</h1>
    <ol>
        <?php
        while ($row = mysqli_fetch_assoc($query)) {
            echo '<li>' . $row['FirstName'] . ' ' . $row['LastName'] . '</li>';
        }
        ?>
    </ol>
</body>

</html>
