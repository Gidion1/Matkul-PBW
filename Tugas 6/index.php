<?php

$keberangkatan = array(
    "New York (USA)" => 70000,
    "Tokyo Mid (JPN)" => 80000,
    "Xian-way (CYC)" => 20000,
    "Juanda (IDN)" => 40000
);

$bandara_tujuan = array(
    "Los Angles (USA)" => 80000,
    "Hasanuddin (IDN)" => 70000,
    "Bangkok Line (THA)" => 90000,
    "Asakusa (JPN)" => 70000
);

function getPajakAsal($keberangkatan, $tujuan)
{
    $pajak_penerbangan = $keberangkatan[$tujuan];
    return $pajak_penerbangan;
}
function getPajakTujuan($bandara_tujuan, $tujuan)
{
    $pajak_penerbangan = $bandara_tujuan[$tujuan];
    return $pajak_penerbangan;
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <title>Routfy</title>
</head>

<body style="background-color :rgb(236, 215, 255);">



<div class="container-nav">
        <nav class="navbar navbar-expand-lg navbar-dark fixed" style="background-color: #981bff">
            <div class="container-fluid">
              <a class="navbar-brand" href="#"> <span><i class='bx bxs-paper-plane bx-fade-up'></i></span>ROUTEFY</a>
              <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
              <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                  <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="#">Schedule</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="#">Plane</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="#">Maintenance</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="#">About</a>
                  </li>
              </div>
            </div>
          </nav>
    </div>

    <div class="container">
        <div class="row mt-5">
            <div class="col-md-6 offset-4">
                <img src="#" alt="" width="70%">
            </div>
        </div>
        <div class="row">
            <div class="col-md-12 text-center">
                <h1 style="margin-bottom: 40px">Flight Route Registration 👨‍✈️</h1>
            </div>
        </div>
        <div class="row d-flex justify-content-center">
            <div class="col-md-6">
                <form action="" method="POST" style="border :0px solid;padding : 40px;border-radius: 20px;background-color: rgb(221, 184, 255);margin-bottom : 50px;">
                    <div class="mb-3">
                        <label for="maskapai" class="form-label">Airline</label>
                        <input type="text" class="form-control" id="maskapai" name="maskapai">
                    </div>
                    <label for="asal" class="form-label">Departure</label>
                    <select class="form-select mb-3" name="asal" id="asal">
                        <option selected>Chose Airport ...</option>
                        <?php foreach ($keberangkatan as $bandara => $pajak_penerbangan) : ?>
                            <option value="<?= $bandara ?>"><?= $bandara; ?></option>
                        <?php endforeach; ?>
                    </select>
                    <label for="tujuan" class="form-label">Destination</label>
                    <select class="form-select mb-3" name="tujuan" id="tujuan">
                        <option selected>Chose Airport ...</option>
                        <?php foreach ($bandara_tujuan as $bandara => $pajak_penerbangan) : ?>
                            <option value="<?= $bandara ?>"><?= $bandara; ?></option>
                        <?php endforeach; ?>
                    </select>
                    <div class="mb-3">
                        <label for="harga" class="form-label">Ticket Price</label>
                        <input type="text" class="form-control" name="harga" id="harga">
                    </div>
                    <button class="btn btn-success" name="submit" style="background-color: #5b00a5; border : none;margin-top: 20px">Simpan</button>
                </form>
               
            </div>
        </div>

        
        <h2 style="margin-bottom : 70px;text-align : center;">🔽 Registered Flight Route Data 🔽</h2>


        
        <?php
        $file = 'data/maskapai.json';
        $data_maskapai = array();
        $file_json = file_get_contents($file);
        $data_maskapai = json_decode($file_json, true);

        if (isset($_POST['submit'])) {
            $pajak_penerbangan = getPajakAsal($keberangkatan, $_POST['asal']) + getPajakTujuan($bandara_tujuan, $_POST['tujuan']);
            $total = $pajak_penerbangan + $_POST['harga'];

            $inputUser = array(
                "Maskapai" => $_POST['maskapai'],
                "Asal_penerbangan" => $_POST['asal'],
                "tujuan_penerbangan" => $_POST['tujuan'],
                "Harga_tiket" => $_POST['harga'],
                "Pajak" => $pajak_penerbangan,
                "Total_harga" => $total
            );

            array_push($data_maskapai, $inputUser);
            $data_json = json_encode($data_maskapai, JSON_PRETTY_PRINT);
            file_put_contents($file, $data_json);
        }

        ?>
        <div class="row">
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">Airline</th>
                        <th scope="col">Departure</th>
                        <th scope="col">Destination</th>
                        <th scope="col">Ticket Price</th>
                        <th scope="col">Tax Flight</th>
                        <th scope="col">Price Total</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($data_maskapai as $data => $value) : ?>
                        <tr>
                            <td><?= $data_maskapai[$data]['Maskapai']; ?></td>
                            <td><?= $data_maskapai[$data]['Asal_penerbangan']; ?></td>
                            <td><?= $data_maskapai[$data]['tujuan_penerbangan']; ?></td>
                            <td><?= $data_maskapai[$data]['Harga_tiket']; ?></td>
                            <td><?= $data_maskapai[$data]['Pajak']; ?></td>
                            <td><?= $data_maskapai[$data]['Total_harga']; ?></td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>





    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
</body>

</html>