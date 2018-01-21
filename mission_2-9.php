＜？php
$pdo = new PDO("mysql:dbname=データベース名t;host=localhost",'アカウント名','パスワード'）；
$stmt = $pdo->query('SET NAMES utf8');
$sql= 'SHOW TABLE;';
$result = $pdo->query($sql);
foreach ($result as $row){
echo $row[0];
echo '<br>';
}
echo "<hr>";
?>