<?php
   session_start();
   echo "<meta charset=\"UTF-8\" />";
if (isset($_POST['login'])) { if(!preg_match("/^[a-zA-Z0-9]{3,30}$/", $_POST["name"])){
$login = $_POST['login']; if ($login == '') { unset($login);} } }
 if (isset($_POST['password'])) { $password=$_POST['password']; if ($password =='') { unset($password);} }
 //заносим введенный пользователем пароль в переменную $password, если он пустой, то уничтожаем переменную
if (empty($login) or empty($password)) //если пользователь не ввел логин или пароль, то выдаем ошибку и останавливаем скрипт
 {
 exit ("Заполнены не все поля!");
 }
 //если логин и пароль введены,то обрабатываем их, чтобы теги и скрипты не работали, мало ли что люди могут ввести
$password = stripslashes($password);
 $password = htmlspecialchars($password);
//удаляем лишние пробелы
 $login = trim($login);
 $password = trim($password);
 
include("connectDB.php");
 
$sql ="SELECT user_id, login, password, privilege, avatar, last_name, first_name FROM users WHERE login='$login'"; //извлекаем из базы все данные о пользователе с введенным логином
 $result = $conn->query($sql);
 if ($result->num_rows < 1) {
		exit ("Неверный логин или пароль.<script type='text/javascript'>setTimeout(function(){
 window.location = \"http://localhost\";}, 3000);</script>");
 }
 else {
	$myrow = $result->fetch_assoc();
 //если существует, то сверяем пароли
 $passwordHash = crypt($password, $myrow['password']);
 if ($myrow['password']== $passwordHash) {
	 $_SESSION['login']=$login;
	 $_SESSION['id']=$myrow['user_id'];
	 $_SESSION['privilege']=$myrow['privilege'];
	 $_SESSION['avatar']=$myrow['avatar'];
	 $_SESSION['last_name']=$myrow['last_name'];
	 $_SESSION['first_name']=$myrow['first_name'];
	 $_SESSION['password']=$passwordHash;
/*	if ($_POST['save'] == "on") {
		 setcookie("login", $myrow['login'], time()+60*60*24);
		 setcookie("id", $myrow['user_id'], time()+60*60*24);
	 }*/
	 
	 echo "Спасибо что зашли, <b>$login</b><img height=\"30\" src=\"".$myrow['avatar']."\"/>! Ваш статус:";
	 if($myrow['privilege']==1)
		 echo "Admin";
	 else
		 echo "User(".$myrow['privilege'].")";
	 echo "   <a href='http://localhost'>Главная страница</a>
		<script type='text/javascript'>setTimeout(function(){
 window.location = \"http://localhost\";}, 3000);</script>";
 
 }
 else {
 exit ("Неверный логин или пароль. <script type='text/javascript'>setTimeout(function(){
 window.location = \"http://localhost\";}, 3000);</script>");
 }
 }
 ?>