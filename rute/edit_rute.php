<?php

include("../koneksi.php");

$id = $_GET['id'];

$query = $db->query("SELECT * FROM rutee WHERE rute_id = '$id'");
$rutee = $query->fetch_assoc();
?>
<!DOCTYPE html>
<html>
<head>
    <title>Edit Data Rute</title>
</head>
<body>
    <h3>Edit Data Rute</h3>
    <form action="proses_edit.php" method="POST">
        <input type="hidden" name="rute_id" value="<?php echo $rutee['rute_id']; ?>">
        <table border="0">
            <tr>
                <td>Kota Asal</td>
                <td>
                    <input type="text" name="kota_asal"
                     value="<?php echo $rutee['kota_asal']; ?>" required>
                </td>
            </tr>
            <tr>
                <td>Kota Tujuan</td>
                <td>
                    <input type="text" name="kota_tujuan"
                     value="<?php echo $rutee['kota_tujuan']; ?>" required>
                </td>
            </tr>
             
            <tr>
                <td>Harga</td>
                <td>
                <input type="text" name="harga"
                value="<?php echo $rutee['harga']; ?>" required>
                </td>
            </tr>
        </table>
        <button type="submit" name="simpan">Simpan</button>
    </form>
</body>
</html