<?php
    $arr1 = array(
        'Muflihun' => array('190411100019','Pacet'),
        'Firman' => array('190411100119','Made'),
        'Abdul' => array('190411100109','Mojokerto'),
        'Syah' => array('190411100191','Jawa Timur'),
        'Yoi' => array('1904111000102','Indonesia'),
    );
    foreach ($arr1 as $x => $value) {
        ?>
        <span>Nama: <?= $x ?> <br> Nim: <?= $value[0] ?> <br> Alamat: <?= $value[1] ?> </span><br><br>
        <?php
    }
?>