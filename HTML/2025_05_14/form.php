<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contoh Form</title>
</head>
<body>
    <h1>Form Biodata</h1>
    <form action="kirim.php" method="post">
        <label for="nama">Nama:</label>
        <input type="text" name="nama"><br><br>

        <label for="nama">Email:</label>
        <input type="text" name="email"><br><br>

        <label>Alamat</label>
        <textarea name="alamat" rows="4" cols="50"></textarea><br><br>

        <label for="jenis_kelamin">Jenis Kelamin:</label>
        <input type="radio" name="jenis_kelamin" value="Laki-laki"> Laki-laki
        <input type="radio" name="jenis_kelamin" value="Perempuan"> Perempuan<br><br>

        <label for="hobi">Hobi:</label><br>
        <input type="checkbox" name="hobi[]" value="Membaca"> Membaca<br>
        <input type="checkbox" name="hobi[]" value="Olahraga"> Olahraga<br>
        <input type="checkbox" name="hobi[]" value="Bersepeda"> Bersepeda<br><br>

        <label>Pekerjaan:</label>
        <select name="pekerjaan">
            <option value="Pelajar">Pelajar</option>
            <option value="Wiraswasta">Wiraswasta</option>
            <option value="Karyawan">Karyawan</option>
            <option value="Lainnya">Lainnya</option>
        </select><br><br>

        <input type="submit" value="Kirim Sekarang">
    </form>
</body>
</html>