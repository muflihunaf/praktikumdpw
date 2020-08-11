<?php
    $arr1 = array(
        'Nama' => "Muflihun Abdul Firmansyah",
        'NIM' => "190411100019",
        "Alamat" => "Pacet Made",
        "Tanggal Lahir" => "19 November 2000",
    );
    foreach ($arr1 as $x => $isi) {
        ?>
        <h3><?= $x ?>: <?= $isi ?>  </h3>
        <?php
    }
?>