<?php

require 'functions.php';

if( isset($_POST["register"]) ) {

    if( registrasi($_POST) > 0 ) {
        echo "<script>
                alert('user baru berhasil ditambahkan!');
            </script>";
    } else {
        echo mysqli_error($conn);
    }
}
?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Register</title>
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
    <div class="register-photo">
        <div class="form-container">
            <div class="image-holder"></div>
            <form method="post">
                <h2 class="text-center"><strong>Create</strong> an account.</h2>
                <div class="form-group"><input class="form-control" type="text" name="username" placeholder="Username" required></div>
                <div class="form-group"><input class="form-control" type="email" name="email" placeholder="Email" required></div>
                <div class="form-group">
                    <select name="jeniskelamin" class="form-control">
                        <option>Jenis Kelamin</option>
                        <?php $sql = mysqli_query($conn, "SELECT * FROM jeniskelamin ORDER BY id_jk ASC"); ?>
                        <?php if(mysqli_num_rows($sql) != 0) : ?>
                        <?php while($row = mysqli_fetch_assoc($sql)) : ?>
                            <option value="<?= $row["id_jk"]; ?>"><?= $row["id_jk"]; ?>. <?= $row["ket_jk"]; ?></option>
                        <?php endwhile; ?>
                        <?php endif; ?>
                    </select>
                </div>
                <div class="form-group"><input class="form-control" type="text" name="noTelp" placeholder="Nomor Telepon" required></div>
                <div class="form-group"><input class="form-control" type="password" name="password" placeholder="Password" required></div>
                <div class="form-group"><input class="form-control" type="password" name="password-repeat" placeholder="Password (repeat)" required></div>
                <div class="form-group">
                    <div class="form-check"><label class="form-check-label"><input class="form-check-input" type="checkbox" required>I agree to the license terms.</label></div>
                </div>
                <div class="form-group"><button class="btn btn-primary btn-block" type="submit" name="register">Register</button></div><a class="already" href="#">You already have an account? Login here.</a></form>
        </div>
    </div>
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