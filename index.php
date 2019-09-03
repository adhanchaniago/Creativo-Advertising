<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Creativo Advertisng</title>
    <!-- Favicon -->
    <link href="assets/img/logo.png" rel="icon" type="image/png"> 
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat:400,400i,700,700i,600,600i">
    <link rel="stylesheet" href="assets/fonts/ionicons.min.css">
    <link rel="stylesheet" href="assets/fonts/simple-line-icons.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/baguettebox.js/1.10.0/baguetteBox.min.css">
    <link rel="stylesheet" href="assets/css/Login-Form-Clean.css">
    <link rel="stylesheet" href="assets/css/Map-Clean.css">
    <link rel="stylesheet" href="assets/css/Navigation-with-Button.css">
    <link rel="stylesheet" href="assets/css/Registration-Form-with-Photo.css">
    <link rel="stylesheet" href="assets/css/smoothproducts.css">
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.3.1/dist/leaflet.css" integrity="sha512-Rksm5RenBEKSKFjgI3a41vrjkw4EVPlJ3+OiI65vTjIdo9brlAacEuKOiQ5OFh7cOI1bkDwLqdLw3Zg0cRJAAQ==" crossorigin=""/>
    <script src="https://unpkg.com/leaflet@1.3.1/dist/leaflet.js" integrity="sha512-/Nsx9X4HebavoBvEBuyp3I7od5tA0UzAxs+j83KgC8PU0kgB4XiK4Lfe4y4cgBtaRJQEIFCW+oC506aPT2L1zw==" crossorigin=""></script>
    <style>
    #mapid{
        width: 100%;
        height: 500px;
    }
    </style>
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
                        <li class="nav-item" role="presentation"><a class="nav-link" href="#kontak">Kontak</a></li>
                        <li class="dropdown nav-item"><a class="dropdown-toggle nav-link" data-toggle="dropdown" aria-expanded="false" href="#">Jasa&nbsp;</a>
                            <div class="dropdown-menu" role="menu"><a class="dropdown-item" role="presentation" href="website.php">Website</a><a class="dropdown-item" role="presentation" href="sosmed.php">Social Media</a><a class="dropdown-item" role="presentation" href="youtube.php">Youtube</a></div>
                        </li>
                    </ul><span class="navbar-text actions"> <a class="login" href="login.php">Log In</a><a class="btn btn-light action-button" role="button" href="daftar.php">Sign Up</a></span></div>
            </div>
        </nav>
    </div>
    <main class="page landing-page">
        <section class="clean-block clean-hero" style="background-image:url(&quot;assets/img/tech/image4.jpg&quot;);color:rgba(9, 162, 255, 0.85);">
            <div class="text">
                <h2>Creativo Advertising</h2>
                <p>adalah Perusahaan Marketing Communication yang bergerak dalam bidang periklanan via website maupun media sosial.<br>Creativo Advertising memiliki komitmen yang jelas dan tegas untuk berperan aktif dalam
                    dunia website di Indonesia.</p><a class="btn btn-outline-light btn-lg" role="button" href="#lainnya">Learn More</a></div>
        </section>
        <section class="clean-block clean-info dark" id="lainnya">
            <div class="container">
                <div class="block-heading"></div>
                <div class="row align-items-center">
                    <div class="col-md-6"><img class="img-thumbnail" src="assets/img/scenery/creativo.png"></div>
                    <div class="col-md-6">
                        <h3>Anda punya perusahaan yang masih baru?</h3>
                        <div class="getting-started-info">
                            <p>Promosikan perusahaan anda melalui&nbsp;<strong><span style="text-decoration: underline;">Website</span></strong>,&nbsp;<strong><span style="text-decoration: underline;">Social Media</span></strong>&nbsp;dan&nbsp;<strong><span style="text-decoration: underline;">Channel Youtube!.&nbsp;</span></strong>Bekerja
                                sama dengan kami, akan memudahkan anda untuk mempromosikan perusahaan anda. Anda tidak perlu repot - repot untuk membuat website, karena kami akan membuat website untuk perusahaan anda. Mulai dari domain, hosting hingga
                                perawatan dan pengisian konten. Selain itu, anda juga bisa menggunakan jasa kami untuk mempromosikan perusahaan atau produk anda di <strong>Social Media&nbsp;dan Youtube</strong>, Semua dari kami, mulai dari pembuatan konten
                                hingga pelayanan konsumen anda juga dari kami.</p>
                        </div><a class="btn btn-outline-primary btn-lg" role="button" href="login.php">Pesan Sekarang</a></div>
                </div>
            </div>
        </section>
        <section class="clean-block features">
            <div class="container">
                <div class="block-heading">
                    <h2 class="text-info">Fitur</h2>
                </div>
                <div class="row justify-content-center">
                    <div class="col-md-5 feature-box"><i class="icon-star icon"></i>
                        <h4>Cepat</h4>
                        <p>Memberikan pelayanan yang sesuai sebelum deadline</p>
                    </div>
                    <div class="col-md-5 feature-box"><i class="icon-pencil icon"></i>
                        <h4>Harga Murah</h4>
                        <p>Harga yang diberikan dijamin murah</p>
                    </div>
                    <div class="col-md-5 feature-box"><i class="icon-screen-smartphone icon"></i>
                        <h4>Responsif</h4>
                        <p>Feature yang ditampilkan mudah untuk diakses</p>
                    </div>
                    <div class="col-md-5 feature-box"><i class="icon-refresh icon"></i>
                        <h4>Dijamin Puas</h4>
                        <p>Merupakan misi utama kami</p>
                    </div>
                </div>
            </div>
        </section>
        <section class="clean-block slider dark">
            <div class="container">
                <div class="block-heading">
                    <h2 class="text-info">Karya Kami</h2>                    
                </div>
                <div class="carousel slide" data-ride="carousel" id="carousel-1">
                    <div class="carousel-inner" role="listbox">
                        <div class="carousel-item active"><img class="w-100 d-block" src="assets/img/scenery/pelindo3.png" alt="Slide Image"></div>
                        <div class="carousel-item"><img class="w-100 d-block" src="assets/img/scenery/grahakamal.png" alt="Slide Image"></div>
                        <div class="carousel-item"><img class="w-100 d-block" src="assets/img/scenery/oleolang.png" alt="Slide Image"></div>
                        <div class="carousel-item"><img class="w-100 d-block" src="assets/img/scenery/frontone.png" alt="Slide Image"></div>
                    </div>
                    <div><a class="carousel-control-prev" href="#carousel-1" role="button" data-slide="prev"><span class="carousel-control-prev-icon"></span><span class="sr-only">Previous</span></a><a class="carousel-control-next" href="#carousel-1" role="button"
                            data-slide="next"><span class="carousel-control-next-icon"></span><span class="sr-only">Next</span></a></div>
                    <ol class="carousel-indicators">
                        <li data-target="#carousel-1" data-slide-to="0" class="active"></li>
                        <li data-target="#carousel-1" data-slide-to="1"></li>
                        <li data-target="#carousel-1" data-slide-to="2"></li>
                    </ol>
                </div>
            </div>
        </section>
        <section class="clean-block about-us" id="kontak">
            <div class="container">
                <div class="block-heading">
                    <h2 class="text-info">Tentang Kami</h2>
                </div>
                <div class="row justify-content-center">
                    <div class="col-sm-6 col-lg-4">
                        <div class="card clean-card text-center"><img class="card-img-top w-100 d-block" src="assets/img/avatars/avatar.png">
                            <div class="card-body info">
                                <h4 class="card-title">Risky Alfriansyah</h4>
                                <div class="icons"><a href="#"><i class="icon-social-facebook"></i></a><a href="#"><i class="icon-social-instagram"></i></a><a href="#"><i class="icon-social-twitter"></i></a></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-lg-4">
                        <div class="card clean-card text-center"><img class="card-img-top w-100 d-block" src="assets/img/avatars/avatar.png">
                            <div class="card-body info">
                                <h4 class="card-title">Elys Sugiarti</h4>
                                <div class="icons"><a href="#"><i class="icon-social-facebook"></i></a><a href="#"><i class="icon-social-instagram"></i></a><a href="#"><i class="icon-social-twitter"></i></a></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-lg-4">
                        <div class="card clean-card text-center"><img class="card-img-top w-100 d-block" src="assets/img/avatars/avatar.png">
                            <div class="card-body info">
                                <h4 class="card-title">M Hendrik Wicaksono</h4>
                                <div class="icons"><a href="#"><i class="icon-social-facebook"></i></a><a href="#"><i class="icon-social-instagram"></i></a><a href="#"><i class="icon-social-twitter"></i></a></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
    <div class="container">
        <div class="intro">
            <h2 class="text-center">Lokasi Kami</h2>
        </div>
    </div>
    <div id="mapid"></div>
    <script>
        var map = L.map('mapid').setView([-7.135112,112.7134657], 50);
        L.tileLayer('https://api.tiles.mapbox.com/v4/{id}/{z}/{x}/{y}.png?access_token={accessToken}', {
            attribution: 'Map data &copy; <a href="http://openstreetmap.org">OpenStreetMap</a> contributors, <a href="http://creativecommons.org/licenses/by-sa/2.0/">CC-BY-SA</a>, Imagery © <a href="http://mapbox.com">Mapbox</a>',
            maxZoom: 18,
            id: 'mapbox.streets',
            accessToken: 'pk.eyJ1Ijoid2ljYWtoZW5kcmlrIiwiYSI6ImNqejB1aXQ1ejAwdWwzYm8xY3Iwd2Vncm8ifQ.hqMfI1Y0XrRp0-YndIVISA'
        }).addTo(map);
    </script>
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