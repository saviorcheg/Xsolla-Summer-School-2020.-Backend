<?php
    $login = filter_var(trim($_POST['login']), FILTER_SANITIZE_STRING);
    $name = filter_var(trim($_POST['name']), FILTER_SANITIZE_STRING);
    $pass = filter_var(trim($_POST['pass']), FILTER_SANITIZE_STRING);

    if (mb_strlen($login) < 2 || mb_strlen($login) > 50) {
        echo "Недопустимая длина логина (от 2 до 50 символов)";
        exit();
    } else if (mb_strlen($name) < 2 ||  mb_strlen($name) > 25) {
        echo "Недопустимая длина имени (от 2 до 25 символов)";
        exit();
    } else if (mb_strlen($pass) < 2 ||  mb_strlen($pass) > 10) {
        echo "Недопустимая длина пароля (от 2 до 10 символов)";
        exit();
    }

    $pass = md5 ($pass."hello123");

    $mysql = new mysqli('localhost', 'id14377745_saviorcheg', 'Yd-0*(_8ljne<m2I', 'id14377745_users');
    $mysql->query("INSERT INTO `users` (`login`,`pass`,`name`) VALUES('$login','$pass','$name')");
    $mysql->close();

    header('Location: /  ');
?>