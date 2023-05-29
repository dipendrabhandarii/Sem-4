<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Search Value in Array</title>
</head>
<body>
    <?php
        function Search($arr, $key)
        {
            if(in_array($key, $arr))
            {
                return true;
            }
            else {
                return false;
            }
        }


    ?>

    <form method="post" action="<?php $_SERVER['PHP_SELF'] ?>">
        <label for="Name">Name</label>
        <input type="text" name="key">
        <input type="submit" value="submit" name="submit">
</form>

<?php
    if(isset($_POST['submit']))
    {
        $arr = ['nepal', 'india', 'china'];
        $key = $_POST['key'];

        if(Search($arr, $key))
        {
            echo "Found";
        }
        else{
            echo "Not Found";
        }

    }
?>
    
</body>
</html>