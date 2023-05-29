<?php
$student=[["ram",1,"male","ram@"],["hari",2,"male","hari@"],["sita",3,"female","sita@"],["gita",4,"female","gita@1"]];
?>
<table cellspacing="0" border="1" cellpadding="0">
    <thead>
        <tr>
            <th>S.N</th> 
            <th>Name</th>
            <th>roll</th>
            <th>gender</th>
            <th>mail</th>
</tr>
</thead>
<tbody>
    <?php
    $sn=1;
    foreach($student as $value)
    {
        echo "<tr>";
        echo "<td>".$sn."</td>";
        foreach($value as $val)
        {
        echo "<td>".$val."</td>";
        }
        
    $sn++;
    echo "</tr>";
}
    ?>
    </tbody>
    </table>
 
