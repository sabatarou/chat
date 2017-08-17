<?php
try
{
$pdo=new PDO('mysql:dbname=chat;host=127.0.0.1','root','pass');
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
$stmt=$pdo->query('SELECT*FROM chat');
if(!$stmt)
{
  $info =$pdo->errorInfo();
  exit($info[2]);
}
$str="チャットのログです"."\r\n";
if(isset($_POST["dlbtn"]))
{
  while($data=$stmt->fetch(PDO::FETCH_ASSOC))
  {
    $str.= $data['id']."---".$data['date']."\r\n".$data['log']."\r\n";
  }
}
$pdo=null;
//ファイル出力
$filename=date('Y').".txt";
header('Content-Type:txet/plain');
header('Content-Disposition:attachment; filename='.$filename);
echo mb_convert_encoding($str,"SJIS","UTF-8");
exit;
 ?>
