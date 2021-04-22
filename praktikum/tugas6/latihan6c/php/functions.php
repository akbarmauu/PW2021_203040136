<?php 
//fungsi untuk melakukan koneksi ke database
function koneksi() {
    $conn = mysqli_connect("localhost", "root", "");
    mysqli_select_db($conn, "pw_tubes_203040136");

    return $conn;
}

//function untuk melakukan query dan memasukannya ke dalam array
function query($sql)
{
    $conn = koneksi();
    $result = mysqli_query($conn, "$sql");
    $rows = [];
    while ($row = mysqli_fetch_assoc($result)) {
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

// fungsi untuk mengubah data
function ubah($data)
{
    $conn = koneksi();

    $id = htmlspecialchars($data['id']);
    $Foto = htmlspecialchars($data['Foto']);
    $Nama = htmlspecialchars($data['Nama']);
    $Status = htmlspecialchars($data['Status']);
    $Spesifikai = htmlspecialchars($data['Spesifikai']);
    $Harga = htmlspecialchars($data['Harga']);
    $Tahun = htmlspecialchars($data['Tahun']);

    $query = "UPDATE produk
              SET
                Nama = '$Nama', 
                Foto = '$Foto', 
                Status = '$Status', 
                Harga = '$Harga', 
                Spesifikai = '$Spesifikai',
                Tahun = '$Tahun'
                WHERE id = '$id'
                ";

    mysqli_query($conn, $query);

    return mysqli_affected_rows($conn);
}

// registrasi
function registrasi($data)
{
    $conn = koneksi();
    $username = strtolower(stripcslashes($data['username']));
    $password = mysqli_real_escape_string($conn, $data['password']);

    // cek username sudah ada atau belum
    $result = mysqli_query($conn, "SELECT username FROM user WHERE username = '$username' ");
    if (mysqli_fetch_assoc($result)) {
        echo "<script>
                alert('username sudah digunakan');
              </script>";
    }
// enkripsi password
    $password = password_hash($password, PASSWORD_DEFAULT);

// tambah user baru
    $query_tambah = "INSERT INTO user VALUES(null, '$username', '$password')";
    mysqli_query($conn, $query_tambah);

    return mysqli_affected_rows($conn);
}
?>