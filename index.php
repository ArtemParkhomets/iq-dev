<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/jQueryStyle.css">
    <link rel="stylesheet" href="css/style.css">
    <script type="text/javascript" src="js/jQuery.js"></script>
    <script type="text/javascript" src="js/jQueryUI.js"></script>
    <script type="text/javascript" src="js/RuDatepicker.js"></script>
    <title>WorldBank</title>
</head>
<body>
<header>
    <div class="container">
    <div class="col-logo">
        <div class="logo">
            <img src="images/logo.jpg">
        </div>
        <div class="title">
            <p>WORLD BANK Publications</p>
        </div>
    </div>
    <div class="col-contact">
        <div class="phone">
            <span>8-800-100-5005 <br>+7(3452)522-000</span>
        </div>
    </div>
    </div>
    <div class="nav">
        <ul class="nav-main">
            <a class="nav-item" href="#">
                <p>Кредитные карты</p>
            </a>
            <a class="nav-item active-item" href="#">
                <p>Вклады</p>
            </a>
            <a class="nav-item" href="#">
                <p>Дебетовая карта</p>
            </a>
            <a class="nav-item" href="#">
                <p>Страхование</p>
            </a>
            <a class="nav-item" href="#">
                <p>Друзья</p>
            </a>
            <a class="nav-item" href="#">
                <p>Интернет-банк</p>
            </a>
        </ul>
    </div>
</header>
<main>
    <div class="bread-crumbs">
        <a class="breadcrumbs-text-active" href="#"><p >Главная - </p></a>
        <a class="breadcrumbs-text-active" href="#"><p>Вклады - </p></a>
        <a class="breadcrumbs-text" href="#"><p >Калькулятор</p></a>
    </div>
        <form id="calc-deposit" method="post" class="validate">
            <div class="calculator">
                <p class="calc-title">Калькулятор</p>
                <div class="row">
                    <div class="col-1">
                        <p class="text-input">Дата оформления вклада</p>
                        <p class="text-input">Сумма вклада</p>
                        <p class="text-input">Срок вклада</p>
                        <p class="text-input">Пополнение вклада</p>
                        <p class="text-input">Сумма пополнения вклада</p>
                    </div>
                    <div class="col-2">
                        <div class="inputs">
                            <div class="date input ">
                                <input type="text" id="datepicker" name="date" placeholder="дд.мм.гггг" value="">
                            </div>
                            <div class="input amount">
                                <input class="slider-input" id="amount" type="text" value="" name="depositamount" min="1000" max="3000000">
                                <div class="range-container">
                                    <div id="slider">
                                        <div class="range-text">
                                            <p class="slider-text">1 тыс. руб.</p>
                                            <p class="slider-text">3 000 000</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="input term">
                                <select name="term" id="select_term">
                                    <option value="1" >1 год</option>
                                    <option value="2" >2 года</option>
                                    <option value="3" >3 года</option>
                                    <option value="4" >4 года</option>
                                    <option value="5" >5 лет</option>
                                </select>
                            </div>
                            <div class="input radio">
                                <p  class="p-radio"><input name="repl" type="radio" value="false" checked>Нет</p>
                                <p  class="p-radio"><input name="repl" type="radio" value="true" >Да</p>
                            </div>
                            <div class="input amount">
                                <input class="slider-input2" id="deposit-repl" type="text" value="" name="depositrepl" min="1000" max="3000000">
                                <div class="range-container">
                                    <div id="slider2">
                                        <div class="range-text">
                                            <p class="slider-text">1 тыс. руб.</p>
                                            <p class="slider-text">3 000 000</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="result">
                    <button type="submit" id="submit" name="submit">Рассчитать</button>
                    <p class="resut-text">Результат: <div class="total-sum" id="result"></div></p>
                </div>
            </div>
        </form>
</main>
<footer>
        <div class="footer-main">
            <a class="footer-item" href="#">
                <p>Кредитные карты</p>
            </a>
            <a class="footer-item" href="#">
                <p>Вклады</p>
            </a>
            <a class="footer-item" href="#">
                <p>Дебетовая карта</p>
            </a>
            <a class="footer-item" href="#">
                <p>Страхование</p>
            </a>
            <a class="footer-item" href="#">
                <p>Друзья</p>
            </a>
            <a class="footer-item" href="#">
                <p>Интернет-банк</p>
            </a>
        </div>
</footer>
<script type="text/javascript" src="js/main.js"></script>
</body>
</html>