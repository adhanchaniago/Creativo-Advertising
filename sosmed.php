<?php

require 'functions.php';
$result = mysqli_query($conn, "SELECT *
                                FROM jasa
                                WHERE kategori_Jasa = 2");
?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Jasa Sosmed</title>
    <!-- Favicon -->
    <link href="assets/img/logo.png" rel="icon" type="image/png"> 
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat:400,400i,700,700i,600,600i">
    <link rel="stylesheet" href="assets/fonts/ionicons.min.css">
    <link rel="stylesheet" href="assets/fonts/simple-line-icons.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/baguettebox.js/1.10.0/baguetteBox.min.css">
    <link rel="stylesheet" href="assets/css/Login-Form-Clean.css">
    <link rel="stylesheet" href="assets/css/Navigation-with-Button.css">
    <link rel="stylesheet" href="assets/css/Registration-Form-with-Photo.css">
    <link rel="stylesheet" href="assets/css/smoothproducts.css">
    <style>
    body{
        margin-top:70px;
    }
    @media(max-width: 768px){
    body{
        margin-top:70px;
        }
    }
    </style>
</head>

<body>
    <div>
        <nav class="navbar navbar-light navbar-expand-md navigation-clean-button fixed-top">
            <div class="container"><a class="navbar-brand" href="index.php">Cretivo Advertising</a><button data-toggle="collapse" class="navbar-toggler" data-target="#navcol-1"><span class="sr-only">Toggle navigation</span><span class="navbar-toggler-icon"></span></button>
                <div class="collapse navbar-collapse"
                    id="navcol-1">
                    <ul class="nav navbar-nav mr-auto">
                        <li class="nav-item" role="presentation"><a class="nav-link" href="login.php">Pemesanan</a></li>
                        <li class="nav-item" role="presentation"><a class="nav-link" href="index.php#kontak">Kontak</a></li>
                        <li class="dropdown nav-item"><a class="dropdown-toggle nav-link" data-toggle="dropdown" aria-expanded="false" href="#">Jasa&nbsp;</a>
                            <div class="dropdown-menu" role="menu"><a class="dropdown-item" role="presentation" href="website.php">Website</a><a class="dropdown-item" role="presentation" href="sosmed.php">Social Media</a><a class="dropdown-item" role="presentation" href="youtube.php">Youtube</a></div>
                        </li>
                    </ul><span class="navbar-text actions"> <a class="login" href="login.php">Log In</a><a class="btn btn-light action-button" role="button" href="daftar.php">Sign Up</a></span></div>
            </div>
        </nav>
    </div>
    <main class="page landing-page">
        <section class="clean-block clean-info dark">
            <div class="container">
                <div class="block-heading"></div>
                <div class="row align-items-center">
                    <div class="col-md-6"><img class="img-thumbnail" src="assets/img/sosmed.png"></div>
                    <div class="col-md-6">
                        <h3><strong>Promosikan Perusahaan atau Produk anda di Media Sosial</strong><br></h3>
                        <div class="getting-started-info">
                            <p>Media Sosial dapat memudahkan Perusahaan dan Produk anda dikenal MasyarakatSetiap orang tentu memiliki setidaknya satu bahkan dua akun media sosial, dengan media sosial anda dapat lebih mudah memasarkan Perusahaan dan produk
                                anda, Bahkan juga Membidik Target yang anda inginkan.&nbsp;<br><br>Misal, anda menjual Baju distro untuk anak anak muda, dengan menggunakan Fb Ads kita dapat membuat produk anda dilihat oleh ribuan bahkan jutaan akun Fb
                                yang Penggunanya berumur 13-19 Tahun. Tentu ini akan memudahkan anda memasarkan produk anda<br></p>
                        </div><a class="btn btn-outline-primary btn-lg" role="button" href="login.php">Pesan Sekarang</a></div>
                </div>
            </div>
        </section>
        <section class="clean-block features">
            <div class="container">
                <div class="block-heading">
                    <h2 class="text-info">Daftar Harga</h2>
                </div>
                <div class="table-responsive">
                    <table class="table">
                        <thead>
                            <tr>
                                <th>Pembelian</th>
                                <th>Keterangan</th>
                                <th>Harga</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php while( $row = mysqli_fetch_assoc($result)) : ?> 
                            <tr>
                                <td><?= $row["namaJasa"]; ?></td>
                                <td><?= $row["keterangan"]; ?></td>
                                <td>Rp.<?= $row["harga"]; ?></td>
                            </tr>
                            <?php endwhile; ?> 
                        </tbody>
                    </table>
                </div>
            </div>
        </section>
    </main>
    <footer class="page-footer dark">
        <div class="footer-copyright">
            <p>© 2019 Copyright Creativo Advertising</p>
        </div>
    </footer>
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/baguettebox.js/1.10.0/baguetteBox.min.js"></script>
    <script src="assets/js/smoothproducts.min.js"></script>
    <script src="assets/js/theme.js"></script>
</body>

</html>