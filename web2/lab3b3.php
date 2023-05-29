<?php
// list and insert multidimentional array into html table 
$marray=[["ncc","baneshwor"],["sdc","putalisadak"]];
print_r ($marray);
?>
<p> Html table using foreach loop</p>
<table cellspacing="0" cellpadding="0" border="1">
    <thead>
    <tr>
        <th>S.N</th>
        <th>College</th>
        <th>Address</th>
</tr>
<thead>
    <tbody>
    
        <?php
        $sn=1;
        foreach($marray as $value)
        {
            echo "<tr>";
            echo "<td>".$sn."</td>";
            foreach($value as $val)
            echo "<td>".$val."</td>";
            $sn++;
            echo "</tr>";
        }
        ?>
        </tbody>
    </table>

<p> Html list using foreach loop</p>
<ol type="A">
    <?php
    foreach($marray as $value)
    foreach($value as $val)
    echo "<li>".$val."</li>";
    ?>
    </ol>
