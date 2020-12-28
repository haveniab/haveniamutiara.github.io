<!DOCTYPE html>
<html lang="en">
<head>

    <style type="text/css">

        body{
            background-color: #93B874;
        }
        table {
            border-collapse: collapse;
            border-spacing: 0;
            width: 110%;
            border: 2px solid #ddd;
        }

        th, td {
            text-align: left;
            padding: 16px;
        }

        tr:nth-child(even) {
            background-color: #f2f2f2;
        }

        a{
            background-color: salmon;
            color: #E9967A; 
            padding: 10px;
        }
    </style>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Paket Mobil</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <!-- Menyisipkan Javascript-->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>
<body>

<div class="header">
        <header>
            <?php include 'header.php';?>
        </header>
    </div>
    

    <div class="jumbotronmenu3">
        <div class="container">
          <br> <br> <br>     
        </div>

<!--Section menu-->

    <div class="menu3">
        <header>
            <?php include 'menu3.php';?>
        </header>
    </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col text-center">
                <br> <br>
                    <h3>DATA PAKET MOBIL</h3>
                    <h6><a href="tambahDataMobil.php" class="btn btn-primary">+ &nbsp; Tambah Data</a></h6>
                <br>
            </div>
        </div>
        
        <table>
            <tr>
                <th> Id </th>
                <th> Jenis Mobil </th>
                <th> Harga </th>
                <th> Keterangan </th>
                <th> Action</th>
            </tr>
            <?php
                include "koneksi.php";

                $query ="SELECT * FROM paketmobil";
                $result = mysqli_query($connect, $query);

                if (mysqli_num_rows($result)>0) {
                    while ($row = mysqli_fetch_array($result)) {
            ?>
            <tr>
                <td> <?php echo $row["Id"] ?> </td>
                <td> <?php echo $row["Jenis_Mobil"] ?> </td>
                <td> <?php echo $row["Harga"] ?> </td>
                <td> <?php echo $row["Keterangan"] ?> </td>
                <td>
                <a href="editDataMobil.php?id=<?php echo $row['Id']; ?>" class="btn btn-primary">Edit</a>
                <a href="prosesHapusMobil.php?id=<?php echo $row['Id']; ?>" onclick="return confirm('Anda yakin ingin hapus data ini?')" class="btn btn-primary">Hapus</a>
                </td>
            <?php 
                }
            }
            else {
                echo "0 result";
            }
            ?>
            </tr>
        </table>
    </div>

    <div class="footer page-top">
        <header>
            <?php include 'footer.php';?>
        </header>
    </div>
</body>
</html>
