<?php
    // Variable user
    $nama = 'restu';
    $umur = 18;
    $berat = 52;

    echo 'Nama saya '.$nama.' umur saya '.$umur.' berat saya '.$berat;
    echo "<br />";
    echo "<h1 style='color: red'>Nama saya $nama, umur saya $umur, berat saya $berat</h1>";
    echo "<br />";

    // Variable sistem
    echo 'Document Root '.$_SERVER["DOCUMENT_ROOT"];
    echo "<br />";

    // Variable konstans
    define('makanan', 'sushi');
    echo makanan;
?>
