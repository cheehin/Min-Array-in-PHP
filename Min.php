<?php
//return the minimum element in the array of numbers
	function findmin($a, $n){
		return ($n==0)?$a[0]:min($a[$n-1],findmin($a,$n-1));
	}
?>