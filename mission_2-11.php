$pdo = new PDO
$stmt = $pdo->query('SET NAMES utf8');
$name = '好きな名前';
$comment ='好きなコメント';
$sql = $pdo ->prepare("INSERT INTO tbtest(id,name,comment)VALUES('1', :name, :comment);");
$sql->bindParam(':name', $name, PDO::PARAM_STR);
$sql->bindParam(':comment' $comment,PDO::PARAM_STR);
$sql->execute();
