<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desain Website</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <?php
    include 'header.php';
    include 'menu.php';
    ?>
    <div class="row">
        <div class="leftcolumn">
            <div class="card">
                <h2>Selamat Datang</h2>
                <p>Ini Adalah Halaman Beranda Website Silahkan Pilih Menu untuk mengakses halaman web</p>
                <div class="fakeimg" style="height: 200px;">Gambar</div>
                <p>Deskripsi Gambar</p>

            </div>
        </div>
        <?php
        include 'konten_kanan.php';
        ?>
    </div>

    <?php include 'footer.php'; ?>
</body>

</html>