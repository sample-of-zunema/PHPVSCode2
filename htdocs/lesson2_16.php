<?php
for($i=5; $i>=1; $i--){
  for($j=2; $j<=$i; $j++){
    echo " * ";
  }
  for($k=5; $k>=$i; $k--){
    echo $k;
  }
  for($l=$k+2; $l<=5; $l++){
    echo $l;
  }
  echo "<br>";
}

// 以下をfor文を使用して表示してください。

// ****5
// ***545
// **54345
// *5432345
// 543212345
