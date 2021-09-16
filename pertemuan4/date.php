<?php
    // date : untuk menampilkan tanggal dengan format tertentu
    // echo date("l, d-M-Y");

    // time
    // UNIX Timestamp / EPOCH Time
    // detik yang telah berlalu sejak 1 Januari 1970
    // echo time();

    // echo date("d M Y", time() - 60*60*24*100);


    // mktime : untuk membuat sendiri
    // mktime(0,0,0,0,0,0)
    // jam,menit,detik,bulan,tanggal,tahun
    // echo date("l", mktime(0,0,0,7,27,1998));


    // strtotime : memasukkan format tanggal maka munculnya detik
    echo date("l", strtotime("27 jul 1998"));
?>