<?php
    //connect to mysqli
    $conn = new mysqli("localhost", "root", "", "db");

    // Check connection
    if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
    }
    echo "Connected successfully";

    //open file
    $file = fopen("bill.csv", "r");

    if($file === false)
    {
        echo "Unable to open file.";
        exit;
    }



    while(!feof($file))
    {
        //get content from csv file
        $info = fgetcsv($file, 1024);
        $sql = "insert into bill values(
        $info[0],
        $info[1],
        $info[2],
        $info[3])";

        $result = $conn->query($sql);
    }

    echo"\nInserted Sucessfully";

?>