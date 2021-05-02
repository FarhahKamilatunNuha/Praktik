<?php
session_start();
$conn = mysqli_connect('localhost', 'root', '', 'aplikasi_penjualan');


function regisuser($data)
{

    global $conn;

    $nama = htmlspecialchars($data['nama']);
    $username = htmlspecialchars($data['username']);
    $password = htmlspecialchars($data['password']);

    mysqli_query($conn, "INSERT INTO user VALUES('', '$nama', '$username', '$password')");

    return mysqli_affected_rows($conn);
}


function tambahBarang($data)
{

    global $conn;

    $nama = htmlspecialchars($data['nama_barang']);
    $jenis = htmlspecialchars($data['jenis_barang']);
    $harga = htmlspecialchars($data['harga_satuan']);
    $stok = htmlspecialchars($data['stok_barang']);

    mysqli_query($conn, "INSERT INTO barang VALUES('', '$nama', '$jenis', '$harga', '$stok')");

    return mysqli_affected_rows($conn);
}

function terlelang($data)
{

    global $conn;

    $id_lelang = htmlspecialchars($data['id_lelang']);
    $id_barang = htmlspecialchars($data['id_barang']);
    $id_user = htmlspecialchars($data['id_user']);

    mysqli_query($conn, "INSERT INTO history_lelang VALUES('', '$id_lelang', '$id_barang', '$id_user')");

    return mysqli_affected_rows($conn);
}

function transaksi($data)
{

    global $conn;

    $id = htmlspecialchars($data['id_transakasi']);
    $tgl = htmlspecialchars($data['tgl_transakasi']);
    $id_user = htmlspecialchars($data['id_user']);
    $id_barang = htmlspecialchars($data['id_barang']);
    $harga = htmlspecialchars($data['harga_satuan']);
    $status = htmlspecialchars($data['status']);

    $query = "UPDATE lelang SET 
                id_barang = '$id_barang',
                tgl_transakasi = '$tgl',
                harga_satuan = '$harga',
                id_user = '$id_user',
                status = '$status'
                WHERE id_transakasi = '$id'
                ";

    mysqli_query($conn, $query);

    return mysqli_affected_rows($conn);
}

function editbarang($data)
{

    global $conn;

    $id = htmlspecialchars($data['Id_barang']);
    $nama = htmlspecialchars($data['Nama_barang']);
    $jenis = htmlspecialchars($data['Jenis_barang']);
    $harga = htmlspecialchars($data['harga_awal']);
    $stok = htmlspecialchars($data['stok_barang']);

    $query = "UPDATE barang SET
                Nama_barang = '$nama',
                Jenis_barang = '$jenis',
                harga_satuan = '$harga',
                Stok_barang = '$stok'
                WHERE Id_barang = '$id'
                ";

    mysqli_query($conn, $query);

    return mysqli_affected_rows($conn);
}


function hapusBarang($id)
{

    global $conn;

    mysqli_query($conn, "DELETE FROM barang WHERE Id_barang = $id");

    return mysqli_affected_rows($conn);
}


function hapusLelang($id)
{

    global $conn;

    mysqli_query($conn, "DELETE FROM penjualan_alat WHERE Id_transaksi = $id");

    return mysqli_affected_rows($conn);
}
