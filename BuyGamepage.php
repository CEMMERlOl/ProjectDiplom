<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/09f51cc1c0.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="/assets/footer.css">
    <link rel="stylesheet" href="/assets/Tab.css">
    <link rel="stylesheet" href="/assets/header.css">
    <link rel="stylesheet" href="/assets/gamepage.css">
    <link rel="shortcut icon" href="Images/KIK.ico">
    <title>KIK</title>
  </head>
  <body>
    <!-- Начало Хеддера -->
    <?php require_once("components/header.php")?>
    <!-- Конец Хеддера -->
    
    <!-- Начало Таб + Тело -->
        <?php 
        $url = explode("/", $_SERVER['REQUEST_URI']);

        if ($url[1] == 'CallofDutyModernWarfare2') {include_once("components/CODModrnWrfr.php");} else
        if ($url[1] == 'NoMansSky') {include_once("components/Nomnsk.php");} else
        if ($url[1] == 'Stray') {include_once("components/Stray.php");} else
        if ($url[1] == 'WarhammerTotalWar3') {include_once("components/Wrhmmr.php");} else
        if ($url[1] == 'DyingLight2') {include_once("components/Dnglght.php");} else
        if ($url[1] == 'CorssaAssetto') {include_once("components/Crssstt.php");}
        else{
            echo "Неизвестная страница";
        }
        ?>
    <!-- Конец Таб + Тело -->

    <!-- Начало Футера -->
    <?php require_once("components/footer.php")?>
    <!-- Конец Футера -->

    <script src="/assets/HeaderButton.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
  </body>
</html>