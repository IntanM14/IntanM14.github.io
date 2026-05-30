<?php
require 'config/Koneksi.php';
require 'class/Lagu.php';

$koneksi = new Koneksi();
$db = $koneksi->connect();

$lagu = new Lagu($db);
$data = $lagu->tampil();
?>

<!DOCTYPE html>
<html>

<head>
    <title>Mood Music</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
        body {
            font-family: 'Segoe UI', sans-serif;
            min-height: 100vh;

            background-image: url('img/bg.png');
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
            background-attachment: fixed;

            color: white;
        }

        /* Judul */
        h1 {
            color: white;
            font-weight: bold;
            letter-spacing: 1px;
            text-shadow: 0 4px 15px rgba(0, 0, 0, .3);
        }

        /* Card Lagu */
        .card {
            background: rgba(255, 255, 255, 0.08);

            backdrop-filter: blur(15px);
            -webkit-backdrop-filter: blur(15px);

            border: 1px solid rgba(255, 255, 255, .15);

            border-radius: 20px;

            color: white;

            transition: 0.3s;
        }

        .card:hover {
            transform: translateY(-8px);
            box-shadow: 0 20px 40px rgba(0, 0, 0, .3);
        }

        /* Tombol Tambah */
        .btn-success {
            background: linear-gradient(45deg,
                    #06b6d4,
                    #3b82f6);

            border: none;
            border-radius: 12px;
            padding: 10px 20px;
        }

        .btn-success:hover {
            transform: scale(1.05);
        }

        /* Tombol Putar */
        .btn-sm.btn-danger {
            background: linear-gradient(45deg,
                    #8b5cf6,
                    #ec4899);

            border: none;
            padding: 10px;
            font-size: 15px;
        }

        /* Tombol Hapus */
        .btn-outline-light {
            border-radius: 12px;
        }

        /* Badge Mood */
        .badge {
            padding: 8px 12px;
            border-radius: 20px;
            font-size: 13px;
        }

        /* Senang */
        .badge.bg-primary {
            background: linear-gradient(45deg,
                    #06b6d4,
                    #3b82f6) !important;
        }

        /* Container */
        .container {
            padding-top: 20px;
        }
    </style>
</head>

<body>

    <div class="container mt-4">

        <h1 class="mb-5 text-center">
            🎧 Mood Music Recommendation
            <br>
            <small style="font-size:18px;color:#d1d5db;">
                Temukan atau tambahkan lagu sesuai suasana hatimu
            </small>
        </h1>

        <div class="d-flex justify-content-between mb-3">

            <a href="tambah.php" class="btn btn-success">
                Tambah Lagu
            </a>

        </div>

        <div class="row">

            <?php while ($row = $data->fetch_assoc()) { ?>

                <div class="col-md-4 mb-4">

                    <div class="card p-3 shadow">

                        <h4><?= $row['judul'] ?></h4>

                        <p>
                            🎤 <?= $row['artist'] ?>
                        </p>

                        <p>
                            Mood:
                            <span class="badge bg-primary">
                                <?= $row['mood'] ?>
                            </span>
                        </p>

                        <a href="<?= $row['link'] ?>"
                            target="_blank"
                            class="btn btn-danger btn-sm">
                            Putar Lagu
                        </a>

                        <a href="edit.php?id=<?= $row['id'] ?>"
                            class="btn btn-warning btn-sm mt-2">
                            Edit
                        </a>

                        <a href="hapus.php?id=<?= $row['id'] ?>"
                            class="btn btn-outline-light btn-sm mt-2">
                            Hapus
                        </a>

                    </div>

                </div>

            <?php } ?>

        </div>

    </div>

</body>

</html>