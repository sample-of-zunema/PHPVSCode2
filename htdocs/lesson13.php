<?php
echo date('y年m月d日 H時i分s秒')."\n";
echo date("Y-m-d",strtotime("+3 day"))."\n";
echo date("Y-m-d H:i:s",strtotime($target_day . "-1 hour"))."\n";

$today = new DateTime('now');
$day = new DateTime('2020-01-01');
$diff = $day->diff($today);
echo $diff->days;

// 以下をそれぞれ表示してください。
// 表示するタイミングによって自動で算出すること
// ・現在日時（yyyy年mm月dd日 H時i分s秒）
// ・現在日時から３日後
// ・現在日時から１２時間前
// ・2020年元旦から現在までの経過日数

// 日時がおかしい場合、PHPのタイムゾーン設定を行ってください
