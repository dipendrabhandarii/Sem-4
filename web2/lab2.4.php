 
 <?php
 $count=1;
  $flag; $i=2;
   $j;

	 
	 /* Generating prime numbers */
	 print("First 50 Prime Numbers Are: \n");
	 while($count <= 15)
	 {
		  $flag = 0;
		  for($j=2; $j<= $i-1; $j++)
		  {
			   if($i%$j==0)
			   {
				    $flag=1;
				    break;
			   }
		  }
		  if($flag==0)
		  {
			   echo "$i"."\n";
			   $count++;
		  }
		  $i++;
	 }
     ?>