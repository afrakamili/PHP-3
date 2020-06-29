<?php
function pasangan_terbesar($angka){
// kode di sini
$a = "{$angka}";
  for($i=0; $i<strlen($a)-1;$i++){
    $b [$i] = $a [$i] * 10 + $a [$i+1];   
  }

echo (max ($b)) . "<br>";
}

// TEST CASES
echo pasangan_terbesar(641573); // 73
echo pasangan_terbesar(12783456); // 83
echo pasangan_terbesar(910233); // 91
echo pasangan_terbesar(71856421); // 85
echo pasangan_terbesar(79918293); // 99


?>