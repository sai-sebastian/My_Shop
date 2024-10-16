<?php

function factorial($number){
$result=1;
for ($i= 1; $i <= $number; $i++) {
	$result =$result*$i;	
}
return $result;
}
if(isset($_GET["number"])){
$inputnumber=$_GET["number"];
$res=factorial($inputnumber);
}
        
print $res;
?>