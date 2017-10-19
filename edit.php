<!DOCTYPE HTML>
<html>
<head>
    <meta charset="utf-8" >
	<title>Редактирование новости</title>
</head>

<body>
<?php

include_once ("bd.php");

$id = $_GET['id'];


   $resuit = mysql_query(" 
                        SELECT id,title,text,author FROM news 
                        WHERE id='$id'
                        ORDER BY id DESC
");

$row = mysql_fetch_array($resuit);
?>
<form method="post" action="edit.php?id=<?php echo $row['id'];?>">
    Название новости <br />
    <input type="text" name="title" value="<?php echo $row['title']; ?>"/><br />
    Текст новости <br />
    <textarea cols="40" rows="10" name="text" ><?php echo $row['text']; ?></textarea><br />
    <br />
    <input type="submit" name="save" value="Обновить новость"/>
</form>

<br /> 
<?php

if(isset($_POST['save']))
{
    $title = strip_tags(trim($_POST['title']));
    $text = strip_tags(trim($_POST['text']));
    
    $result = mysql_query (" UPDATE IGNORE news SET title='$title', text='$text' WHERE id='$id' ");
    mysql_close();
    if ($result == 'true')
    {
        echo "Данные успешно обновлены.";
    }
    else
    {
        echo "Данные не обновлены!";
    }


}

?>

<br />
<a href="index.php">К новостям</a>

</body>
</html>
