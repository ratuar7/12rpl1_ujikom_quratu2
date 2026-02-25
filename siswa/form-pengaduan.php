<?php
include '../config/koneksi.php';
$query = mysqli_query($koneksi, "SELECT * FROM tbkategori");
?>
<select name="kategori" id="kategori">
    <?php while ($data = mysqli_fetch_array($query)) { ?>

        <option value="<?php echo $data['idkategori']; ?>"><?php echo $data['nama_kategori']; ?></option>

    <?php } ?>
    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
    </head>

    <body>
        <form action="prngaduan-siswa.php" method="post">
            <label>Kategori</label>
            <select><br>
                <label>Lokasi</label><br>
                <input type="text" name="lokasi"><br>
                <label>Keterangan</label><br>
                <input type="text" name="keterangan"><br>

                <button type="submit">Kirim</button>
                </div>
        </form>
    </body>

    </html>