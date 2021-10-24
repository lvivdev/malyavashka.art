<!DOCTYPE html>
<html lang="ru" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/style.css">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Malyovashka.art</title>
  </head>
  <body>

    <div class="container">
      <div class="d-flex flex-column flex-md-row align-items-center pb-3 mb-4 border-bottom">
        <a href="/" class="d-flex align-items-center text-dark text-decoration-none">
          <span class="fs-4" >Malyovashka.art</span>
        </a>

        <nav class="d-inline-flex mt-2 mt-md-0 ms-md-auto">
          <a class="me-3 py-2 text-dark text-decoration-none" href="index.php">Главная</a>
          <a class="me-3 py-2 text-dark text-decoration-none" href="contacts.php">Контакты</a>
          <a class="me-3 py-2 text-dark text-decoration-none" href="about.php">О нас</a>
          <?php if($_COOKIE['user'] == 'true'):
          ?>
          <a class="btn btn-outline-primary" href="auth.php" >Кабинет пользователя</a>
        <?php else: ?>
          <a class="btn btn-outline-primary" href="auth.php" >Войти</a>
        <?php endif; ?>
        </nav>
      </div>
    </div>

  </body>
</html>
