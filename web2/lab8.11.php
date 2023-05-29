<form method="post" action="">
year:<select name="year">
<option value="2013">2013</option>
<option value="2014">2014</option>
<option value="2015">2015</option>
<option value="2016">2016</option>
<option value="2017">2017</option>
<option value="2018">2018</option>
<option value="2019">2019</option>
<option value="2020">2020</option>
<option value="2021">2021</option>
<option value="2022">2022</option>
<option value="2023" selected>2023</option>
<option value="2024">2024</option>
<option value="2025">2025</option>
<option value="2026">2026</option>
<option value="2027">2027</option>
<option value="2028">2028</option>
<option value="2029">2029</option>
<option value="2030">2030</option>
<option value="2031">2031</option>
<option value="2032">2032</option>
<option value="2033">2033</option>
</select><br>
Month:<select name="month">
	<option value="01">Jan</option>
	<option value="02">Feb</option>
	<option value="03">Mar</option>
	<option value="04">Apr</option>
	<option value="05"selected="selected">May</option>
	<option value="06">Jun</option>
	<option value="07">Jul</option>
	<option value="08">Aug</option>
	<option value="09">Sept</option>
	<option value="10">Oct</option>
	<option value="11">Nov</option>
	<option value="12">Dec</option>
</select><br>
<input type="submit" name="Generate">
</form>
<?php
if(!empty($_POST))
{
	?>
	<table border='1' cellspacing='0' cellpadding='2'>
<thead>
	<tr>
		<th>Sun</th>
		<th>mon</th>
		<th>Tue</th>
		<th>Wed</th>
		<th>Thu</th>
		<th>Fri</th>
		<th>sat</th>
</tr>
</thead>
<tbody>
	<?php
	$year=$_POST['year'];
	$month=$_POST['month'];
	$totday=cal_days_in_month(CAL_GREGORIAN,$month,$year);
	$dateobj=date_create($year."/".$month."/"."01");
	$startday=date_format($dateobj,'w');
	$col=$startday;
	echo "<tr>";
	for($day=1; $day<=$totday; $day++)
    {
	$col++;
	if($day==1 && $startday!=0)
	echo "<td colspan=$startday> &nbsp; </td>";
	echo "<td>".$day."</td>";
	if($col%7==0)
	{
		echo "</tr><tr>";

	}
}
}
?>
</tbody>
<table>
	
