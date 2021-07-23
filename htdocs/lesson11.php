<?php
$human = [
  ['name'=>'田中','age'=>'25','gender'=>'男'],
  ['name'=>'鈴木','age'=>'20','gender'=>'男'],
  ['name'=>'佐藤','age'=>'23','gender'=>'女']
];

foreach ($human as $value) {
  echo $value["name"].$value["age"].$value["gender"]."<br>";
  // foreach ($varValueA as $varKeyB => $varValueB) {
  // }
}

echo $human[1]["age"];

// 多次元配列で配列の中に連想配列を作り、
// name,age,genderを格納したデータがあります。

// このデータを元に

// 田中25男
// 鈴木20男
// 佐藤23女

// という形でループ構文を使用して出力してください。
// 上記処理後、鈴木の年齢のみを下部に出力してください。
