<?php 
//fungsi untuk melakukan koneksi ke database
function koneksi() {
    $conn = mysqli_connect("localhost", "root", "");
    mysqli_select_db($conn, "pw_tubes_203040136");

    return $conn;
}

//function untuk melakukan query dan memasukannya ke dalam array
function query($sql) {
    $conn = koneksi();
    $result = mysqli_query($conn, $sql);
    $row = [];
    while ($row = mysqli_fetch_assoc($result) ) {
        $rows[] = $row;
    }
    return $rows;
}


//fungsi untuk menambahkan data di dalam database
function tambah($data)
{
    $conn = koneksi();

    $Foto = htmlspecialchars($data['Foto']);
    $Nama = htmlspecialchars($data['Nama']);
    $Status = htmlspecialchars($data['Status']);
    $Spesifikai = htmlspecialchars($data['Spesifikai']);
    $Harga = htmlspecialchars($data['Harga']);
    $Tahun = htmlspecialchars($data['Tahun']);

    $query = "INSERT INTO produk
                    VALUES
                    (null, '$Foto', '$Nama', '$Status', '$Spesifikai', '$Harga', '$Tahun')";
    mysqli_query($conn, $query);

    return mysqli_affected_rows($conn);
}

// fungsi untuk menghapus data
function hapus($id)
{
    $conn = koneksi();
    mysqli_query($conn, "DELETE FROM produk WHERE id = $id");

    return mysqli_affected_rows($conn);
}
?>