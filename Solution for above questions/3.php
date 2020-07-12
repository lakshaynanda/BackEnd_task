<?php
$data = '[["Jhone doe","M",14],["Lovely SINGH","F",60],["rahul","m",18],["AKSHAY KUMAR","m",23],["mohan sharma","m",64],["pRity gUlati","F",21]]';

$data = str_replace('"', '', $data);
$data = trim($data,"[[]]");
$arr = explode("],[",$data);
for ($i=0; $i < sizeof($arr); $i++) { 
	$arr[$i] = explode(",",$arr[$i]);
}

//1. convert raw data to json
$json_data = json_encode($arr, JSON_FORCE_OBJECT);
$json_arr = json_decode($json_data, true);

echo count_male($json_data);
echo age_range($json_data);

//2. Apply your logic and return the numbers of male
function count_male($json_data){
    $json_arr = json_decode($json_data, true);
    $s = sizeof($json_arr);
	$cm = 0;
	for($i=0;$i<$s;$i++){
	    if($json_arr[$i][1]=="m" || $json_arr[$i][1]=="M")
	         $cm++;
	}
	echo "count of males ".$cm."\n";
}

//3. display all member's name who is 18+ and below 60
//name should be displayed in scentence case - Akshay Kumar, Mohan Sharma (capitalise first letter)
function age_range($json_data){
    $json_arr = json_decode($json_data, true);
	$s = sizeof($json_arr);
	echo "name of members whose age > 18 && age <60 \n";
	for($i=0;$i<$s;$i++){
		$age=(int)$json_arr[$i][2];
	    if($age>18 && $age<60)
	         echo ucwords(strtolower($json_arr[$i][0]))."\n";
	}
}
?>
