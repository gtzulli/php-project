<?php
function myfunc($sales) {
	$commission = "";
	switch($sales){
		case $sales >= 50000:
			$commission =  "You receive $5000.00 bonus";
		break;
		case $sales >= 40000:
			$commission =  "You receive $4000.00 bonus";
		break;
		case $sales >= 30000:
			$commission =  "You reeieve $3000.00 bonus";
		break;
		case $sales >= 20000:
			$commission =  "You receive $2000.00 bonus";
		break;
		default: 
			$commission =  "No Bonus";
	}
	return $commission;
}	
?> 	
	