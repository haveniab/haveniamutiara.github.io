<?php
    include "koneksi.php";

    $id = $_GET['id'];
    $jenis_mobil = $_GET['Jenis_Mobil'];
    $harga = $_GET['harga'];
    $keterangan = $_GET['keterangan'];

    $sql = "INSERT INTO paketmobil(id,jenis_mobil,harga,keterangan)
            VALUES('$id','$jenis_mobil','$harga','$keterangan')";

    if (mysqli_query($connect, $sql)){
        ?>
        Data berhasil ditambahkan, silahkan menuju
        <a href="crudmobil.php"> Halaman HOME </a> 
        
        <?php
    }
    else{
        echo "Data gagal ditambahkan <br> ". mysqli_error($connect);
        ?>
        <a href="crudmobil.php"> Halaman HOME </a> <?php
    }

    mysqli_close($connect);
?>