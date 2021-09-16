<?php
    // array
    // variabel yang dapat menampung banyak nilai
    // array pada php dapat memiliki elemen dgn tipe data yang berbeda
    // pasangan antara key & value
    // key nya adalah index yang diawali dengan 0
    
    // membuat array pada php
    // cara lama
    $hari = array("Senin", "Selasa", "Rabu");

    // // cara baru
    $bulan = ["Januari", "Februari", "Maret"];
    $arr1 = [123, "Tulisan", false];

    // menampilkan array
    // var_dump
    // var_dump($hari);
    // echo "<br>";
    // print_r($bulan);


    // menampilkan 1 elemen pada array
    // echo "<br>";
    // echo $arr1[1];
    // echo "<br>";
    // echo $bulan[0];


    // menambahkan elemen pada array
    var_dump($hari);
    $hari[] = "Kamis";
    $hari[] = "Jum'at";
    echo "<br>";
    echo var_dump($hari);
?>