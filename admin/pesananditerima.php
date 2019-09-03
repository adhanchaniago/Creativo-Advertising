<?php

require '../functions.php';
$id = $_GET["id"];

if ( pesananditerima($id) > 0) {
    echo "
        <script>
            alert('pesanan berhasil diterima!');
            document.location.href = 'pemesanan.php';
        </script>
    "; 
} else {
    echo "
        <script>
            alert('pesanan gagal dihapus!');
            document.location.href = 'pemesanan.php';
        </script>
    ";
}
?>