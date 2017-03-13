<?php
	if ($_POST["user"]=="admin" && $_POST["pass"]=="123456" ) {
		session_start();
		$_SESSION["autenticated"] = true;
		$_SESSION["user"] = $_POST["user"];

		header("Location: home.php");
	}
	else {
		header("Location: index.php?=error_login");
	}
?>