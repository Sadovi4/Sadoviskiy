<?php
session_start(); 
$connection = mysql_connect("localhost", "root" , "12345678");
$bd =  mysql_select_db("mybd");
mysql_query(" SET NAMES 'utf8' ");

if(!$connection || !$bd)
{
    exit(mysql_error());
}
?>