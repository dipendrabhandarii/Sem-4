<?php
//display those array of lab3a using for loop and foreach loop 
//in html table and list ...
include("lab3a.php");
//$indarr=["Ram","shyam","hari","geeta","sita"];
echo"<br>"."Html table using foreach loop";
?>
<table cellspacing="0" border="1" cellpadding="0">
    <thead>
        <tr>
            <th>S.N</th> 
            <th>Name</th>
</tr>
</thead>
<tbody>
    <?php
    $sn=1;
    foreach($indarr as $value)
    {
        echo "<tr>";
        echo "<td>".$sn."</td>";
        echo "<td>".$value."</td>.</tr>";
        $sn++;
        
    }
    
    ?>
    </tbody>
    </table>
<p>HTML table using for loop</p>
<table cellspacing="0" border="1" cellpadding="0">
    <thead>
        <tr>
            <th>S.N</th> 
            <th>Name</th>
</tr>
</thead>
<tbody>
    <?php
    $sn=1;
    for($i=0;$i<count($indarr);$i++)
    {
        echo "<tr>";
        echo "<td>".$sn."</td>";
        echo "<td>".$indarr[$i]."</td>";
        $sn++;  
    }
    
    ?>
    </tbody>
    </table>
    <p> Listing the index array using foreach loop</p>
    <ul type="">
        <?php
    foreach($indarr as $value)
    {
       echo "<li>".$value."</li>" ;
    }
    ?>
    </ul>
    <p>Listing the index array using for loop</p>
    <ol type="">
        <?php
        for ($i=0;$i<sizeof($indarr);$i++)
        {
            echo "<li>".$indarr[$i]."</li>";
        }
        ?>
        </ol>



