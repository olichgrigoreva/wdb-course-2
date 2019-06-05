<?php
ini_set("display_errors", 1);
error_reporting(E_ALL);

//Инициализируем сессию:
session_start();

//Если сессии нет, то перенаправление на страницу регистрации
if ($_SESSION['auth']==NULL){
	header("Location: auth.htm");	
	exit;
}
?>

<html>
	<head>
	<meta charset="utf-8" />
	<link rel=stylesheet href="css/notepad.css">
	<title>Онлайн записная книжка</title>
	
	<script>
	document.addEventListener("DOMContentLoaded", loaded);
	function loaded() {
		alert("Добро пожаловать пользователь %UserName%, ваш последний визит %Timestamp%");
	}
	</script>
  
	
<div class="header">
<header>Super NoteBook<br/>Добро пожаловать</header>

<div class="search">

<nav></nav>
	<main>
	</main>
	<aside>
	Редактирование</br>
	<input type="search" name="search" placeholder="Поиск" class="search">
	</aside>
	
<div class="body">
<div class="footer">
<footer>Онлайн записная книжка ©2019</footer>
</head>
</html>

