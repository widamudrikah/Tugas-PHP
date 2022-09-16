<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Input</title>
</head>
<body>

<?php

$namaeror = "";
$nama = "";

IF($_SERVER['REQUEST_METHOD'] == "POST"){
    if(empty($_POST["wida"])){
        $namaeror = "nama tidak boleh kosong";
    }else{
        $nama = $_POST['wida'];
    }
}


?>
    <form action="<?php echo $_SERVER["PHP_SELF"];?>" method="post">
        <label>Nama Lengkap</label><br>
        <input type="text" name="wida"><br>
        <span>*<?php echo $namaeror; ?> </span> <br>
        <button type="submit">input</button>
    </form>

    <h2>DATA TERSIMPAN</h2>
    <?php
    print $nama;
    ?>
</body>
</html>