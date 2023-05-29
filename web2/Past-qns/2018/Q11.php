<?php

if(isset($_POST['submit']))
{

    $a = $_POST['a'];
    $b = $_POST['b'];
    
    $c = $a + $b;
    
    echo "The sum of given number is $c";
}
else{
    
    print <<<HTML
<!DOCTYPE html>
<html lang="en">
    <head>
    <title>Document</title>
</head>
<body>
    <form action="<?php $_SERVER[PHP_SELF]?>" method="post">
    <h1>Form</h1>
    <table>
    <tr>
        <td>
            Number A: 
        </td>
        <td>
            <input type="text" name ="a">
        </td>
    </tr>
    <tr>
        <td>
            Number B: 
        </td>
        <td>
            <input type="text" name ="b">
        </td>
    </tr>
        <br><br>
        <tr>
            <td></td>
            <td><input type="submit" name="submit"></td>
        </tr>
    </table>
</form>    

</body>
</html>

HTML;
}
            ?>