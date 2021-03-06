<?php

//$title = 'Terlelang';

require '../layouts/header.php';

require 'navbar.php';

require '../../public/app.php';

$result = mysqli_query($conn, "SELECT * FROM ((history_lelang 
                        INNER JOIN barang ON history_lelang.id_barang = barang.id_barang) 
                            INNER JOIN user ON history_lelang.id_user = user.id_user) 
                            WHERE id_history")

?>


<div class="p-5">
    <div class="container">
        <h3 class="text-dark">Barang Terjual</h3>
        <table class="table table-bordered shadow-sm">
            <thead class="text-center">
                <tr>
                    <th scope="col">No</th>
                    <th scope="col">Pembeli</th>
                    <th scope="col">Nama Barang</th>
                    <th scope="col">Harga</th>
                </tr>
            </thead>
            <tbody>
                <?php $i = 1; ?>
                <?php while ($row = mysqli_fetch_assoc($result)) : ?>
                    <tr class="text-center">
                        <th scope="row" class="text-center"><?= $i++; ?></th>
                        <td class="text-uppercase"><?= $row['nama']; ?></td>
                        <td class="text-uppercase"><?= $row['nama_barang']; ?></td>
                        <td><?= $row['penawaran_harga']; ?></td>
                    </tr>
                <?php endwhile; ?>
            </tbody>
        </table>
    </div>
</div>



<?php require '../layouts/footer.php'; ?>