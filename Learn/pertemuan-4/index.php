<!doctype html>
<html lang="en">
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title>Pertemuan 4</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    </head>
    <body>
        <h1>Pertemuan 4</h1>
        <hr />
        <!--echo/print-->
        <?php echo "hello world"; ?>
        <br>
        <?= "mbg hebat <br>" ?>

        <hr>
        <!--variabel-->
        <?php
        $nama = "Joko Widodo";
        $umur = 20;
        $date = date("d F Y H:i:s");

        echo "Hallo $nama <br>";
        echo "Anda berusia $umur tahun <br>";
        echo "Sekarang tanggal $date <br>";

        print "Ini Pakai Print";
        ?>

        <hr>
        <!--if statement-->
        <p class="text-primary">
        <?php if ($umur > 18) {
            echo "Anda sudah dewasa";
        } else {
            echo "Anda masih kecil";
        } ?>
        </p>
        <hr>
        <!--looping-->
        <div class="d-flex flex-wrap gap-2">
        <?php for ($i = 1; $i <= 10; $i++) {
            echo <<<HTML
                        <div class="card" style="width: 18rem;">
                          <div class="card-body">
                            <h5 class="card-title">Judul Ke-$i</h5>
                            <h6 class="card-subtitle mb-2 text-body-secondary">Card subtitle</h6>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card’s content.</p>
                            <a href="#" class="card-link">Card link</a>
                            <a href="#" class="card-link">Another link</a>
                          </div>
                        </div>
            HTML;
        } ?>
        </div>

        <hr>
        <!--Array-->
        <?php
        $array = [
            "Senin, ",
            "Selasa, ",
            "Rabu, ",
            "Kamis, ",
            "Jumat, ",
            "Sabtu, ",
            "Minggu, ",
        ];

        $mhs = [
            [
                "nama" => "Jajang",
                "umur" => 20,
            ],
            [
                "nama" => "Napoleon",
                "umur" => 25,
            ],
        ];

        foreach ($array as $day) {
            echo $day . "<br>";
        }

        foreach ($mhs as $student) {
            echo $student["nama"] . "( " . $student["umur"] . " )<br>";
        }
        ?>

        <hr>
        <?php
        $semester = 4;
        echo "Hallo, nama saya $nama";
        echo "<br>";
        echo "Saya sekarang semester $semester";
        echo "<br>";

        if ($semester <= 4) {
            echo "Masih junior";
        } else {
            echo "Sudah senior";
        }

        echo "<br>";
        if ($semester % 2 == 0) { ?>
         <button type="button" class="btn btn-danger">Danger</button>
        <?php } else { ?>
         <button type="button" class="btn btn-success">Success</button>
        <?php }
        ?>


    </body>
</html>
