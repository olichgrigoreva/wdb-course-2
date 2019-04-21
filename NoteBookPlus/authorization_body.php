<?php session_start(); ?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>NoteBookPlus</title>

    <?php echo $_SESSION['info_message'] ?>

    <script src="js/my_script_podsvet.js">
    </script>

    <link rel="stylesheet" type="text/css" href="css/bootstrap-4.3.1-dist/css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="css/bootstrap-4.3.1-dist/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="css/bootstrap-4.3.1-dist/css/bootstrap-grid.css">
    <link rel="stylesheet" type="text/css" href="css/bootstrap-4.3.1-dist/css/bootstrap-grid.min.css">
    <link rel="stylesheet" type="text/css" href="css/bootstrap-4.3.1-dist/css/bootstrap-reboot.css">
    <link rel="stylesheet" type="text/css" href="css/bootstrap-4.3.1-dist/css/bootstrap-reboot.min.css">
    <link rel="stylesheet" type="text/css" href="css/my_style.css">

  </head>
  <body>
    <header class="panel_color">
      <br>
      <div class="text_header centr">
        NoteBookPlus
      </div>
      <br>
    </header>

    <main class="main_color">
      <div class="width_1 container">
        <br> <br> <br>

        <form class="" action="authorization.php" method="post">
          <label for="enter_username">Имя пользователя</label>
          <input class="form-control" type="text" name="username" value="" id="enter_username" onkeyup="podsvet_name(this.value, this.id)">
          <small class="form-text text-muted">Может содержать от 3 до 32 латинских букв, цифр, а также символы .  _  - . Должен начинаться и заканчиваться на букву или цифру, нельзя использовать подряд два одинаковых спецсимвола.</small>
          <br>
          <label for="enter_password">Пароль</label>
          <input class="form-control" type="password" name="password" value="" id="enter_password" onkeyup="podsvet_password(this.value, this.id)">
          <small class="form-text text-muted">Может содержать от 6 до 32 латинских букв, цифр.</small>
          <br> <br>
          <div class="centr">
            <button class="btn btn-dark width_button_1" type="submit" name="submit">Войти</button>
          </div>
          <br>
        </form>

        <div class="centr">
          <form action="registration.html">
          <button class="btn btn-secondary width_button_1" type="submit" name="submit">Регистрация</button>
          </form>
        </div>
        <br> <br> <br>

      </div>
    </main>
    <footer class="panel_color">
      <div class="text_footer centr">
        <br>
        NoteBookPlus
        <br>
        Версия 0.1
        <br>
        2019 г.
        <br> <br>
      </div>
    </footer>
  </body>
</html>
