<?php
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
  $stmt=$pdo->query('SELECT*FROM chat');
  if(!$stmt)
  {
    $info =$pdo->errorInfo();
    exit($info[2]);
  }
  while($data=$stmt->fetch(PDO::FETCH_ASSOC))
  {
    echo '<p>'.$data['log']."<br>".$data['date']."</p>\n";
  }
  $pdo =null;
  ?>
