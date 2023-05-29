<html>
    <head>
        <title>Iput data to file.</title>
    </head>

    <body>
        <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']) ?>" method="post">
        <label for="data">Input data</label>

        <input type="text" name ="data">
        <br>
        <input type="submit" value="submit" name="submit">
</form>
    </body>
</html>

<?php

if(isset($_POST['submit']))
{
    $str = $_POST['data'];
    echo $str;
    // $str = 'Coding in PHP and HTML';
    $file = fopen('coding.txt','w');
    file_put_contents('coding.txt',$str);
}


?>