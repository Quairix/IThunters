<?php
    if (isset($_POST['login'])) { $login = $_POST['login']; if ($login == '') { unset($login);} } 
    if (isset($_POST['password'])) { $password=$_POST['password']; if ($password =='') { unset($password);} }
 if (empty($login) or empty($password))
    {
    exit ("Вы ввели не всю информацию, вернитесь назад и заполните все поля!");
    }
    //если логин и пароль введены, то обрабатываем их, чтобы теги и скрипты не работали, мало ли что люди могут ввести
    $login = stripslashes($login);
    $login = htmlspecialchars($login);
    $password = stripslashes($password);
    $password = htmlspecialchars($password);
 //удаляем лишние пробелы
    $login = trim($login);
    $password = crypt(trim($password));
	

include("connectDB.php");
 // проверка на существование пользователя с таким же логином
 $sql = "SELECT * FROM users WHERE login='$login'";
    $result = $conn->query($sql);
    if ($result->num_rows > 0) {
		exit ("Введённый вами логин уже зарегистрирован. Введите другой логин.");
    }else{
 // если такого нет, то сохраняем данные
 $sql = "INSERT INTO users (login,password,privilege) VALUES('$login','$password',2)";

  $result2 = $conn->query($sql);

    // Проверяем, есть ли ошибки
    if ($result2=='TRUE')
    {
    echo "Вы успешно зарегистрированы! Теперь вы можете зайти на сайт. <a href='index.php'>Главная страница</a>";
    }
 else {
    echo "Ошибка! Вы не зарегистрированы.";
    }
	}
    ?>