<?php

$title = 'Elektronik';

require '../layouts/header.php';

require 'navbar.php';

require '../../public/app.php';

$result = mysqli_query($conn, "SELECT * FROM penjualan_alat INNER JOIN barang ON penjualan_alat.id_barang = barang.id_barang");
$jumlah = mysqli_query($conn, "SELECT * FROM barang ORDER BY id_barang DESC LIMIT 1");

?>


<div class="container">
        <div class="mt-5">
                <h1 class="text-gray-900 mb-3">Website Penjualan Alat Elektronik</span></h1>
                <p class="mb-4">Website ini menyediakan barang Elektronik</p>
        </div>
</div>


<?php require '../layouts/footer.php'; ?>