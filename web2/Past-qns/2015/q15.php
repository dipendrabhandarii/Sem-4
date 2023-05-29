<!DOCTYPE html>
<html lang="en">
<head>
    <title>Document</title>
</head>
<body>
    
    
    <?php
$name = array('R','A');
$age = array(21,20);
$gender = array('M','F');

echo '<table border = 1>
    <tr>
        <td>Name</td>
        <td>Age</td>
        <td>Gender</td>
    </tr>';
for($i = 0; $i < 2; $i++)
{
    echo '<tr>';
    echo "<td>$name[$i]</td>";
    echo "<td>$age[$i]</td>";
    echo "<td>$gender[$i]</td>";
    echo '</tr>';

}

echo '</table>';

?>
</body>
</html>