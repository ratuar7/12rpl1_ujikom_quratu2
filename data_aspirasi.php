<h2>Data Pengaduan</h2>

<table border="1">
    <tr>
        <th>No</th>
        <th>ID Kategori</th>
        <th>Lokasi</th>
        <th>Keterangan</th>
        <th>Status</th>
    </tr>

    <?php
    include 'koneksi.php'; $no = 1;
    $query = mysqli_query($koneksi, "SELECT tbpengaduan. *, tbkategori.nama_kategori 
                                     FROM tbkategori 
                                     LEFT JOIN tbpengaduan ON 
                                     tbkategori.id_kategori = tbpengaduan.id_kategori");

    while ($data = mysqli_fetch_array($query)) {
    ?>
        <tr>
            <td><?php echo $no++; ?></td>
            <td><?php echo $data['id_kategori']; ?></td>
            <td><?php echo $data['lokasi']; ?></td>
            <td><?php echo $data['keterangan']; ?></td>
            <td><?php echo $data['status']; ?></td>
        </tr>

    <?php } ?>
</table>