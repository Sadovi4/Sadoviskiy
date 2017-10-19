<?php
include_once ("bd.php");


$data = $_POST;
if(isset ($data['signup']))
{
    $errors = array();
    
    $login = strip_tags(trim($data['login']));
    $password = strip_tags($data['password']);
    
    if( strip_tags(trim($data['login'])) =='' )
    {
        $errors[] = 'Введите логин!';
    }
    if( strip_tags($data['password']) =='' )
    {
        $errors[] = 'Введите пароль!';
    }
    if( strip_tags($data['password_2']) != $data['password'] )
    {
        $errors[] = 'Пароли не совпадают!';
    }
    $resuit = mysql_query(" SELECT * FROM signup WHERE user_name='$login'");
    if(mysql_num_rows($resuit) != 0)
    {
        $errors[] = 'Такой логин уже существует';
    }
        
    if(empty($errors) )
    {
        if(isset($_POST['signup']))
        {
            
        $Hash = md5($password);
            mysql_query(" 
                            INSERT INTO signup (user_name, password) 
                            VALUES('$login', '$Hash')
                        ");
            mysql_close();
            echo "Успешная регистрация!";
           ?> <a href="index.php"> На главную</a> <?php
        }
    }
    else
    {
        echo ''.array_shift($errors).'<hr>' ;
    }
    
    
    
}



?>

<form action="signup.php" method="POST">
    <p>
        <p><strong>Ваш логин</strong></p>
        <input type="text" name="login" value="<?php echo @$data['login']?>"/>
    </p>
    <p>
        <p><strong>Ваш пароль </strong></p>
        <input type="password" name="password" value="<?php echo @$data['password']?>"/>
    </p>
    <p>
        <p><strong>Введите Ваш пароль еще раз</strong></p>
        <input type="password" name="password_2"/>
    </p>
    <p>
        <input type="submit" name="signup" value="Зарегистрироваться"/>
    </p>
</form>