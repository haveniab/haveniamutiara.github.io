<?php
    include "koneksi.php";

    $id = $_GET['id'];
    $jenis_paket = $_GET['jenis_paket'];
    $harga = $_GET['harga'];
    $keterangan = $_GET['keterangan'];

    $sql = "INSERT INTO paketwisata (id,jenis_paket,harga,keterangan)
            VALUES('$id','$jenis_paket','$harga','$keterangan')";

    if (mysqli_query($connect, $sql)){
        ?>
        Data berhasil ditmbahkan, silahkan menuju
        <a href="crudwisata.php"> Halaman HOME </a> <?php
    }
    else{
        echo "Data gagal ditambahkan <br>" . mysqli_error($connect);
    }

    mysqli_close($connect);
?>