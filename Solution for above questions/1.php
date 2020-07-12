<?php
$arr = [1,2,3,4,5,6,4,3,7,8,31,5];

/*
find sum of all the elements where their index is odd number
eg values present in index 0,1,3,5 
*/


$size= sizeof($arr);
$oddsum=0;
for ($i=0; $i < $size; $i++) { 
	if ($i%2 != 0) {
		$oddsum += $arr[$i];
	}
}

echo("Odd sum " . $oddsum);

?>