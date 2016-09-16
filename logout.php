<?php
		session_Start();
		session_destroy();
		session_unset(); 
		header("Location: login.php");
?>