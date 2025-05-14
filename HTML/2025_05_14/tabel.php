<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Mahasiswa</title>
    <style>
        table {
            width: 100%;
            border-collapse: collapse;
        }
        table, th, td {
            border: 1px solid black;
        }
        th, td {
            padding: 8px;
            text-align: left;
        }
        th {
            background-color: #f2f2f2;
        }
    </style>
</head>
<body>
    <?php
    // Simulasi data mahasiswa
    $mahasiswa = [
        ['nama' => 'Wahyu', 'nim' => '87654321', 'jurusan' => 'Sistem Informasi', 'email' => 'email@dua.com', 'telepon'=> '021123456345'],
        ['nama' => 'Adi', 'nim' => '11223344', 'jurusan' => 'Teknik Komputer', 'email' => 'email@tiga.com', 'hp'=> '08123456789', 'telepon'=> '02112345667'],
        // ['nama' => 'Siti', 'nim' => '55667788', 'jurusan' => 'Teknik Elektro', 'email' => 'email@tiga.com', 'hp'=> '08123456789', 'telepon'=> '0211234567'],
        ['nama' => 'Budi', 'nim' => '12345678', 'jurusan' => 'Teknik Informatika', 'email' => 'email@satu.com', 'hp'=> '08123456789'],
    ];
    ?>
    <h1>Daftar Mahasiswa</h1>
    <table>
        <thead>
            <tr>
                <th>Nomor</th>
                <th>Nama</th>
                <th>NIM</th>
                <th>Jurusan</th>
                <th>Kontak</th>
                <th>Email</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($mahasiswa as $index => $mhs){ ?>
                <tr>
                    <td>
                        <?php echo $index + 1; ?>
                    </td>
                    <td><?= $mhs['nama'] ?></td>
                    <td><?= $mhs['nim'] ?></td>
                    <td><?= $mhs['jurusan'] ?></td>
                    <td>
                        <?php
                        if (isset($mhs['hp'])) {
                            echo $mhs['hp'] . '<br>';
                        }
                        if (isset($mhs['telepon'])) {
                            echo $mhs['telepon'];
                        }
                        ?>
                    </td>
                    <td><?= $mhs['email'] ?></td>
                </tr>
            <?php } ?>
        </tbody>
        <tfoot>
            <tr>
                <td colspan="6">Total Mahasiswa: <?php echo count($mahasiswa);?></td>
            </tr>
        </tfoot>
    </table>
</body>
</html>