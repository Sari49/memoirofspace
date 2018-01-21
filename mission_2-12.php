<?php
$pdo = new PDO(接続情報);
$stmt = $pdo->query('SET NAMES utf8');
$sql='SELECT * FROM tbtest;'+
$result =$pdo->query($sql);
foreach($result as $row){
echo $row['id'].',';
echo $row['name'].',';
echo $row['comment'].'<br>';
}
?>
