<?php
include '../connect.php';

$kode = $_GET['kode'];

$query = "SELECT kode, nama_matkul, sks, semester, matakuliah.id_dosen FROM matakuliah LEFT JOIN dosen USING(id_dosen) WHERE kode = '$kode'";

$result = mysqli_query($connect, $query);
$data_dosen =mysqli_fetch_assoc($result);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Document</title>
</head>
<body>
hi>Ubah Data Matakuliah</h1>

<form action="update.php" method="post">

<table> <tr>

<td><label for="kode">Kode</label> </td> <td>:</td> <td> <input type="text" name="kode" id="kode" readonly value="<?php echo $data_dosen['kode']; ?>" ></td>

</tr>

<tr>

<td><label for="nama_matkul">Matakuliah</label> </td> <td> : </td> <td> <input type="text" name="nana_matkul" ide="nama_matkul" value="<?php echo $data_dosen['nama_matkul']; ?>" > </td>

</tr>

<tr> <td><label for="sks">SKS</label> </td> <td> : </td>

<td> <input type="number" name="sks" id="sks" value="<?php echo $data_dosen['sks']; ?>"  > </td>

</tr>

<tr>

<td><label for="semester">Semester</label></td> <td> : </td>

<td> <input type="number" name="semester" id="semester" value="<?php echo $data_dosen['semester']; ?>" > </td>

</tr>

<tr> <td><label for="nama_dosen">Dosen Pengajar</label></td> <td> : </td>
<select name ="id_dosen" id="nama_dosen"><br>
            <option value="-">--Pilih salah satu--</option>
            <?php
            $query = "SELECT id_dosen, nama_dosen FROM dosen";
            $result = mysqli_query($connect,$query);
            while ($data = mysqli_fetch_assoc($result)) { ?>
                <option value = "<?php echo $data['id_dosen']; ?>">
                <?php echo $data['nama_dosen'];
                ?>
                </option>
                <?php
            }
            ?>
        </select>
</tr>

<tr>

<td></td> <td></td> <td><input type="submit" value="Simpan"></td>

</tr>

</form> </table>

</body>,
</body>
</html>