<?php
include("../koneksi.php");
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Data penumpang</title>
    <style>
        
        table, th, td {
            border: 1px solid black;
            border-collapse: collapse;
            padding: 10px;
        }
    </style>
</head>
<body>
    <h2>Data penumpang</h2>
    <?php if (isset($_SESSION['notifikasi'])): ?>
        <p><?php echo $_SESSION['notifikasi']; ?></p>
        <?php unset ($_SESSION['notifikasi']); ?>
        <?php endif; ?>
        <table>
            <thead>
                <tr align="center">
                    <th>#</th>
                    <th>penumpang</th>
                    <th>nama</th>
                    <th>kontak</th>
                    <th><a href="tambah_penumpang.php">Tambah Data penumpang</a></th>
                </tr>
            </thead>
            <tbody>
                <?php
                $no = 1; 
                $query = $db->query("SELECT * FROM penumpang");
                while($penumpang = $query->fetch_assoc()){
                    ?>
         <tr>
                
        <td><?php echo $no++ ?></td>
        <td><?php echo $penumpang['penumpang_id'] ?></td>
        <td><?php echo $penumpang['nama'] ?></td>
        <td><?php echo $penumpang['kontak'] ?></td>
        </td>
        <td align="center">
<a href="edit_penumpang.php?id=<?php echo $penumpang ['penumpang_id'] ?>">Edit</a>
 <a onclick="return confirm('Anda yakin ingin menghapus data?')"
  href="hapus_penumpang.php?id=<?php echo $penumpang['penumpang_id'] ?>">Hapus</a>
 </td>
                </tr>
                <?php
                }
                ?>
                </tbody>
        </table>
         <p>Total: <?php echo mysqli_num_rows($query)?></p>
</body>
</html>