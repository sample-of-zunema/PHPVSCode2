<?php
$country = array("日本" => "東京", "アメリカ" => "ワシントン", "イギリス" => "ロンドン", "フランス" => "パリ");
foreach ($country as $key => $value) {
  echo $key.'の首都は'.$value."です。"."\n";
}
// 連想配列に国と都市を格納し.
// ○○の首都は○○です。
// という形でループ構文を使用してすべて出力してください。

// 日本、アメリカ、イギリス、フランス
// 東京、ワシントン、ロンドン、パリ
