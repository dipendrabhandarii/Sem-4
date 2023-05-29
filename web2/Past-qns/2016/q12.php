<?php
//make connection
$conn = new mysqli('localhost', 'root', '');

if($conn->connect_error)
{
    die("Connection failed : ". $conn->connect_error);
}

$conn->select_db('db');

$sql = "SELECT itemid,itemdesc,rate,qty FROM bill";

$result = $conn->query($sql);
if($result){

    echo "<table border =1 >";
    while($row = $result->fetch_assoc())
    {
        echo '<tr>
        <td>'.$row["itemid"].'</td> 
        <td>'.$row["itemdesc"].'</td> 
        <td>'.$row["rate"].'</td> 
        <td>'.$row["qty"].'</td> 
        </tr>';
    }
    
    echo "</table>";
}


?>