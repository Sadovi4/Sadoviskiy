<?php
include_once ("bd.php");
$data = $_POST;

if(isset ($data['login']))
{
    $errors = array();
    $login = strip_tags(trim($data['login']));
    $password = strip_tags($data['password']);
    $resuit = mysql_query(" SELECT user_name, password FROM signup WHERE user_name='$login'");
    if(mysql_num_rows($resuit) == 1)
    {
        $row = mysql_fetch_array($resuit);
        if($password == $row['password']  )
        {
            
            $_SESSION['logged_used'] = $login;
            echo "Вы авторизованы";?>
            <a href="index.php"> На главную</a>
       <?php } 
        else
        {
            $errors[] = 'Неверно введен пароль!';
        }
    }
    else
    {
        $errors[] = 'Такого логина не существует';
    }
    if(!empty($errors) )
    {
        echo ''.array_shift($errors).'<hr>' ;
    }
}


?>

<form action="login.php" method="POST">
    <p>
        <p><strong>Ваш логин</strong></p>
        <input type="text" name="login" value="<?php echo @$data['login']?>"/>
    </p>
    <p>
        <p><strong>Ваш пароль </strong></p>
        <input type="password" name="password" value="<?php echo @$data['password']?>"/>
    </p>
    <p>
        <input type="submit" name="enter" value="Войти"/>
    </p>
</form>