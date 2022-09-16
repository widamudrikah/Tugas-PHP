<?php
 looping While
$a = 1;

while ($a <= 5){
    echo "nomor urut kamu adalah $a <br>";
    $a++;
}

$a = 5;

while ($a <= 100) {
    echo "nomor urut kamu adalah $a <br>";
    $a+=5;
}

//looping DO
$a = 1;

do {
    echo "nomor urut kamu adalah $a <br>";
    $a++;
} while ($a <= 5);*/

looping FOR
for ($a = 1; $a <= 9; $a++) {
    echo "nomor urut kamu adalah $a <br>";
}

$umur = array("wida"=>"25", "cahya"=> "20", "ulvi"=>"26");

foreach($umur as $a => $val) {
    echo "$a = $val<br>";
}

//looping FOREACH

$warna = array ("merah", "kuning", "pink");

foreach ($warna as $value) {
    echo "$value <br>";
}*/

//looping BREAK
$a = 1;

while($a < 10) {
    if ($a == 20) {
        break;
    }
    echo "Nomor urut kamu adalah $a <br>";
    $a++;
}*/

//Looping CONTINUE
$a = 1;

while($a < 20){
    if ($a == 4) {
        $a++;
        break;
    }
    echo "nomor urut anda adalah $a <br>";
}*/
?>