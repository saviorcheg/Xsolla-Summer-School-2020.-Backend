<?php
    $title = filter_var(trim($_POST['title']), FILTER_SANITIZE_STRING);
    $text = filter_var(trim($_POST['text']), FILTER_SANITIZE_STRING);
    date_default_timezone_set('UTC');
    $date = date('l jS \of F Y h:i:s A');
    $author = $_COOKIE['user'];

    if (mb_strlen($title) < 2 || mb_strlen($title) > 20) {
        echo "Недопустимая длина названия (от 2 до 20 символов)";
        exit();
    } else if (mb_strlen($text) < 2 ||  mb_strlen($text) > 5000) {
        echo "Недопустимая длина имени (от 2 до 5000 символов)";
        exit();
    } 

    $mysql = new mysqli('localhost', 'id14377745_saviorcheg2', '!Nwk0c|]*e6dJ</*', 'id14377745_news');
    $mysql->query("INSERT INTO `news` (`title`,`text`,`date`,`author`) VALUES('$title','$text','$date','$author')");
    $mysql->close();

    header('Location: /  ');
?>