<?php
require 'config/Koneksi.php';
require 'class/Lagu.php';

$koneksi = new Koneksi();
$db = $koneksi->connect();

$lagu = new Lagu($db);

$id = $_GET['id'];

$lagu->hapus($id);

header("Location:index.php");
?>