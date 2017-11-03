<?php
	include('../../inc/functions.php');
	session_start();
	unset($_SESSION['login']);
	header('location:'.str_replace("templates/","",base_url()).'?l');
	exit();
?>