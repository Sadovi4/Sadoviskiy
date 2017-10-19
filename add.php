<!DOCTYPE HTML>
<html>
<head>
    <meta charset="utf-8" >
	<title>Добавление новости</title>
</head>

<body>
<?php 
include_once ("bd.php");
if(isset($_SESSION['logged_used']) )
{ ?>
<form method="post" action="add.php">
Название новости <br />
    <input type="text" name="title" /><br />
Текст новости <br />
    <textarea cols="40" rows="10" name="text" ></textarea><br />
    <br />
    
    <input type="submit" name="add" value="Добавить"/>
</form>

<?php
}
else
{
    echo "Авторизуйтесь";
}
if(isset($_POST['add']))
{
    $title = strip_tags(trim($_POST['title']));
    $text = strip_tags(trim($_POST['text']));
    $author = $_SESSION['logged_used'];
    $date = date("Y-m-d");

    mysql_query(" 
                    INSERT INTO news(title, text, author, date) 
                    VALUES('$title', '$text', '$author', '$date')
    ");
    mysql_close();
    
    echo "Новость добавлена!";
}
?>
<br />
<a href="index.php">К новостям</a>

</body>
</html>
