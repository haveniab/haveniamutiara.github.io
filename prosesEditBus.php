<?php
    include "koneksi.php";

    $id = $_GET['id'];
    $jenis_bus = $_GET['jenis_bus'];
    $harga = $_GET['harga'];
    $keterangan = $_GET['keterangan'];

    $query="UPDATE paketbus SET jenis_bus='$jenis_bus',harga='$harga',keterangan='$keterangan'
    WHERE id='$id'";
	$result = mysqli_query($connect, $query);

    if($result){
        echo "Berhasil update data";
?>
    <a href="crudbus.php"> Lihat data </a>
<?php
    }
    else{
        echo "Gagal update data" . mysqli_error($connect);
    }
?>