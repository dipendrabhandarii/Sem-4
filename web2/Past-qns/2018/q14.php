<?php
$conn = mysqli_connect('localhost','root','','db');

if($conn->connect_error)
{
   die("Error in connection");
}

$sql = 'SELECT * from admin';

$result = $conn->query($sql);
// $result = mysqli_query($conn,$sql);
if(!$result)
{
    echo "Error in reading";
}
//USERNAME PASSWORD
// admin 123
// gaurav 123
// dipendra 123 
// $result = array(
//     array(
//             'username' => 'admin',
//             'password' => 123
//     ),
//     array(
//             'username' => 'gaurav',
//             'password' => 123
//     ),
//     array(
//             'username' => 'dipendra',
//             'password' => 123
//     )
// );
// $row =  array(
//                 'username' => 'dipendra',
//                 'password' => 123
//             );

// while($row = mysqli_fetch_assoc($result))
// {
    
// }
if($result->num_rows > 0)
{

    echo '<table border="0" cellpadding="2" cellspacing="2">
        <tr>
            <th>Username</th>
            <th>Password</th>
            </tr>';
    echo '<tr>';
    while($row = $result->fetch_assoc())
    {        
        echo "<Tr><td>$row[username]</td>";
        echo "<td>$row[password]</td></Tr>";
    }
    echo '</table>';
    
}

?>