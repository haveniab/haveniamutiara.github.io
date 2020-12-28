<?php
    include "koneksi.php";

    $id = $_GET['id'];
    $jenis_paket = $_GET['jenis_paket'];
    $harga = $_GET['price'];
    $keterangan = $_GET['keterangan'];

    $query="UPDATE paketwisata SET jenis_paket='$jenis_paket', harga='$harga',keterangan='$keterangan'
    WHERE id='$id'";
	$result = mysqli_query($connect, $query);

    if($result){
        echo "Berhasil update data";
?>
    <a href="crudwisata.php"> Lihat data </a>
<?php
    }
    else{
        echo "Gagal update data" . mysqli_error($connect);
    }
?>