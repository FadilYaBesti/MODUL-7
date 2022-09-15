<?php
include '../connect.php';

$nama_dosen = $_POST['nama_dosen'];
$Telp = $_POST['Telp'];

$query = "INSERT INTO dosen (nama_dosen, Telp)
            VALUES ('$nama_dosen', '$Telp')";

$result = mysqli_query($connect, $query);

$num = mysqli_affected_rows($connect);

if($num > 0){
    echo "Berhasil Tambah Data";
}else{
    echo "Gagal Tambah Data";
}
echo "<br><a href='read.php'>Lihat Data</a>"
?>