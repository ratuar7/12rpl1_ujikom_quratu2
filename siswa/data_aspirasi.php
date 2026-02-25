<?php
include '../config/koneksi.php';
$no = 1;

$query = mysqli_query($koneksi, "
    SELECT tbpengaduan.*, tbkategori.nama_kategori
    FROM tbpengaduan
    LEFT JOIN tbkategori 
        ON tbpengaduan.id_kategori = tbkategori.idkategori
");

while ($data = mysqli_fetch_assoc($query)):
    ?>
    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
    </head>

    <body>
        <h2>Data Pengaduan</h2>

        <table border="1" cellpadding="10" cellspacing="0">
            <tr>
                <th>No</th>
                <th>ID Kategori</th>
                <th>Nama Kategori</th>
                <th>Lokasi</th>
                <th>Keterangan</th>
                <th>Status</th>
            </tr>


            <tr>
                <td>
                    <?= $no++; ?>
                </td>
                <td>
                    <?= $data['id_kategori']; ?>
                </td>
                <td>
                    <?= $data['nama_kategori']; ?>
                </td>
                <td>
                    <?= $data['lokasi']; ?>
                </td>
                <td>
                    <?= $data['keterangan']; ?>
                </td>
                <td>
                    <?= $data['status']; ?>
                </td>
            </tr>

        <?php endwhile; ?>

    </table>
</body>

</html>