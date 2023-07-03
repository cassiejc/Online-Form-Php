<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Input Data</title>
</head>
<body>
    <form method="post" action="simpan.php">
        <table>
            <tr><td>NAMA <font color=red>*</font></td><td><input type="text" name="nama" required></td></tr>
            <tr><td>NIK <font color=red>*</font></td><td><input type="text" onkeyup="isi_otomatis()" name="nik" required></td></tr>
            <tr><td>TANGGAL LAHIR</td><td><input type="date" name="tanggal_lahir"></td></tr>
            <tr><td>JENIS KELAMIN</td>
            <td>
                <input type="radio" name="jenis_kelamin" value="L">Laki Laki
                <input type="radio" name="jenis_kelamin" value="P">Perempuan
            </td></tr>
            <tr><td>NO TELEPON</td><td><input type="text" name="no_telepon"></td></tr>
            <tr><td>EMAIL</td><td><input type="email" name="email"></td></tr>
            <tr><td>AGAMA</td><td>
                <select name="agama">
                    <option value="ISLAM">ISLAM</option>
                    <option value="KRISTEN">KRISTEN</option>
                    <option value="KATOLIK">KATOLIK</option>
                    <option value="HINDU">HINDU</option>
                    <option value="BUDDHA">BUDDHA</option>
                    <option value="KONGHUCU">KONGHUCU</option>
                </select>
            </td></tr>
            <tr><td>NILAI RAPORT</td><td><input type="text" name="nilai_raport"></td></tr>
            <tr><td>ALAMAT</td><td><input type="text" name="alamat"></td></tr>
            <tr><td>SEKOLAH ASAL</td><td><input type="text" name="sekolah_asal"></td></tr>
            <tr><td colspan="2"><button type="submit" value="simpan">SIMPAN</button></td></tr>
        </table>
    </form>
</body>
</html>