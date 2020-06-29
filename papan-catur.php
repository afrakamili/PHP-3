<?php

function papan_catur($angka) {
// tulis kode di sini
  for($i=1;$i<=$angka;$i++){
    if ($i%2!=0){
      for($j=1;$j<=$angka;$j++){
        echo "&nbsp #";
      }
      echo "<br>";
    } else{
      echo '&nbsp ' ;
      for($j=1;$j<$angka;$j++){
        echo  "&nbsp #";
      }
      echo "<br>";
    }
  }
  echo "<br><br>";
}

// TEST CASES
echo papan_catur(4);
/*
# # # #
 # # #
# # # #
 # # #
 */

echo papan_catur(8);
/* 
# # # # # # # #
 # # # # # # # 
# # # # # # # #
 # # # # # # # 
# # # # # # # #
*/

echo papan_catur(5);
/*
# # # # #
 # # # #
# # # # #
 # # # # 
# # # # #
*/