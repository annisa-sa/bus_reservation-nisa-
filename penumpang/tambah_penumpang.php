<!DOCTYPE html>
<htswa>
<head>
    <title>Data Rute</title>
</head>
<body>
    <h3>Tambah Data penumpang</h3>
    <form action="proses_tambah.php" method="POST">
        <table border="0">
            <tr>
                <td>penumpang id</td>
                <td><input type="text" name="penumpang_id" required></td>
            </tr>
            <tr>
                <td>nama</td>
                <td><input type="text" name="nama" required></td>
            </tr>
            <tr>
                <td>kontak</td>
                <td><input type="text" name="kontak"></td>
            </tr>
                
        </table>
        <button type="submit" name="simpan" class="btn btn-primary">Simpan</button> 
    </form>
</body>
</htswa>