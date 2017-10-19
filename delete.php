<?php
include_once("bd.php");
$id = $_GET['id'];
mysql_query(" DELETE FROM news WHERE id='$id' ");
mysql_close();

echo "Новость удалена!";

?>
<br />
<a href="index.php"> Вернуться к новостям</a>