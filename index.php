<!DOCTYPE HTML>

<html>
<head>
    <meta charset="utf-8" >
	<title>Новостной сайт</title>
</head>

<body>
<?php

include_once ("bd.php");
if(isset($_SESSION['logged_used']) )
{
    ?><h2>Авторизован <?php echo $_SESSION['logged_used'];?> </h2> <?php
    ?><br /><a href="logout.php">Выйти</a><br />
    <a href="add.php">Добавить новость</a><br />
    <?php 
}



if(!isset($_SESSION['logged_used']) )
{
?><a href="signup.php">Регестрация</a><br />
<a href="login.php">Войти</a><br /> <?php
}




$resuit = mysql_query(" SELECT id,title,text,author,date FROM news ORDER BY id DESC");

mysql_close();


while($row = mysql_fetch_array($resuit) )
{
?> 
 <h2><?php echo $row['title']?></h2>
 <p><?php echo $row['text']?></p>
 <p>Дата публикации:<?php echo $row['date']?></p>
 <p>Автор:<?php echo $row['author']?></p>
 <?php 
 if($_SESSION['logged_used'] == $row['author']){
    ?><a href="edit.php?id=<?php echo $row['id']?>">Редактировать новость</a> <br />
    <a href="delete.php?id=<?php echo $row['id']?>">Удалить новость</a> <br /> <?php
 } ?>
  <hr />
<?php } ?>


</body>
</html>