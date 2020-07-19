<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width", initial-scale=1.0>
    <meta http-equiv="X-UA-Compitable" content="ie=edge">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    <title>News</title>
</head>
<body>

<?php require "blocks/header.php" ?>

<?php
    $mysql = new mysqli('localhost', 'id14377745_saviorcheg2', '!Nwk0c|]*e6dJ</*', 'id14377745_news');
    $result = $mysql->query("SELECT * FROM `news` ORDER BY `id` DESC");
    $news = $result->fetch_all();
    foreach($news as $n):
?>

<div class="container card flex-md-row mb-4 box-shadow h-md-250">
            <div class="card-body d-flex flex-column align-items-start">   
            <!-- <strong class="d-inline-block mb-2 text-primary"> World </strong> -->
              <h3 class="mb-0"> <?=$n[1]?> </p></h3>              
              <p class="card-text mb-auto"> <em> <?=$n[2]?> </em> </p> </br>
              <div class="mb-1 text-muted">Дата публикации: <?=$n[3]?> (UTC) </div>
              <div class="mb-1 text-muted">Автор: <?=$n[4]?></div>
            </div>
</div>

<?php
endforeach;
    $mysql->close();
?>

<?php require "blocks/footer.php" ?>
</body>
</html>