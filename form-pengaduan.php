<body>
    <form action="prngaduan-siswa.php" method="post">
        <label>Kategori</label>
        <?php
        include 'koneksi.php';
        $query = mysqli_query($koneksi, "SELECT * FROM tbkategori");
        ?>
        <select name="kategori" id="kategori">
            <?php while ($data = mysqli_fetch_array($query)) { ?>

            <option value="<?php echo $data['id_kategori']; ?>"><?php echo $data['nama_kategori']; ?></option>
            
            <?php } ?>
        <select><br>
        <label>Lokasi</label><br>
        <input type="text" name="lokasi"><br>
        <label>Keterangan</label><br>
        <input type="text" name="keterangan"><br>

        <button type="submit">Kirim</button>
    </div>
</form>