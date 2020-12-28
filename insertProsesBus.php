<?php
    include "koneksi.php";

    $id = $_GET['id'];
    $jenis_bus = $_GET['Jenis_Bus'];
    $harga = $_GET['harga'];
    $keterangan = $_GET['keterangan'];

    $sql = "INSERT INTO paketbus (id,jenis_bus,harga,keterangan)
            VALUES('$id','$jenis_bus','$harga','$keterangan')";

    if (mysqli_query($connect, $sql)){
        ?>
        Data berhasil ditambahkan, silahkan menuju
        <a href="crudbus.php"> Halaman HOME </a> 
        
        <?php
    }
    else{
        echo "Data gagal ditambahkan <br> ". mysqli_error($connect);
        ?>
        <a href="crudbus.php"> Halaman HOME </a> <?php
    }

    mysqli_close($connect);
?>