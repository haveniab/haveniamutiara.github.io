<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Data</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <!-- Menyisipkan Javascript-->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col text-center">
                <br>
                    <h3>Tambah Data Wisata</h3>
                <br>
            </div>
        </div>

        
        <form method="GET" action="prosesEdit.php">
            <tr>
                <td> Id </td>
                <td> <input type="number" name="id"></td>
            </tr>
            <br><br>
            <tr>
                <td> Jenis Paket </td>
                <td> <input type="text" name="jenis_paket"></td>
            </tr>
            <br><br>
            <tr>
                <td> Harga </td>
                <td> <input type="number" name="price"></td>
            </tr>
            <br><br>
            <tr>
                <td> Keterangan </td>
                <td> <input type="text" name="keterangan"></td>
            </tr>
            <br><br>
            <tr>
                <td> <input type="submit" name="tambah" value="Edit Data"></td>
            </tr>
        </form>

    </div>
</body>
</html>