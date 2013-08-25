<?php
	$HOST = "localhost";
	$USER = "ezapp916_admin";
	$PASS = "tony870331";
	//$DATABASE = "trains";
	$DATABASE = "ezapp916_baoguo";
	$con = mysql_connect($HOST, $USER, $PASS);
	$db = mysql_select_db($DATABASE, $con);

