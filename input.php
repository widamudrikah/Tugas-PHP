<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>input data</title>
</head>
<body>
    <h1>Tambah Mahasiswi</h1>
    <form action="proses_input.php" method="post">

    <label for="NIM">NIM</label><br>
    <input type="text" name="NIM" id="NIM">
    <br>

    <label for="Nana">Nama</label><br>
    <input type="text" name="Nama" id="Nama">
    <br>

    <label for="Biaya">Biaya</label><br>
    <input type="number" name="Biaya" id="Biaya">
    <br>
    <br>

    <button type="submit">Simpan</button>
    </form>

</body>
</html>