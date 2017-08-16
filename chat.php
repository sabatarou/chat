<?php
$chat_log=$_POST["chat_text"];
try
{
$pdo=new PDO('mysql:dbname=chat;host=127.0.0.1','root','nisiiisao');
}catch(PDOExepetion $e)
{
  exit('データベースに接続できませんでした'.$e->getMessage());
}
$stmt=$pdo->query('SET NAMES utf8');
if(!$stmt)
{
  $info=$pdo->errorInfo();
  exit($info[2]);
}
$sql = <<<SQL
INSERT INTO chat(log)
VALUES(?)
SQL;
$stmt=$pdo->prepare($sql);
$stmt->bindValue(1,$chat_log,PDO::PARAM_STR);
$stmt->execute();
header('Location:http://13.112.160.103/chat.html');
?>
