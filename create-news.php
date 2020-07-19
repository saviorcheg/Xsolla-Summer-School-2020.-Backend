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

<form class="container" action ="check-news.php" method="post">
  <h1 class="h3 mb-3 font-weight-normal">Создайте новость</h1>

  <input type="text" name="title" id="title" class="form-control" placeholder="Название" autofocus=""> </br>
  
  <textarea class="form-control" name="text" id="text" placeholder="Текст" rows="5"></textarea>  </br> 
  
  <button class="btn btn-lg btn-block btn-primary "  type="submit">Опубликовать</button>
</form>

<?php require "blocks/footer.php" ?>
</body>
</html>