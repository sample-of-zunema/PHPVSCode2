﻿<?php
for($a=4; $a>=1; $a--){
  for($b = 3 ; $b >= $a ; $b --){
      echo "*";
    }
    for($c = 1 ; $c <=$a ; $c++){
      echo $c;
    }
    for($d = 3 ; $d >=6-$c ; $d--){
      echo $d-(4-$a);
    }
    echo "<br>";
}

// 以下をfor文を使用して表示してください。

// 1234321
// *12321
// **121
// ***1
