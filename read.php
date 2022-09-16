<?php

include 'koneksi2.php';

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>DAFTAR MAHASISWI HEBAT</h1>
    <a href="input.php">Tambah mahasiswi</a>
    <br>
    <br>
    <table border="1">
        <tr>
            <th>NIM</th>
            <th>Nama</th>
            <th>Biaya</th>
            <th>opsi</th>
        </tr>
    <?php

        $data = mysqli_query($koneksi, "SELECT * FROM mahasiswi");
        while($mahasiswi = mysqli_fetch_array($data)){
    ?>
        <tr>
            <td><?php print $mahasiswi['NIM'];?></td>
            <td><?php print $mahasiswi['Nama'];?></td>
            <td><?php print $mahasiswi['Biaya'];?></td>
            <td>
                <a href="delete.php?NIM=<?php print $mahasiswi['NIM'];?>">Hapus</a>
                <a href="edit.php?NIM=<?php print $mahasiswi['NIM'];?>">Edit</a>
            
            </td>
        
        </tr>


    <?php
        }
    ?>
</body>
</html>