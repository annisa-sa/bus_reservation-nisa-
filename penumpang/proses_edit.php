<?php
session_start();
include("../koneksi.php");

if (isset($_POST['simpan'])) {
    $id= $_POST['penumpang_id'];
    $penumpang_id = $_POST['penumpang_id'];
    $nama = $_POST['nama'];
    $kontak = $_POST['kontak'];

    $sql = "UPDATE penumpang SET
            penumpang_id='$penumpang_id',
            nama='$nama',
            kontak='$kontak'
            WHERE penumpang_id=$id";

    $query=mysqli_query($db, $sql);

    if ($query) {
        $_SESSION['notifikasi'] = "Data penumpang berhasil diperbarui!";
    } else {
        $_SESSION['notifikasi'] = "Data penumpang diperbarui!";
    }

   
    header('Location: index.php');
} else {
    die("Akses ditolak...");
}
?>