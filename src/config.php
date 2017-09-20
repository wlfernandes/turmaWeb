<?php

$conn = 'mysql:host=localhost;dbname=quality';

try {
	$db = new PDO($conn, 'root', '');
	$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
	if($e->getCode() == 1049){
		echo "Banco de dados errado.";
	}else{
		echo $e->getMessage();
	}
}