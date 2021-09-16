<?php

// var_dump($_get);
// exit('');

$name = $_POST["name"];
$age = $_POST["age"];
$sex = $_POST["sex"];
$number = $_POST["number"];
$address = $_POST["address"];
$week = $_POST["week"];
$day = $_POST["day"];

// データ1件を1行にまとめる（最後に改行を入れる）
$write_data = "{$name} {$age} {$sex} {$number} {$address} {$week} {$day} \n";

// ファイルを開く．引数が`a`である部分に注目！
$file = fopen('data/data.csv', 'a');
// ファイルをロックする
flock($file, LOCK_EX);

// 指定したファイルに指定したデータを書き込む
fwrite($file, $write_data);

// ファイルのロックを解除する
flock($file, LOCK_UN);
// ファイルを閉じる
fclose($file);

// データ入力画面に移動する
header("Location:kadai_input.php");

?>