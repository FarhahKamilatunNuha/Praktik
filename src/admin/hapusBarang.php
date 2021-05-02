<?php

$title = 'Hapus Barang';

require '../layouts/header.php';

require 'navbar.php';

require '../../public/app.php';

$id = $_GET['Id_barang'];

if (hapusbarang($id) > 0) {
    $sukses = true;
} else {
    $error = true;
}

?>

<?php if (isset($sukses)) : ?>

    <div class="d-flex justify-content-center py-5 mt-3">
        <div class="card shadow bg-success">
            <div class="card-body">
                <h4 class="text-center text-light">Barang Berhasil di Hapus!</h4>
                <hr>
                <div class="button mt-3">
                    <a href="barang.php" class="btn btn-primary text-light shadow">OK!</a>
                </div>
            </div>
        </div>
    </div>

<?php endif; ?>



<div class="d-flex justify-content-center py-5 mt-3">
    <div class="card shadow bg-light border-">
        <div class="card-body">
            <h4 class="text-center text-dark text-capitalize">maaf barang telah di lelang</h4>
            <p class="font-italic">*Anda harus menghapus lelangnya terlebih dahulu</p>
            <hr>
            
            <div class="button mt-3">
                <a href="barang.php" class="btn btn-primary text-light shadow">OK!</a>
            </div>
        </div>
    </div>
</div>








<?php require '../layouts/footer.php'; ?>