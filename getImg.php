<?php
    if (isset($_POST['login'])) { $login = $_POST['login']; if ($login == '') { unset($login);} } 
    if (isset($_POST['password'])) { $password=$_POST['password']; if ($password =='') { unset($password);} }
 if (empty($login) or empty($password))
    {
    exit ("�� ����� �� ��� ����������, ��������� ����� � ��������� ��� ����!");
    }
    //���� ����� � ������ �������, �� ������������ ��, ����� ���� � ������� �� ��������, ���� �� ��� ���� ����� ������
    $login = stripslashes($login);
    $login = htmlspecialchars($login);
    $password = stripslashes($password);
    $password = htmlspecialchars($password);
 //������� ������ �������
    $login = trim($login);
    $password = crypt(trim($password));
	

include("connectDB.php");
 // �������� �� ������������� ������������ � ����� �� �������
 $sql = "SELECT * FROM users WHERE login='$login'";
    $result = $conn->query($sql);
    if ($result->num_rows > 0) {
		exit ("�������� ���� ����� ��� ���������������. ������� ������ �����.");
    }else{
 // ���� ������ ���, �� ��������� ������
 $sql = "INSERT INTO users (login,password,privilege) VALUES('$login','$password',2)";

  $result2 = $conn->query($sql);

    // ���������, ���� �� ������
    if ($result2=='TRUE')
    {
    echo "�� ������� ����������������! ������ �� ������ ����� �� ����. <a href='index.html'>������� ��������</a>";
    }
 else {
    echo "������! �� �� ����������������.";
    }
	}
    ?>