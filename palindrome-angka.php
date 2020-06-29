<?php

function palindrome_angka($angka) {
  // tulis kode di sini
  echo $angka. " || ";
  $a = "{$angka}";
  for($i=(strlen($a)-1);$i>=0;$i--){
    $p[$i] = $a[$i];
   }
  $q = implode("",$p);
    

  //echo $q."<br>";
  if  ($a == $q){
    echo ($angka+1)."<br>";
  } else{
    while ($a != $q){
        $angka++;
        $a = "{$angka}";
        for($i=(strlen($a)-1);$i>=0;$i--){
        $p[$i] = $a[$i];
        }
        $q = implode("",$p);
        }
    echo $angka."<br>";
  }
    //echo "<br>";
};


// TEST CASES
echo palindrome_angka(8); // 9
echo palindrome_angka(10); // 11
echo palindrome_angka(117); // 121
echo palindrome_angka(175); // 181
echo palindrome_angka(1000); // 1001

/*function next_palindrome($angka){
  $i = $angka;
  while($i<=$angka+10){
    if("{$i}" = $q){
      $return_angka = 
    }
  }
}*/

?>

