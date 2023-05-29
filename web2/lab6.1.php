<?php
//using procedural approach
$host = "localhost";
$username = "root";
$password='';
$dbname = "web_dbms";

// Create a database connection
$conn = mysqli_connect($host, $username,'', $dbname);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
else{
echo "procedural approach>>Connected successfully<br>";}
?>
<?php
//using object oriented approach
$host = "localhost";
$username = "root";
$password ="";
$dbname = "web_dbms";

// Create a database connection
$conn = new mysqli($host, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
echo "object oriented >Connected successfully";
?>