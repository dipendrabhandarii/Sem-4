<?php
echo "insert into table and list of associative array";
$assoarr=["5"=>"B","4"=>"A"];
print_r ($assoarr);
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
    foreach($assoarr as $key)
    {
        echo "<tr>";
        echo "<td>".$sn."</td>";
        echo "<td>".$key."</td>";
        $sn++;
    }
    
    ?>
    </tbody>
    </table>
    <p> Html list using foreach loop</p>
    <ol>
        <?php
        foreach($assoarr as $value)
        echo "<li>".$value."</li>";
        ?>
        </ol>
