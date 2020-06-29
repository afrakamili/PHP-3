<?php
function ubah_huruf($string){
//kode di sini
for($i=0;$i<strlen($string);$i++){
  $b[$i]= $string [$i];
  $b [$i] = ord ($b [$i])+1;
  $c [$i] = chr ($b[$i]);
}

echo implode ("",$c)."<br>";
}

// TEST CASES
echo ubah_huruf('wow'); // xpx
echo ubah_huruf('developer'); // efwfmpqfs
echo ubah_huruf('laravel'); // mbsbwfm
echo ubah_huruf('keren'); // lfsfo
echo ubah_huruf('semangat'); // tfnbohbu

?>