<?php
echo'<form action="" method="post">
    Number=<input type="number" name="num">
    <input type="submit" name="ok">
</form>'
?>

<?php
//a. armstrong no
$num=$_POST['num'];
function isArmstrong($number) {
    $sum = 0;
    $numDigits = strlen($number);
    $temp = $number;
    
    while ($temp > 0) {
        $digit = $temp % 10;
        $sum += pow($digit, $numDigits);
        $temp = ($temp / 10);
    }
    
    if( $number == $sum)
echo "This is an armstrong number ";
else
echo "This is not an armstrong number ";
}
?>
<?php
//b. palindrom number 
function palindrome($n){  
$number = $n;  
$sum = 0;  
while(floor($number)) {  
$rem = $number % 10;  
$sum = $sum * 10 + $rem;  
$number = $number/10; } 
if($n==$sum)
echo "This number is palindrom ";
else
echo"This number is not palindrom ";
}  
?>
<?php
//perfect square
function perfectsquare($n)
{
    if(sqrt($n)==floor(sqrt($n)))
    echo "This is perfect square number ";
    else echo "This is not a perfect square number ";
}
isArmstrong($num);
palindrome($num);
perfectsquare($num);
?>

