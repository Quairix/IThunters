<?php 
   session_start();
   echo "<meta charset=\"UTF-8\" />";
if    (empty($_SESSION['login'])) 
	  {
	  exit ("Неавторизованный запрос<a    href='index.php'>Главная    страница</a> <script type='text/javascript'>setTimeout(function(){
window.location = \"http://localhost\";}, 3000);</script>");
	  }
			//unset($_SESSION['password']);
            unset($_SESSION['login']); 
            unset($_SESSION['id']);
			
		// setcookie("login", "", time()-60*60*24);
		 //setcookie("id", "", time()-60*60*24);
    exit ("Выходим... <script type='text/javascript'>setTimeout(function(){
  window.location = \"http://localhost\";}, 3000);</script>");
		?>