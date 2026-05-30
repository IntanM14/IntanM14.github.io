<?php
require 'config/Koneksi.php';
require 'class/Lagu.php';

$koneksi = new Koneksi();
$db = $koneksi->connect();

$lagu = new Lagu($db);

if (isset($_POST['simpan'])) {

    $lagu->tambah(
        $_POST['judul'],
        $_POST['artist'],
        $_POST['mood'],
        $_POST['link']
    );

    header("Location: index.php");
    exit;
}
?>

<!DOCTYPE html>
<html>

<head>
    <title>Tambah Lagu</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
        body {
    font-family: 'Segoe UI', sans-serif;
    min-height: 100vh;

    background-image: url('img/bg3.png');
    background-size: cover;
    background-position: center;
    background-repeat: no-repeat;
    background-attachment: fixed;

    color: white;
}

        .card {
            border: none;
            border-radius: 15px;
        }

        h2 {
            color: #355C7D;
            text-align: center;
        }

        .btn-success {
            background: #6C5B7B;
            border: none;
        }

        .btn-success:hover {
            background: #355C7D;
        }

        .btn-secondary {
            border: none;
        }
    </style>
</head>

<body>

    <div class="container mt-5">

        <div class="row justify-content-center">

            <div class="col-md-6">

                <div class="card p-4 shadow">

                    <h2 class="mb-4">
                        🎵 Tambah Lagu
                    </h2>

                    <form method="POST">

                        <div class="mb-3">
                            <label class="form-label">
                                Judul Lagu
                            </label>

                            <input
                                type="text"
                                name="judul"
                                class="form-control"
                                required>
                        </div>

                        <div class="mb-3">
                            <label class="form-label">
                                Artist
                            </label>

                            <input
                                type="text"
                                name="artist"
                                class="form-control"
                                required>
                        </div>

                        <div class="mb-3">
                            <label class="form-label">
                                Mood
                            </label>

                            <select
                                name="mood"
                                class="form-select">

                                <option>Senang</option>
                                <option>Galau</option>
                                <option>Santai</option>
                                <option>Semangat</option>
                                <option>Sedih</option>

                            </select>
                        </div>

                        <div class="mb-3">
                            <label class="form-label">
                                Link Lagu
                            </label>

                            <input
                                type="text"
                                name="link"
                                class="form-control"
                                placeholder="https://youtube.com/..."
                                required>
                        </div>

                        <div class="d-flex justify-content-between">

                            <a href="index.php"
                                class="btn btn-secondary">
                                Kembali
                            </a>

                            <button
                                type="submit"
                                name="simpan"
                                class="btn btn-success">
                                Simpan Lagu
                            </button>

                        </div>

                    </form>

                </div>

            </div>

        </div>

    </div>

</body>

</html>