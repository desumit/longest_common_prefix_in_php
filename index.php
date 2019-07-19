<?php
function getLongestCommonPrefix($array) {
	$prefix = '';
	if(!empty($array)) {
		$lengths_array = array_map('strlen', $array);
		$prefix_maxsize = min($lengths_array);
		for($i=1;$i<=$prefix_maxsize;$i++) {
			for($j=0;$j<sizeof($array);$j++) {
				if($j>0) {
					if(substr($array[$j],0,$i) === substr($array[$j-1],0,$i)) {
						$prefix = substr($array[$j],0,$i);
					} else {
						$prefix = substr($array[$j],0,$i-1);
						break 2;
					}
				}
			}
		}
	}
	return $prefix;
}
$array = array('zzzzzzzzzzzzzzz','zzzzzzzzzzzzz','zz');
echo 'prefix = '.getLongestCommonPrefix($array);
?>