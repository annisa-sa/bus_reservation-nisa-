<?php

include("../koneksi.php");

$id = $_GET['id'];

$query = $db->query("SELECT * FROM penumpang WHERE penumpang_id = '$id'");
$penumpang = $query->fetch_assoc();
?>
<!DOCTYPE html>
<html>
<head>
    <title>Edit Data penumpang</title>
</head>
<body>
    <h3>Edit Data penumpang</h3>
    <form action="proses_edit.php" method="POST">
        <input type="hidden" name="penumpang_id" value="<?php echo $penumpang['penumpang_id']; ?>">
        <table border="0">
            <tr>
                <td>penumpang</td>
                <td>
                    <input type="text" name="penumpang_id"
                     value="<?php echo $penumpang['penumpang_id']; ?>" required>
                </td>
            </tr>
            <tr>
                <td>nama</td>
                <td>
                    <input type="text" name="nama"
                     value="<?php echo $penumpang['nama']; ?>" required>
                </td>
            </tr>
             
            <tr>
                <td>kontak</td>
                <td>
                <input type="text" name="kontak"
                value="<?php echo $penumpang['kontak']; ?>" required>
                </td>
            </tr>
        </table>
        <button type="submit" name="simpan">Simpan</button>
    </form>
</body>
</html