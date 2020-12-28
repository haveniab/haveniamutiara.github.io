<?php
    include "koneksi.php";

    $id = $_GET['id'];
    $jenis_mobil = $_GET['jenis_mobil'];
    $harga = $_GET['price'];
    $keterangan = $_GET['keterangan'];

    $query="UPDATE paketmobil SET jenis_mobil='$jenis_mobil', harga='$harga',keterangan='$keterangan'
    WHERE id='$id'";
	$result = mysqli_query($connect, $query);

    if($result){
        echo "Berhasil update data";
?>
    <a href="crudmobil.php"> Lihat data </a>
<?php
    }
    else{
        echo "Gagal update data" . mysqli_error($connect);
    }
?>