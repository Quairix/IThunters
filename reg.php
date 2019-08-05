<html>
    <head>
    <title>Регистрация</title>
	<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width">
    <link rel="stylesheet" href="./styles/style.css" type="text/css" media="all">
	<link href='https://fonts.googleapis.com/css?family=Montserrat' rel='stylesheet' />
    </head>
    <body id="reg">
    <form action="save_user.php" method="post" id="form-compl">
    <h2>Регистрация</h2>
    <!--**** save_user.php - это адрес обработчика.  То есть, после нажатия на кнопку "Зарегистрироваться", данные из полей  отправятся на страничку save_user.php методом "post" ***** -->
		<p>

    <label>Ваш логин:<br></label>
    <input name="login" type="text" size="15" maxlength="15" id="inp" placeholder="Логин или телефон" style="color:white">
    </p>
<!--**** В текстовое поле (name="login" type="text") пользователь вводит свой логин ***** -->
<p>
    <label>Ваш пароль:<br></label>
    <input name="password" type="password" size="15" maxlength="15" id="inp" placeholder="Пароль" style="color:white">
    </p>
<!--**** В поле для паролей (name="password" type="password") пользователь вводит свой пароль ***** --> 
<p>
    <input type="submit" name="submit" value="Зарегистрироваться" class="btn-blue">
<!--**** Кнопочка (type="submit") отправляет данные на страничку save_user.php ***** --> 
</p>
<a href="./auth.php">
Войти
</a>
<br>
<a href="./FixWork.php">
Забыл пароль
</a>
</form>
    </body>
    </html>