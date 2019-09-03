<?php
$conn = mysqli_connect("localhost", "id9352934_hendrik", "password123", "id9352934_creativo");
$result = mysqli_query($conn, "SELECT jasa.id_jasa, kj.ket_katJasa, jasa.namaJasa, jasa.keterangan, jasa.harga
                                FROM jasa, kategoriJasa as kj
                                WHERE jasa.kategori_Jasa = kj.id_katJasa");

function query($query) {
    global $conn;
    $result = mysqli_query($conn, $query);
    $rows = [];
    while( $row = mysqli_fetch_assoc($result) ) {
        $rows[] = $row;   
    }
    return $rows;
}

function registrasi($data) {
    global $conn;

    $username = strtolower(stripslashes($data["username"]));
    $email = stripslashes($data["email"]);
    $jk = $data["jeniskelamin"];
    $noTelp = $data["noTelp"];
    $password = mysqli_real_escape_string($conn, $data["password"]);
    $password_repeat = mysqli_real_escape_string($conn, $data["password-repeat"]);

    //cek username tersedia
    $result = mysqli_query($conn, "SELECT username FROM users WHERE username = '$username'");
    
    if ( mysqli_fetch_assoc($result)) {
        echo "<script>
                alert('username sudah terdaftar!')
                </script>";
        return false;
    }

    //cek konfirmasi password
    if ( $password !== $password_repeat) {
        echo "<script>
                alert('konfirmasi password tidak sesuai!');
            </script>"; 
        return false;
    }

    //enkripsi password
    $password = password_hash($password, PASSWORD_DEFAULT);

    //menambahkan user ke database
    mysqli_query($conn, "INSERT INTO users VALUES(NULL, '$username', '$email', '$password', $jk, '$noTelp', 2)");

    return mysqli_affected_rows($conn);
}

function tambahjasa($data) {
    global $conn;

    $namajasa = htmlspecialchars($data["namajasa"]);
    $kategorijasa = htmlspecialchars($data["kategorijasa"]);
    $keterangan = htmlspecialchars($data["keterangan"]);
    $harga = htmlspecialchars($data["harga"]);

    //menambahkan user ke database
    mysqli_query($conn, "INSERT INTO jasa VALUES(NULL, '$kategorijasa', '$namajasa', '$keterangan', '$harga')");

    return mysqli_affected_rows($conn);
}

function hapususer($id) {
    global $conn;

    mysqli_query($conn, "DELETE FROM users WHERE id_user = $id");

    return mysqli_affected_rows($conn);
}

function hapusjasa($id) {
    global $conn;

    mysqli_query($conn, "DELETE FROM jasa WHERE id_jasa = $id");

    return mysqli_affected_rows($conn);
}

function pesananditerima($id) {
    global $conn;

    mysqli_query($conn, "UPDATE pemesanan SET
                            id_status = 2 WHERE id_pemesanan = $id");

    return mysqli_affected_rows($conn);
}

function pesananselesai($id) {
    global $conn;

    mysqli_query($conn, "UPDATE pemesanan SET
                            id_status = 3 WHERE id_pemesanan = $id");

    return mysqli_affected_rows($conn);
}


function ubahuser($data) {
    global $conn;

    $id = $data["id"];
    $username = htmlspecialchars($data["username"]);
    $email = htmlspecialchars($data["email"]);
    $jeniskelamin = htmlspecialchars($data["jeniskelamin"]);
    $notelp = htmlspecialchars($data["notelp"]);
    $usertype = htmlspecialchars($data["usertype"]);

    //menambahkan user ke database
    $query = "UPDATE users SET
                username = '$username',
                email = '$email',
                jenisKelamin = $jeniskelamin,
                noTelp = '$notelp',
                usertype = '$usertype'
                    
                WHERE id_user = $id
                    
                ";

    mysqli_query($conn, $query);
    return mysqli_affected_rows($conn);
}

function ubahjasa($data) {
    global $conn;

    $id = $data["id"];
    $namajasa = htmlspecialchars($data["namajasa"]);
    $kategorijasa = htmlspecialchars($data["kategorijasa"]);
    $keterangan = htmlspecialchars($data["keterangan"]);
    $harga = htmlspecialchars($data["harga"]);

    //merubah jasa di database
    $query = "UPDATE jasa SET
                namaJasa = '$namajasa',
                kategori_Jasa = $kategorijasa,
                keterangan = '$keterangan',
                harga = '$harga'
                    
                WHERE id_jasa = $id
                    
                ";

    mysqli_query($conn, $query);
    return mysqli_affected_rows($conn);
}

function pemesanan($data) {
    global $conn;
    global $result;

    $username = $data["user"];
    $totalharga = htmlspecialchars($data["total"]);
    $id = rand(11111111,99999999);

    //menambahkan pemesanan ke database
    mysqli_query($conn, "INSERT INTO pemesanan VALUES($id, $username, NOW(), $totalharga, 1)");

    $i = 1;
    while( $row = mysqli_fetch_assoc($result)) {
       $jasa[$i] = $data["jasa$i"];
       $jumlah[$i] = $data["jumlah$i"];
       $harga[$i] = $data["harga$i"];

       mysqli_query($conn, "INSERT INTO detil_pemesanan VALUES($id, $jasa[$i], $jumlah[$i], $jumlah[$i]*$harga[$i])");
       $i++;
    }

    return mysqli_affected_rows($conn);
}
?>