<?php
function tentukan_deret_aritmatika($arr) {
// kode di sini
  $hasil = 0;
  for($i=0; $i <count($arr); $i++){
    if ($arr[$i]== $arr[0]+($arr[1]-$arr[0])*$i){
      $hasil += 1;
    }
  }
  echo "array = aritmatika? ";
  echo $hasil == count ($arr) ? " || true <br>" : " || false <br>";
 
}

// TEST CASES
echo tentukan_deret_aritmatika([1, 2, 3, 4, 5, 6]);// true
echo tentukan_deret_aritmatika([2, 4, 6, 12, 24]);// false
echo tentukan_deret_aritmatika([2, 4, 6, 8]); //true
echo tentukan_deret_aritmatika([2, 6, 18, 54]);// false
echo tentukan_deret_aritmatika([1, 2, 3, 4, 7, 9]);// false
?>