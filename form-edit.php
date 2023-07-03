<?php
include 'koneksi.php';
$id = $_GET['id_pendaftaran'];
$pendaftaran = mysqli_query($koneksi, "select * from pendaftaran where id_pendaftaran='$id'");
$row = mysqli_fetch_array($pendaftaran);
$agama = array('ISLAM', 'KRISTEN', 'KATOLIK', 'HINDU', 'BUDDHA', 'KONGHUCU');
function active_radio_button($value,$input){
    $result = $value==$input?'checked':'';
    return $result;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Edit Data Pendaftaran</title>
</head>
<body>
    <form method="post" action="update.php">
        <input type="hidden" value="<?php echo $row['id_pendaftaran'];?>" name="id_pendaftaran">
        <table>
            <tr><td>NAMA <font color=red>*</font></td><td><input type="text" value="<?php echo $row['nama'];?>" name="nama" required></td></tr>
            <tr><td>NIK <font color=red>*</font></td><td><input type="text" value="<?php echo $row['nik'];?>" name="nik" required></td></tr>
            <tr><td>TANGGAL LAHIR</td><td><input type="date" value="<?php echo $row['tanggal_lahir'];?>" name="tanggal_lahir"></td></tr>
            <tr><td>JENIS KELAMIN</td><td>
                <input type="radio" name="jenis_kelamin" value="L" <?php echo active_radio_button("L", $row['jenis_kelamin'])?>>Laki Laki
                <input type="radio" name="jenis_kelamin" value="P" <?php echo active_radio_button("P", $row['jenis_kelamin'])?>>Perempuan
            </td></tr>
            <tr><td>NO TELEPON</td><td><input type="text" value="<?php echo $row['no_telepon'];?>" name="no_telepon"></td></tr>
            <tr><td>EMAIL</td><td><input type="email" value="<?php echo $row['email'];?>" name="email"></td></tr>
            <tr><td>AGAMA <?php echo $row['agama'];?></td><td>
                <select name="agama">
                    <?php
                    foreach ($agama as $j){
                        echo "<option value='$j' ";
                        echo $row['agama']==$j?'selected="selected"':'';
                        echo ">$j</option>";
                    }
                    ?>
                </select>
            </td></tr>
            <tr><td>NILAI RAPORT</td><td><input type="text" value="<?php echo $row['nilai_raport'];?>" name="nilai_raport"></td></tr>
            <tr><td>ALAMAT</td><td><input type="text" value="<?php echo $row['alamat'];?>" name="alamat"></td></tr>
            <tr><td>SEKOLAH ASAL</td><td><input type="text" value="<?php echo $row['sekolah_asal'];?>" name="sekolah_asal"></td></tr>
            <tr><td colspan="2"><button type="submit" value="simpan">SIMPAN PERUBAHAN</button>
                    <a href="index.php">Kembali</a></td></tr>
        </table>
    </form>
</body>
</html>