<?php

    include "koneksi.php";

    $sql = "INSERT INTO user(id,nama,role,availability,age ,location ,years_experience,email) VALUES('','Emah Khujaemah','Software Developer','Full Time','21','Indramayu, Jawa Barat','2','khuza.emah24@gmail.com')" ;

    if ($koneksi->query($sql) == TRUE){
        echo "Data Berhasil dimasukan";
    }else {
        echo "Data gagal dimasukan";
    }
?>