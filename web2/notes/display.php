<?php
	
	try{
	$server="localhost";
	$username="root";
	$password="";
	$db="web_dbms";
		$c=new PDO("mysql:host=$server;dbname=$db",$username,$password);
		$c->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		$q="select * from tbl_students";
		$prepare=$c->prepare($q);
		$prepare->execute();
		$data=$prepare->fetchAll();
		print_r($data);
	}
	catch(PDOException $e){
		die($e->getMessage());
	}

?>