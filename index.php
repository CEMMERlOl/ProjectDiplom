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
    <link rel="stylesheet" href="/assets/indexconfig.css">
    <link rel="shortcut icon" href="Images/KIK.ico">
    <title>KIK</title>
    <style>
    @media screen and (max-width: 1660px) {
        .flexrow {
            margin-top: 44px;
            margin-bottom: 44px;
        }
    }
    </style>
  </head>
  <body>
    <!-- Начало Хеддера -->
    <?php require_once("components/header.php")?>
    <!-- Конец Хеддера -->

    <!-- Начало Тело -->
    <div>
        <!-- Начало Новинки -->
        <h2 class="justify_center Headline">Новинки</h2>
        <div class="justify_center mt-4">
            <div class="carouselWidth">
                <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="true">
                    <div class="carousel-indicators">
                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="3" aria-label="Slide 4"></button>
                    </div>
                    <div class="carousel-inner carouselWidth">
                        <div class="carousel-item active">
                            <div class="row">
                                <div name="ClassChange" class="col-md-9 colheight1 imgcol">
                                    <a href="CallofDutyModernWarfare2" class="newcarimg d-block Codimg"></a>
                                </div>
                                <div name="ClassChange" class="col-md-3 colheight1 textcol">
                                    <div class="mt-4"><h4>COD Modern Warfare 2</h4></div>
                                    <div class="mt-4 pricecolor"><h3>2300 руб.</h3></div>
                                    <div class="mt-5">
                                        Издатель: Infinity Ward<br>
                                        Год выхода: 28 октября 2022<br>
                                        Платформы: Windows, Xbox Series X/S, PlayStation 5, Xbox One, PlayStation 4<br>
                                        Жанр: Экшен<br>
                                        Режимы: Однопользовательская игра, Многопользовательская игра 
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <div class="row">
                                <div name="ClassChange" class="col-md-9 colheight1 imgcol">
                                    <a href="NoMansSky" class="newcarimg d-block Skyimg"></a>
                                </div>
                                <div name="ClassChange" class="col-md-3 colheight1 textcol">
                                    <div class="mt-4"><h4>No Man's Sky</h4></div>
                                    <div class="mt-4 pricecolor"><h3>1600 руб.</h3></div>
                                    <div class="mt-5">
                                        Издатель: Hello Games<br>
                                        Год выхода: 12 августа 2016<br>
                                        Платформы: Windows, Xbox Series X/S, PlayStation 5, Nintendo Switch, Xbox One, PlayStation 4<br>
                                        Жанр: Приключения<br>
                                        Режимы: Однопользовательская игра, Многопользовательская игра
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <div class="row">
                                <div name="ClassChange" class="col-md-9 colheight1 imgcol">
                                    <a href="Stray" class="newcarimg d-block Strayimg"></a>
                                </div>
                                <div name="ClassChange" class="col-md-3 colheight1 textcol">
                                    <div class="mt-4"><h4>Stray</h4></div>
                                    <div class="mt-4 pricecolor"><h3>650 руб.</h3></div>
                                    <div class="mt-5">
                                        Издатель: Annapurna Interactive<br>
                                        Год выхода: 19 июля 2022<br>
                                        Платформы: Windows, PlayStation 5, PlayStation 4<br>
                                        Жанр: Приключения<br>
                                        Режимы: Однопользовательская игра
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <div class="row">
                                <div name="ClassChange" class="col-md-9 colheight1 imgcol">
                                    <a href="WarhammerTotalWar3" class="newcarimg d-block Warimg"></a>
                                </div>
                                <div name="ClassChange" class="col-md-3 colheight1 textcol">
                                    <div class="mt-4"><h4>Total War: Warhammer III</h4></div>
                                    <div class="mt-4 pricecolor"><h3>3500 руб.</h3></div>
                                    <div class="mt-5">
                                        Издатель: Creative Assembly<br>
                                        Год выхода: 17 февраля 2022<br>
                                        Платформы: Windows, Linux, MacOS<br>
                                        Жанр: Стратегия<br>
                                        Режимы: Однопользовательская игра, Многопользовательская игра
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                    </button>
                </div>
            </div>
        </div>
        <!-- Конец Новинки -->
        <!-- Начало -->
        <h2 class="justify_center Headline mt-5">Выгодные предложения</h2>
        <div class="row flexrow">
            <div class="col-5">
                <a href="CallofDutyModernWarfare2" class="text-decoration-none newblockimg d-block Codblockimg">
                    <div class="Treshid margininner">
                        <div class="d-flex justify-content-center"><h2>COD Modern Warfare 2</h2></div>
                        <div class="pricecolor2 d-flex justify-content-center"><h1>2300 руб.</h1></div>
                        <div class="d-flex justify-content-center fontblock">
                            Издатель: Infinity Ward<br>
                            Год выхода: 28 октября 2022<br>
                            Платформы: Windows, Xbox Series X/S, PlayStation 5, Xbox One, PlayStation 4<br>
                            Жанр: Экшен<br>
                            Режимы: Однопользовательская игра, Многопользовательская игра 
                        </div>
                    </div>
                </a>
                <a href="NoMansSky" class="text-decoration-none newblockimg d-block Skyblockimg">
                    <div class="Treshid margininner">
                        <div class="d-flex justify-content-center"><h2>No Man's Sky</h2></div>
                        <div class="pricecolor2 d-flex justify-content-center"><h1>1600 руб.</h1></div>
                        <div class="d-flex justify-content-center fontblock">
                            Издатель: Hello Games<br>
                            Год выхода: 12 августа 2016<br>
                            Платформы: Windows, Xbox Series X/S, PlayStation 5, Nintendo Switch, Xbox One, PlayStation 4<br>
                            Жанр: Приключения<br>
                            Режимы: Однопользовательская игра, Многопользовательская игра
                        </div>
                    </div>
                </a>
                <a href="Stray" class="text-decoration-none newblockimg d-block Strayblockimg">
                    <div class="Treshid margininner">
                        <div class="d-flex justify-content-center"><h2>Stray</h2></div>
                        <div class="pricecolor2 d-flex justify-content-center"><h1>650 руб.</h1></div>
                        <div class="d-flex justify-content-center fontblock">
                            Издатель: Annapurna Interactive<br>
                            Год выхода: 19 июля 2022<br>
                            Платформы: Windows, PlayStation 5, PlayStation 4<br>
                            Жанр: Приключения<br>
                            Режимы: Однопользовательская игра
                        </div>
                    </div>
                </a>

            </div>
            <div class="col-5">
                <a href="WarhammerTotalWar3" class="text-decoration-none newblockimg d-block Warblockimg">
                    <div class="Treshid margininner">
                        <div class="d-flex justify-content-center"><h2>Total War: Warhammer III</h2></div>
                        <div class="pricecolor2 d-flex justify-content-center"><h1>3500 руб.</h1></div>
                        <div class="d-flex justify-content-center fontblock">
                            Издатель: Creative Assembly<br>
                            Год выхода: 17 февраля 2022<br>
                            Платформы: Windows, Linux, MacOS<br>
                            Жанр: Стратегия<br>
                            Режимы: Однопользовательская игра, Многопользовательская игра
                        </div>
                    </div>
                </a>
                <a href="DyingLight2" class="text-decoration-none newblockimg d-block Dieblockimg">
                    <div class="Treshid margininner">
                        <div class="d-flex justify-content-center"><h2>Dying Light 2 Stay Human</h2></div>
                        <div class="pricecolor2 d-flex justify-content-center"><h1>2499 руб.</h1></div>
                        <div class="d-flex justify-content-center fontblock">
                            Издатель: Techland<br>
                            Год выхода: 4 февраля 2022<br>
                            Платформы: Windows, Xbox Series X/S, PlayStation 5, Nintendo Switch, Xbox One, PlayStation 4<br>
                            Жанр: Экшен<br>
                            Режимы: Однопользовательская игра, Кооперативная игра
                        </div>
                    </div>
                </a>
                <a href="CorssaAssetto" class="text-decoration-none newblockimg d-block Corsablockimg">
                    <div class="Treshid margininner">
                        <div class="d-flex justify-content-center"><h2>Assetto Corsa</h2></div>
                        <div class="pricecolor2 d-flex justify-content-center"><h1>435 руб.</h1></div>
                        <div class="d-flex justify-content-center fontblock">
                            Издатель: Kunos Simulazioni<br>
                            Год выхода: 19 декабря 2014<br>
                            Платформы: Windows, PlayStation 4, Xbox One<br>
                            Жанр: Гонки, Симулятор<br>
                            Режимы: Однопользовательская игра, Многопользовательская игра
                        </div>
                    </div>
                </a>
            </div>
        </div>
    </div>
    <!-- Конец Тело -->
    <!-- Начало Футера -->
    <?php require_once("components/footer.php")?>
    <!-- Конец Футера -->

    
    <script src="/assets/HeaderButton.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
  </body>
</html>