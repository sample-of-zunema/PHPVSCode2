<?php
$w = date("w");
$week_name = array("日", "月", "火", "水", "木", "金", "土");
echo date("Y年m月d日") . "（$week_name[$w]曜日）";

// 今日の日付けを以下の形式で表示してください。
// xxxx年xx月xx日（x曜日）
