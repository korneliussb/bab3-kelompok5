<?php

session_start();
if(!isset($_SESSION["user"])) //jangan lupa kurung kalo pake session di sudahmasuk.php { header ); }
	header("Location: login.php");

?>