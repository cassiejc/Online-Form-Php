<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Pendaftaran</title>
</head>
<body>
    <h2>List Pendaftaran</h2>
    <table border="1">
        <tr>
            <th>NO</th>
            <th>NAMA</th>
            <th>NIK</th>
            <th>TANGGAL LAHIR</th>
            <th>JENIS KELAMIN</th>
            <th>NO TELEPON</th>
            <th>EMAIL</th>
            <th>AGAMA</th>
            <th>NILAI RAPORT</th>
            <th>ALAMAT</th>
            <th>SEKOLAH ASAL</th>
            <th>ACTION</th>
        </tr>
        <?php
        include 'koneksi.php';
        $pendaftaran = mysqli_query($koneksi, "SELECT * from pendaftaran");
        $no = 1;
        foreach($pendaftaran as $row) {
            $jenis_kelamin = $row['jenis_kelamin'] == 'P' ? 'Perempuan' : 'Laki laki';
            echo "<tr>
            <td>$no</td>
            <td>" . $row['nama'] . "</td>
            <td>" . $row['nik'] . "</td>
            <td>" . $row['tanggal_lahir'] . "</td>
            <td>" . $jenis_kelamin . "</td>
            <td>" . $row['no_telepon'] . "</td>
            <td>" . $row['email'] . "</td>
            <td>" . $row['agama'] . "</td>
            <td>" . $row['nilai_raport'] . "</td>
            <td>" . $row['alamat'] . "</td>
            <td>" . $row['sekolah_asal'] . "</td>
            <td>
            <a href='form-edit.php?id_pendaftaran=$row[id_pendaftaran]'>Edit</a>
            <a href='delete.php?id_pendaftaran=$row[id_pendaftaran]'>Delete</a>
            </td>
            </tr>";
            $no++;
        }
        ?>
    </table>
    <a href='form-input.php'> Input Data Pendaftaran </a>
</body>
</html>