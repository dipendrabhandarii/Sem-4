<?php
$arr = array(
    'kathmandu' => array('NewRoad','DurbarMarga', 'Thamel'),
    'Lalitpur' => array ('Patan', 'Jawalakhel', 'kupondole'),
    'Bhaktapur' => array('Durbar Square', 'Suryabinayak')
);
echo '<table border=1>';
foreach($arr as $d =>$e)
{
    echo '<tr>
        <td><strong>'.$d.'</strong></td>';

    foreach($e as $c)
    {
        echo '<td>'.$c.'</td>';
    }
    echo '</tr>';
}
echo '</table>';



?>