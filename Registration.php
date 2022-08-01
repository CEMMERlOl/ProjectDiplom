<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/09f51cc1c0.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="/assets/Auth.css">
    <link rel="stylesheet" href="/assets/Tab.css">
    <link rel="stylesheet" href="/assets/header.css">
    <link rel="shortcut icon" href="Images/KIK.ico">
    <title>KIK</title>
    <style>
      body {
        background-color: #14181bee;
      }
      .color {
        background-color: rgb(106,78,156);
      }
      #emailp {
        color: rgb(126, 101, 185);
      }
    </style>
  </head>
  <body>
    <!-- Начало Хеддера -->
    <?php require_once("components/header.php")?>
    <!-- Конец Хеддера -->
    <!-- Начало Таб -->
    <h2 class="justify_center Headline">
      <div class="Absolute">
          <i class="fa-solid fa-square-caret-left point" onclick="history.back()"></i>
      </div>
      <div>Регистрация</div>
    </h2>
    <!-- Конец Таб -->
    <!-- Начало Формы -->
    <div id="login">
      <form onsubmit="sendForm(this); return false">
          <fieldset class="clearfix">
              <p><i class="fa-solid fa-user"></i><input type="text" name="login" placeholder="Никнейм" required></p>
              <p><i class="fa-solid fa-at"></i><input type="email" name="email" placeholder="E-mail" required></p>
              <p id="emailp"></p>
              <p><i class="fa-solid fa-lock"></i><input type="password" name="pass" placeholder="Пароль" required></p>
              <p><input type="submit" value="ПОДТВЕРДИТЬ"></p>
          </fieldset>
      </form>
    </div>
    <!-- Конец Формы -->

    <script>
        async function sendForm(form) {
            let response = await fetch("/Server/Register.php", {
                method: 'POST',
                body: new FormData(form),
            });
            let result = await response.text();
            if (result == "exist") {
                emailp.innerText = "Такой пользователь уже существует";
                setTimeout(()=>{
                    emailp.innerText = "";
                }, 3000);
            } else if (result == "ok"){
                setTimeout(()=>{
                  alert("Вы успешно зарегестрировались");
                }, 5000);
                location.href = "/Cabin.php";
            }
            else { alert("Неизвестная ошибка"); }
        }
    </script>

    <script src="/assets/HeaderButton.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
  </body>
</html>