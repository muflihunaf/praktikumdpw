<?php
    if (isset($_POST['submit'])) {
        $data = array(
            'ayah' => $_POST['ayah'],
            'ibu' => $_POST['ibu'],
            'kakak' => $_POST['kakak'],
            'saya' => $_POST['saya']
     );
     function tampil($nama)
     {
        $data = str_split($nama);
        $jumlah = count($data);
         for ($i=$jumlah-1; $i >= 0; $i--) {
             echo $data[$i];
         }
     }
     function vokal($nama)
     {
         $jumlahvokal = 0;
         $nonvokal = 0;
         $vokal = ['a','i','u','e','o','A','I','U','E','O'];
         $trim = str_replace(' ', '',$nama);
         $data = str_split($trim);
         for ($i=0; $i <count($data); $i++) {
             if (in_array($data[$i],$vokal)) {
                 $jumlahvokal++;
             }else{
                 $nonvokal++;
             }
         }
         echo 'Jumlah Huruf Vokal: ' . $jumlahvokal . '<br>';
         echo 'Jumlah Huruf Non Vokal: ' . $nonvokal;
     }
    }
    foreach ($data as $key => $nama) {
        $kata = explode(" ", $nama);
        $karakter = str_replace(' ' ,'',$nama);
        $huruf = str_split($karakter);
        ?>
        <h4><?= $key . ':' . $nama?></h4>
        <p>Jumlah Kata: <?= count($kata); ?></p>
        <p>Jumlah Huruf: <?= count($huruf); ?></p>
        <p>Nama Dibalik: <?php tampil($nama); ?></p>
        <p><?php vokal($nama); ?></p>
        <?php
    }
?>