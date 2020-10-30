<?php
session_start();
include 'koneksi.php';
include 'csrf.php';

$nama_pengirim = $_POST["nama_pengirim"];
$email = $_POST["email"];
$komen = $_POST["komen"];
$komen_id = $_POST["komentar_id"];

$query = "INSERT INTO tbl_komentar (parent_komentar_id, komentar, nama_pengirim) VALUES (?, ?, ?)";
$david1 = $db1->prepare($query);
$david1->bind_param("sss", $komen_id, $komen, $nama_pengirim);
$david1->execute();

echo json_encode(['success' => 'Sukses']);
?>
