<?php
$n=0;
$f=1;
$factors=0;
$t=0;
while ($factors<=400) {
	$factors=1;
	$f=1;
	$n++;
	$t=$n+$t;
	while ($f<=$t/2) {
		if ($t%$f==0) {
			$factors++;
			if ($factors>400) {
				break 2;
			}
			
		}
		$f++;
	}
}
echo $t;
?>