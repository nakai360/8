<?php
// 以下をそれぞれ表示してください。（すべて改行を行って出力すること)
// 現在時刻を自動的に取得するPHPの関数があるので調べて実装してみて下さい。
// 実行するとその都度現在の日本の日時に合わせて出力されるされるようになればOKです。
// 日時がおかしい場合、PHPのタイムゾーン設定を確認して下さい。


// ・現在日時（xxxx年xx月xx日（x曜日））
// ・現在日時から３日後（yyyy年mm月dd日 H時i分s秒）
// ・現在日時から１２時間前（yyyy年mm月dd日 H時i分s秒）
// ・2020年元旦から現在までの経過日数 (ddd日)
$week = [
    '日', //0
    '月', //1
    '火', //2
    '水', //3
    '木', //4
    '金', //5
    '土', //6
  ];
   
$date = date('w');
echo date('Y')."年" .date('m')."月" .date('d')."日" .$week[$date] . '曜日'."<br/>\n";//現在

$st = strtotime('+3 day');
 
// 「yyyy年mm月dd日」形式で表示
echo date('Y年m月d日H時i分s秒', $st)."<br/>\n";//3日後


echo date('Y年m月d日H時i分s秒',strtotime("-12 hour"))."<br/>\n";//12時間前


$now = time();
$new_year = strtotime("2020-01-01");

$day = floor(($now - $new_year) / 86400);
echo $day . "日";//経過日数

?>
