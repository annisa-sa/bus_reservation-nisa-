<?php
session_start(); 
include("../koneksi.php");

if (isset($_POST['simpan'])) {
    $penumpang_id = $_POST['penumpang_id'];
    $nama = $_POST['nama'];
    $kontak = $_POST['kontak'];
    
  
    $sql = "INSERT INTO penumpang
            ( penumpang_id, nama, kontak)
            VALUES ('$penumpang_id', '$nama', '$kontak')";

$query=mysqli_query($db, $sql);
    if ($query) {
        $_SESSION['notifikasi'] = "Data rute berhasil ditambahkan!";
    } else {
        $_SESSION['notifikasi'] = "Data rute gagal ditambahkan!";
    }

    header('Location: index.php');
} else {
    die("Akses ditolak...");
}
?>