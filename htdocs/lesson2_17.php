<?php
for($i=1; $i<=9; $i++){
  if($i<=5){
    for($j=4; $j>=$i; $j--){
      echo " * ";
    }
    for($k=1; $k<=$i; $k++){
      echo $k;
    }
    for($l=$k-2; $l>=1; $l--){
      echo $l;
    }
    echo "<br />";
  }
  else if($i>=6){
    for($m=6; $m<=$i; $m++){
      echo " * ";
    }
    for($n=1; $n<=10-$i; $n++){
      echo $n;
    }
    for($o=$n-2; $o>=1; $o--){
      echo $o;
    }
  echo "<br>";
  }
}

// 以下をfor文を使用して表示してください。
// ヒント: if〜elseifを使用

// ****1
// ***121
// **12321
// *1234321
// 123454321
// *1234321
// **12321
// ***121
// ****1
