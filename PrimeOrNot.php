<?php
function checkprime($num)
{
   if($num==1)
   return 0;
   for($i=2;$i<=$num/2;$i++)
   {
      if($num % $i == 0)
      return 0;
   }
   return 1;
}
$num = readline("Enter the value of n:");
$flag = checkprime($num);
if ($flag == 1)
   echo "It is a prime number";
else
   echo "It is a non-prime number"
?>
