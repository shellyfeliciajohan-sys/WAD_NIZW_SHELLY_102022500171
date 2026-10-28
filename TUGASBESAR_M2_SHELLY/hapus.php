<?php

include "koneksi.php";

$id = (int) $_GET['id'];

$query = "DELETE FROM buku WHERE id = $id";

if (mysqli_query($conn, $query)) {
    header("Location: katalog.php");
    exit;
} else {
    echo "Buku gagal dihapus";
}

?>