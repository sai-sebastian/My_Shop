<?php

function factorial($number){
$result=1;
for ($i= 1; $i <= $number; $i++) {
	$result =$result*$i;
	
}

return $result;

}
$res=factorial(5);
function prime($number){		
	// Check from 2 to n-1
    for ($i = 2; $i <= $number / 2; $i++){
		if ($number % $i == 0)
	{
		return false;
	}
	else{
    return true;
	}
}
}
        
print $res;
?>