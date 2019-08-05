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
    <div class="body-test">
        <nav class="head" id="black">
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
        <div id="test-container">
            <div class="row">
                <div class="central" id="test">
                    <div class="info-test">
                        <h3>
						    
                    </div>
                    <?php
		if (empty($_SESSION['login']) or empty($_SESSION['id']))
		{
		echo "<div style=\"font-size: 30px; text-align:right; color:black\">Вы еще не авторизованы</div> 
                        <p style=\"color:black\">  
                            Для дальнейшей работы вам необходимо авторизоваться!
                        </p>";
		include('login_form.php');
		}
		else
		{
		echo "<div style=\"font-size: 30px;text-align:right\">Вы вошли на сайт, как <i style=\"font-weight: bold;\">".$_SESSION['login'].
		"</i> <p style='margin: 80px; color:white;'><a  href='profile.php' class='btn-blue'  style=\"color:white\">Личный кабинет</a> </p> <p ><a href='exit.php'  class='btn-blue'  style=\"color:white\"\">Выход</a></p></div>";
		}
?>
                </div>
                <div class="right" id="compl">
                    <img src="images/кубик.png" alt=":(">
                </div>
            </div>
        </div>
    </div>
</body>
</html>