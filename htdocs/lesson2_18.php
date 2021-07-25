<?php
// 以下配列の中身をfor文を使用して表示してください。
// 表示はHTMLの<table>タグを使用すること
/**
 * 表示イメージ
 *  _________________________
 *  |_____|_c1|_c2|_c3|横合計|
 *  |___r1|_10|__5|_20|___35|
 *  |___r2|__7|__8|_12|___27|
 *  |___r3|_25|__9|130|__164|
 *  |縦合計|_42|_22|162|__226|
 *  ‾‾‾‾‾‾‾‾‾‾‾‾‾‾‾‾‾‾‾‾‾‾‾‾‾
 */
$arr = [
    'r1' => ['c1' => 10, 'c2' => 5, 'c3' => 20],
    'r2' => ['c1' => 7, 'c2' => 8, 'c3' => 12],
    'r3' => ['c1' => 25, 'c2' => 9, 'c3' => 130]
];
?>
<!DOCTYPE html>
<html lang="ja">
<head>
<meta charset="utf-8">
<title>テーブル表示</title>
<style>
table {
    border:1px solid #000;
    border-collapse: collapse;
}
th, td {
    border:1px solid #000;
}
</style>
</head>
<body>
    <table border='1'>
        <?php
        $arr = [
            'r1' => ['c1' => '10', 'c2' => '5', 'c3' => '20'],
            'r2' => ['c1' => '7', 'c2' => '8', 'c3' => '12'],
            'r3' => ['c1' => '25', 'c2' => '9', 'c3' => '130']
        ];
        $c1 = 0;
        $c2 = 0;
        $c3 = 0;
        $all_total = 0;
        foreach ($arr as $key=>$val) {
            $c1 += $val['c1'];
            $c2 += $val['c2'];
            $c3 += $val['c3'];
        }
        echo " <td></td><td>c1</td><td>c2</td><td>c3</td><td>横合計</td>";
        foreach ($arr as $key=>$val) {
            $c_total = array_sum($val);
            $all_total += $c_total;
            echo "<tr><td>$key</td><td>$val[c1]</td><td>$val[c2]</td><td>$val[c3]</td><td>$c_total</td></tr>";
        }
        echo " <td>縦合計</td><td>$c1</td><td>$c2</td><td>$c3</td><td>$all_total</td>";
        ?>
    </table>
</body>
</html>