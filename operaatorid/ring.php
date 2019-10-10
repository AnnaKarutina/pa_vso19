<?php
/**
 * file name: ring.php;
 * autor: anna.karutina;
 * date: 10.10.2019;
 */
// defineeri muutujad ja omista väärtused
$ringiRaadius = 5;
// arvutame pindala ja ümbermõõt
$ringiPindala = 3.14 * ($ringiRaadius * $ringiRaadius);
$ringiUmbermoot = 3.14 * 2 * $ringiRaadius;
// väljastamine
echo 'Ringi raadius = '.$ringiRaadius.'<br>';
echo 'Ringi pindala = '.$ringiPindala.'<br>';
echo 'Ringi ümbermõõt = '.$ringiUmbermoot.'<br>';