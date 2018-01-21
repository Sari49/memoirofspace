$pdo = new PDO("mysql:dbname=データベースの名t;host=localhost",'アカウント名', 'パスワード');
$stmt = $pdo->query('SET NAMES utf8');
$sql = 'SHOW CREATE TABLE tbtest;';
$result = $pdo-> query($sql);
foreach($result as $row){
print_r($row);
}
echo "<hr>";
