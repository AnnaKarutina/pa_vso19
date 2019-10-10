<?php
/**
 * file name: ring.php;
 * autor: anna.karutina;
 * date: 10.10.2019;
 */
// defineeri muutujad ja omista väärtused
$ringiRaadius = 5;
// arvutame pindala ja ümbermõõt
$ringiPindala = pi() * ($ringiRaadius * $ringiRaadius);
$ringiUmbermoot = pi() * 2 * $ringiRaadius;
// väljastamine
echo 'Ringi raadius = '.$ringiRaadius.'<br>';
//echo 'Ringi pindala = '.$ringiPindala.'<br>';
printf('Ringi pindala = %.3f<br>', $ringiPindala);
//echo 'Ringi ümbermõõt = '.$ringiUmbermoot.'<br>';
printf('Ringi ümbermõõt = %.3f<br>', $ringiUmbermoot);