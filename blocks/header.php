<div class="d-flex flex-column flex-md-row align-items-center p-3 px-md-4 mb-3 bg-white border-bottom shadow-sm">
  <h5 class="my-0 mr-md-auto font-weight-normal">News by Yagofarov</h5>
  <?php
    if($_COOKIE['user'] == ''): 
  ?>
  <nav class="my-2 my-md-0 mr-md-3">
    <a class="p-2 text-dark" href="../index.php">Главная</a>
    <a class="p-2" href="../sign-up.php">Регистрация</a>
  </nav>  
  <a class="btn btn-outline-primary" href="../sign-in.php">Вход</a>
    <?php else: ?>
    <nav class="my-2 my-md-0 mr-md-3">
      <a class="p-2 text-muted">Привет, <?=$_COOKIE['user']?>! Опубликуй новость :)</a>
      <a class="p-2 text-dark" href="../index.php">Главная</a>
      <a class="p-2 text-dark" href="../create-news.php">Опубликовать новость</a>
      <a class="p-2" href="../sign-up.php">Регистрация</a>
    </nav>  
    <a class="btn btn-outline-danger" href="../exit.php">Выход</a>
  <?php endif; ?>
</div>