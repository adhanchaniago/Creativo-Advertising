<?php

require '../functions.php';
$id = $_GET["id"];

if ( pesananselesai($id) > 0) {
    echo "
        <script>
            alert('pesanan berhasil selesai!');
            document.location.href = 'pemesanan.php';
        </script>
    "; 
} else {
    echo "
        <script>
            alert('pesanan gagal selesai!');
            document.location.href = 'pemesanan.php';
        </script>
    ";
}
?>