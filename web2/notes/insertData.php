<?php
	$host="localhost";
	$username="root";
	$password="";
	$db="db_asian";

	$name="Ram";
	$address="KTM";
	$gender="male";
	$contact="";
	$image="";

	// $con=mysql_connect($host,$username,$password);
	try{
	$con=new PDO("mysql:host=$host;dbname=$db",$username,$password);
	//to enable error handling
	  $con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

	  $query="insert into tbl_students (name,address,contact,gender,image) values(?,?,?,?,?)";
	  $stmt=$con->prepare($query);
	  $stmt->bindParam(1,$name);
	  $stmt->bindParam(2,$address);
	  $stmt->bindParam(4,$gender);
	  $stmt->bindParam(3,$contact);
	  $stmt->bindParam(5,$image);
	  $stmt->execute();
	  echo "success";
}
catch(PDOException $ex){
	die($ex->getMessage());
}

?>