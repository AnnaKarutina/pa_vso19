<?php
/**
 * file name: pos_neg.php;
 * autor: anna.karutina;
 * date: 10.10.2019;
 */
// defineeri arv
$arv = 0;
// kontrollime, kas arv on positiivne
// kas arv on suurem kui 0
//var_dump($arv > 0);
if($arv > 0) {
  // kui arv ON suurem kui 0
  echo $arv.' on positiivne<br>';
} else {
  // muidu - kui arv EI OLE suurem 0
  echo $arv.' on negatiivne<br>';
}
echo 'see on programmi lõpp';