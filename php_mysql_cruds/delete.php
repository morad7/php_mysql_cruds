<?php

	include('class/mysql_crud.php');
	global $sadb;
	
	$sadb->delete('test','id=5'); // Table name, WHERE conditions
	$res = $sadb->getResult();
	
	echo "<pre>";
	print_r($res);
	echo "</pre>";
	
?>