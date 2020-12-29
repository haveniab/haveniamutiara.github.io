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
            <style>
                #id, #jenismobil, #harga, #keterangan {
                border: 1px solid #5A9AD4;
                width: 5cm;
                height: 30px;
                }

                #id {
                margin-left: 110px;
                }

                #jenismobil {
                    margin-left: 50px;
                    }

                #harga {
                margin-left: 85px;
                }

                #keterangan {
                margin-left:50px;
                }
            </style>
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
            </div>
            <!--Section menu-->

            <div class="menu3">
                <header>
                    <?php include 'menu3.php';?>
                </header>
            </div>
            <div class="container page-top">
                <div class="editData">
                    <div class="check">
                        <h3>EDIT DATA MOBIL</h3>
                        <br>

                        <form method="GET" action="prosesEditMobil.php">
                            <p class="id">Id <input id="id" name="id" type="text"></p>
                            <br>
                            <p class="jenismobil">Jenis Mobil <input id="jenismobil" name="Jenis_Mobil" type="text" required></p>
                            <br>
                            <p class="harga">Harga <input id="harga" name="harga" type="number" required></p>
                            <br>
                            <p class="keterangan">Keterangan <input id="keterangan" name="keterangan" type="text" required></p>
                            <br>       
                            <tr>
                                <td> <input type="submit" name="tambah" value="Edit Data"></td>
                            </tr>
                        </form>
                    </div>
                </div>
            </div>
            <br> <br> <br> <br> <br> <br> <br> <br> <br> <br>
            <div class="footer page-top">
                <header>
                    <?php include 'footer.php';?>
                </header>
            </div>
        </body>
</html>