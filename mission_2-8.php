<?php
$pdo = new PDO(接続情報);
$stmt = $pdo->query('SET NAMES utf8');
$sql="CREATE TABLE tbtest"
."("
."id INT,"
."name char (32),"
."comment TEXT"
.");";
$stmt = $pdp->query($sql);
?>
