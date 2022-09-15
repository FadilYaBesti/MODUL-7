<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Dosen</title>
</head>
<body>
<?php
include '../connect.php';
    $query = "SELECT id_dosen, nama_dosen FROM dosen";
$result = mysqli_query($connect, $query);
?>
<h1>TAMBAH DATA MATAKULIAH</h1>
    <form action="create.php" method="post">
        Kode       : <input type="text" name="kode"><br>
        Mata Kuliah : <input type="text" name="nama_matkul"><br>
        SKS        : <input type="text" name="sks"><br>
        Semester   : <input type="text" name="semester"><br>
        <select name ="id_dosen" id="nama_dosen"><br>
            <option value="-">--Pilih salah satu--</option>
            <?php
            while ($data = mysqli_fetch_assoc($result)) {
                ?>
                <option value = "<?php echo $data['id_dosen']; ?>">
                <?php echo $data['nama_dosen']; ?>
            </option>
                <?php
            }
            ?>
        </select>
        <input type="submit" value="simpan" name="btnSimpan">
    </form>
</body>
</html>