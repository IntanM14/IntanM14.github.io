<?php
require 'config/Koneksi.php';
require 'class/Lagu.php';

$koneksi = new Koneksi();
$db = $koneksi->connect();

$lagu = new Lagu($db);

$id = $_GET['id'];

$data = $lagu->getById($id);
$row = $data->fetch_assoc();

if(isset($_POST['update'])){

    $lagu->edit(
        $id,
        $_POST['judul'],
        $_POST['artist'],
        $_POST['mood'],
        $_POST['link']
    );

    header("Location:index.php");
    exit;
}
?>

<!DOCTYPE html>
<html>

<head>
    <title>Edit Lagu</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
        body {
    font-family: 'Segoe UI', sans-serif;
    min-height: 100vh;

    background-image: url('img/bg2.png');
    background-size: cover;
    background-position: center;
    background-repeat: no-repeat;
    background-attachment: fixed;

    color: white;
}

        .card{
            border:none;
            border-radius:15px;
        }
    </style>
</head>

<body>

<div class="container mt-5">

    <div class="row justify-content-center">

        <div class="col-md-6">

            <div class="card p-4 shadow">

                <h2 class="mb-4 text-center">
                    ✏ Edit Lagu
                </h2>

                <form method="POST">

                    <input
                        type="text"
                        name="judul"
                        class="form-control mb-3"
                        value="<?= $row['judul']; ?>">

                    <input
                        type="text"
                        name="artist"
                        class="form-control mb-3"
                        value="<?= $row['artist']; ?>">

                    <select
                        name="mood"
                        class="form-select mb-3">

                        <option <?= $row['mood']=="Senang"?"selected":"" ?>>Senang</option>
                        <option <?= $row['mood']=="Galau"?"selected":"" ?>>Galau</option>
                        <option <?= $row['mood']=="Santai"?"selected":"" ?>>Santai</option>
                        <option <?= $row['mood']=="Semangat"?"selected":"" ?>>Semangat</option>
                        <option <?= $row['mood']=="Sedih"?"selected":"" ?>>Sedih</option>

                    </select>

                    <input
                        type="text"
                        name="link"
                        class="form-control mb-3"
                        value="<?= $row['link']; ?>">

                    <button
                        type="submit"
                        name="update"
                        class="btn btn-success">

                        Update Lagu

                    </button>

                </form>

            </div>

        </div>

    </div>

</div>

</body>

</html>