<?php
function tukar_besar_kecil($string){
//kode di sini
for($i=0;$i<strlen($string);$i++){
  $b[$i]= $string [$i];
  $b [$i] = ord ($b [$i]);
  
  if ($b[$i]<=90 && $b[$i]>= 65){
    $b[$i] += 32;
    $c [$i] = chr ($b[$i]);
  } else if ($b[$i]<=122 && $b[$i]>= 97){
    $b[$i] -= 32;
    $c [$i] = chr ($b[$i]);
  }
  
    
}
echo implode("", $c)."<br>";
}

// TEST CASES
echo tukar_besar_kecil('Hello World'); // "hELLO wORLD"
echo tukar_besar_kecil('I aM aLAY'); // "i Am Alay"
echo tukar_besar_kecil('My Name is Bond!!'); // "mY nAME IS bOND!!"
echo tukar_besar_kecil('IT sHOULD bE me'); // "it Should Be ME"
echo tukar_besar_kecil('001-A-3-5TrdYW'); // "001-a-3-5tRDyw"

?>