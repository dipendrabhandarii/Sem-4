
<!DOCTYPE html>
<head>
    <title>Login</title>
</head>
<body>
<form action="<?php $_SERVER['PHP_SELF'] ?>" method="post">
        <label for="name">Username</label>
        <input type="text" name="name">
        <label for="pass">Password</label>
        <input type="text" name="pass">
        <input type="submit" value="submit" name="submit">
        
    </form>
</body>
</html>


<?php
$err = [];
if(isset($_POST['submit']))
{
    $name = $_POST['name'];
    $pass = $_POST['pass'];

    if(strlen($name) < 3)
        $err[]="Username is less than 3 letter.";
    if(strlen($pass)<4)
        $err[]="password should be more than 6 letter long.";
        if($err)
        {
            print_r($err);
        
        }   
        else
        {
            $conn = new mysqli('localhost', 'root', '', 'db');

            if($conn->connect_error)
            {
                die("Error connecting.");
            }
            
            $sql = "select username, password from admin where username = 'admin'";

            $result = $conn->query($sql);
            $result = mysqli_fetch_assoc($result);
            if($name == $result['username'] && $pass == $result['password'])
            {
                echo"Sucessfull";
            }

            else{
                $err[]= "Username and password not valid.";
                print_r($err);
            }
        

        }
}




?>