<?php
   session_start();
	include("connectDB.php");
   ?><!DOCTYPE html>
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
    <div class="container" style="height:850px">
        <nav class="head black">
            <ul>
                <li style="margin-right: 100px;    color: blue; background: inherit;display: block;position: relative; float: left;padding: 10px; margin-left: 40px; font-size: 18px;font-weight: 400;">
                    <a href="../">
                        <font style="font-weight:bold; color:#1D6AFF;">IT</font><font id="black" style="border: 1px solid blue; border-left: none; padding-top:3px; padding-bottom:3px;">hunters</font>
                    </a>
                </li>
                <li class="head-link">
                    <a id="black" href="./tests.html">Тестирования</a>
                </li>
                <li class="head-link">
                    <a id="black" href="">Сертификация</a>
                </li>
                <li class="head-link">
                    <a id="black" href="">О нас</a>
                </li>
                <li class="head-link">
                    <a id="black" href="">Контакты</a>
                </li>
                <li id="lc">
                    <a id="black" href="./auth.php"><img src="<?php
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
        <div class="profile-body">
            <div class="row">
                <div class="central" style="background: url('./images/profile-central.png') no-repeat bottom center; background-size:cover; width:350px;
height: 250px;">
                    <h3 style="display:inline-block; margin-right:40px;">
                        Профиль
                    </h3>
                    <div class="line"></div>
                    <p class="black">
                        <a id="black" href="./FixWork.html">Тестирования</a>
                    </p>
                    <p class="black">
                        <a id="black" href="./FixWork.html">База вакансий</a>
                    </p>

                </div>
                <div class="profile-data">
                    <div class="minrow">
                        <div class="inline">
                            <img src="../<?php
		if (empty($_SESSION['login']) or empty($_SESSION['avatar']))
		{
		echo "image/ava.png";
		}
		else
		{
		echo $_SESSION['avatar'];
		}
?>" height="120" />
                        </div>
                        <div class="inline">
                            <div>
                                <p class="black"><?php
		if (empty($_SESSION['login']) or empty($_SESSION['last_name']))
		{
		echo "-";
		}
		else
		{
		echo $_SESSION['last_name'];
		}
?></p>
                                <p class="black"><?php
		if (empty($_SESSION['login']) or empty($_SESSION['first_name']))
		{
		echo "-";
		}
		else
		{
		echo $_SESSION['first_name'];
		}
?></p>
                            </div>
                            <div class="contacts">
                                <p class="black">Email</p>
                                <p class="black">Mobila</p>
                            </div>
                        </div>
                        <div class="inline full">
                            <div class="half">Общий балл <font style="font-size:30px; font-weight:bold; margin-left: 150px;">2</font>\10</div>
                            <div class="half" style="height:25%; min-height:0px"><progress style="width:100%; height:15px; " max="100" value="10"></progress></div>
                            <div class="half" style="height:25%; min-height:0px">
                                st <font style="margin-left:50px;">junoir</font><font style="margin-left:120px;">middle</font>
                                <font style="margin-left:180px;">senior</font>
                            </div>
                        </div>
                    </div>
                    <div class="minrow">
                        <h3>КОМПЕТЕНЦИИ</h3>
                        <div class="minrow">
                            <div class="minrow">
                                <div class="inline third">
                                    <p class="black">
                                        Система<font style="margin-left:30px">10%</font>
                                    </p>
                                    <progress style="width:100%; height:15px; " max="100" value="10"></progress>
                                </div>
                                <div class="inline third">
                                    <p class="black">
                                        Администрование БД<font style="margin-left:30px">10%</font>
                                    </p>
                                    <progress style="width:100%; height:15px; " max="100" value="10"></progress>
                                </div>
                                <div class="inline third">
                                    <p class="black">
                                        Java<font style="margin-left:30px">10%</font>
                                    </p>
                                    <progress style="width:100%; height:15px; " max="100" value="10"></progress>
                                </div>
                            </div>
                            <div class="minrow">
                                <div class="inline third">
                                    <p class="black">
                                        ИКС и Сети<font style="margin-left:30px">10%</font>
                                    </p>
                                    <progress style="width:100%; height:15px; " max="100" value="10"></progress>
                                </div>
                                <div class="inline third">
                                    <p class="black">
                                        C++<font style="margin-left:30px">10%</font>
                                    </p>
                                    <progress style="width:100%; height:15px; " max="100" value="10"></progress>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="minrow">
                        <h3>РЕКОМЕНДАЦИИ</h3>
                        <div class="minrow">
                            <div class="minrow recom">
                                <div class="inline recom-text" style="position: relative; top:-13px"><b style="color:blue; ">Искусственный интеллект</b></div>
                                <div class="inline recom-text" style="width:550px; margin-top:10px;">Вам рекомендовано данное направление на основании пройденного теста </div>
                            </div>
                            <div class="minrow recom">
                                <div class="inline recom-text" style="position: relative; top:-3px">
                                    <p class="black">ИКС и Сети</p>
                                    <p class="black">Администрирование за БД</p>
                                    <p class="black">Java</p>
                                </div>
                                <div class="inline recom-text" style="position: relative; top:-16px; width:550px; ">Изучите данные сферы. Вам они необходимы  для повышение квалификации и общий балл вашей квалификаций будет повышен. </div>
                            </div>
                        </div>
                    </div>
                    <div class="minrow" style="margin-bottom:150px; clear:both;">
                        <h3>ВАКАНСИИ</h3>
                        <div class="minrow">
                            <div class="minrow recom">
                                <div class="inline recom-text" style="position: relative; top:-13px"><b style="color:blue; ">Искусственный интеллект</b></div>
                                <div class="inline recom-text" style="width:550px; margin-top:10px;">Вам рекомендовано данное направление на основании пройденного теста </div>
                            </div>
                            <div class="minrow recom">
                                <div class="inline recom-text" style="position: relative; top:-3px">
                                    <p class="black">ИКС и Сети</p>
                                    <p class="black">Администрирование за БД</p>
                                    <p class="black">Java</p>
                                </div>
                                <div class="inline recom-text" style="position: relative; top:-16px; width:550px; ">Изучите данные сферы. Вам они необходимы  для повышение квалификации и общий балл вашей квалификаций будет повышен. </div>
                            </div>
                        </div>
                    </div>
                </div>
                
            </div>
        </div>
    </div>
    <div class="container" style="height:850px">
        <footer>
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

        </footer>
    </div>
</body>
</html>