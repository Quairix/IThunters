<?php
   session_start();
	include("connectDB.php");
   ?>
   <!DOCTYPE html>
<html lang="ru-RU">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width">
    <link rel="stylesheet" href="./styles/style.css" type="text/css" media="all">
    <link rel="icon" href="./images/favicon.ico" type="image/x-icon" />
    <title>IThunters - Центр компетенции IT-специалистов</title>
    <link href='https://fonts.googleapis.com/css?family=Montserrat' rel='stylesheet' />
</head>
<body>
    <div class="top-site">
        <nav class ="head">
            <ul>
                <li style="margin-right: 100px;    color: blue;
    background: inherit;
    display: block;
    position: relative;
    float: left;
    padding: 10px;
    margin-left: 40px;
    font-size: 18px;
    font-weight: 400;">
                    <a href="../">
                        <font style="font-weight:bold; color:#1D6AFF;">IT</font><font style="border: 1px solid blue; border-left: none; padding-top:3px; padding-bottom:3px;">hunters</font>
                    </a>
                </li>
                <li class="head-link">
                    <a href="./tests.html">Тестирования</a>
                </li>
                <li class="head-link">
                    <a href="">Сертификация</a>
                </li>
                <li class="head-link">
                    <a href="">О нас</a>
                </li>
                <li class="head-link">
                    <a href="">Контакты</a>
                </li>
                <li id="lc">
                    <a href="./complete.php"><img src="<?php
		if (empty($_SESSION['login']) or empty($_SESSION['avatar']))
		{
		echo "images/ava.png";
		}
		else
		{
		echo $_SESSION['avatar'];
		}
?>" alt="" class="round"></a>
                </li>
                <li id="number">
                    8-800-555-35-35
                </li>
            </ul>

        </nav>
        <div id="container">
            <div class="row">
                <div class="central">
                    <h2>
                        Центр компетенции IT-специалистов
                    </h2>
                    <p class="text">
                        Бесплатное обучение и повышение специализаций по направлениям на базе бизнес-инкубатора
                    </p><a href="./tests.html">
    <input class="btn-blue" type="button" value="Пройти тестирование" /></a>
</div>
                <div class="right1"></div>
                <div class="right upper">
                    <h3>
                        База знаний
                    </h3>
                    <div class="line"></div>
                    <p class="text">
                        Запрос государственных организаций и бизнеса
                        на подбор специалитста
                        IT-сферы или услуги по реализации IT-задач
                    </p>
                    <input id="btn-ligth" type="button" value="Заказать услугу" />
                </div>
            </div>
            <div class="row">
                <div class="chart" id="graph" data-at="2" data-from="3"></div>
                <script type="text/javascript" src="./js/progress_circle.js"></script>
                <div id="table-langs">
                    <table>
                        <tr>
                            <td>Html,CSS</td>
                            <td>Bitrix24</td>
                            <td>Java</td>
                            <td>C#</td>
                        </tr>
                        <tr>
                            <td>1C</td>
                            <td>C/C++</td>
                            <td>JS</td>
                            <td>.Net</td>
                        </tr>
                    </table>
                </div>
            </div>
        </div>
    </div>
    <div id="container" style="background: url('./images/2main.png') no-repeat center center fixed; height:782px; background-size: cover;">
        <div class="row">
            <div id="test-stats">
                <div class="stats-element">
                    <h3>20</h3>
                    <p>вопросов из IT caths</p>
                </div>
                <div class="stats-element">
                    <h3>25</h3>
                    <p>минут на прохождение</p>
                </div>
                <div class="stats-element">
                    <h3>%</h3>
                    <p>онлайн подсчёт результатов</p>
                </div>
            </div>
            <div class="right-testing">
                <font style="font-weight: bold;
                    font-size: 16px;
                    line-height: 20px; margin-right: 50px">
                    Тестирование
                </font>
                <div class="line"></div>
            </div>
        </div>
        <div class="row" style="margin-top:-40px">
            <div class="central2">
                <div style="display:inline-block; height: 100px; background:inherit;">
                    <img src="./images/arrow.png" style="vertical-align: middle; display: block; height:28px;" />
                </div>
                <div id="central21">
                    <p style="font-weight: bold;font-size: 16px;">
                        <b>Базовый</b>
                    </p>
                    <p style="width: 297px;">
                        Определение уровня и вектора развития специалиста
                    </p>
                    <h2>
                        Попробуй меня пройти!
                    </h2>
                    <input class="btn-blue" type="button" value="Начать тестирование" />
                </div>
                <div style="display:inline-block; height: 100px; background:inherit;">
                    <img src="./images/arrow.png" style="vertical-align: middle; display: block; -webkit-transform: scaleX(-1); transform: scaleX(-1); height:28px;" />
                </div>
                <div style="position:relative; padding-left:120px; display:inline-block; background:inherit;">
                    <img src="./images/cube.png" />
                </div>
            </div>
        </div>
        <div class="row">
            <nav id="center-cat">
                <ul>
                    <li class="center-cat-link center-cat-link-selected">
                        Базовый
                    </li>
                    <li class="center-cat-link">
                        Разработка на C/C++
                    </li>
                    <li class="center-cat-link">
                        Bitrix24
                    </li>
                    <li class="center-cat-link">
                        Вёрстка и JavaScript
                    </li>
                    <li class="center-cat-link">
                        Java
                    </li>
                    <li class="center-cat-link">
                        C# и .Net
                    </li>
                    <li class="center-cat-link">
                        1C
                    </li>
                </ul>

            </nav>
        </div>
    </div>
	<footer style="height:80px">
            <ul>
                <li style="margin-right: 100px;    color: blue;
    background: inherit;
    display: block;
    position: relative;
    float: left;
    padding: 10px;
    margin-left: 40px;
    font-size: 18px;
    font-weight: 400;">
                    <a href="../">
                        <font style="font-weight:bold; color:#1D6AFF;">IT</font><font style="border: 1px solid blue; border-left: none; padding-top:3px; padding-bottom:3px;">hunters</font>
                    </a>
                </li>
                <li class="head-link">
                    <a href="./tests.html">Тестирования</a>
                </li>
                <li class="head-link">
                    <a href="">Сертификация</a>
                </li>
                <li class="head-link">
                    <a href="">О нас</a>
                </li>
                <li class="head-link">
                    <a href="">Контакты</a>
                </li>
                <li id="lc">
                    <a href="./complete.php"><img src="<?php
		if (empty($_SESSION['login']) or empty($_SESSION['avatar']))
		{
		echo "image/ava.png";
		}
		else
		{
		echo $_SESSION['avatar'];
		}
?>" alt="" class="round"></a>
                </li>
                <li id="number">
                    8-800-555-35-35
                </li>
            </ul>

        </footer>
</body>
</html>
