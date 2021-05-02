<?php

$title = 'Edit Barang';

require '../layouts/header.php';

require 'navbar.php';

require '../../public/app.php';

$id = $_GET['Id_barang'];
$result = mysqli_query($conn, "SELECT * FROM barang WHERE Id_barang = $id");


if (isset($_POST['submit'])) {

    if (editbarang($_POST) > 0) {
        $sukses = true;
    } else {
        $error = true;
    }
}

?>
<div class="d-flex justify-content-center">
    <div class="card w-50 shadow">
        <?php if (isset($sukses)) : ?>
            <div class="alert bg-success text-light" role="alert">
                <div class="row">
                    <div class="col">
                        <div class="mt-2">
                            Data Barang Berhasil Di Ubah!
                        </div>
                    </div>
                    <div class="col">
                        <div class="d-flex justify-content-end">
                            <a href="barang.php" class="alert-link btn btn-primary">Kembali</a>
                        </div>
                    </div>
                </div>
            </div>
        <?php endif; ?>
        <div class="card-body">
            <form action="" method="post">
                <?php while ($row = mysqli_fetch_assoc($result)) : ?>
                    <!-- hidden -->
                    <input type="hidden" name="Id_barang" value="<?= $row['Id_barang']; ?>">
                    <input type="hidden" name="tgl" value="<?= $row['tgl']; ?>">
                    <!-- endhidden -->
                    <div class="form-group">
                        <label for="nama">Nama Barang</label>
                        <input type="text" id="Nama" name="Nama_barang" value="<?= $row['Nama_barang']; ?>" class="form-control">
                    </div>
                    <div class="form-group">
                    <div class="form-group">
                        <label for="jenis">Jenis Barang</label>
                        <input type="text" id="Jenis" name="Jenis_barang" value="<?= $row['Jenis_barang']; ?>" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="harga">Harga</label>
                        <input type="number" id="harga" name="harga_awal" value="<?= $row['harga_awal']; ?>" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="stok" class="form-label">Stok Barang</label>
                        <input type="number" id="stok" name="Stok_barang" value="<?= $row['Stok_barang']; ?>" class="form-control">
                    </div>
                    <button class="btn btn-primary" type="submit" name="submit">Submit</button>
                <?php endwhile; ?>
            </form>
        </div>
    </div>
</div>



<?php require '../layouts/footer.php'; ?>