<?php
	$mang1 = array(360,310,310,330,313,375,456,111,256);
	$mang2 = array(350,340,356,330,321);   
	$mang3 = array(630,340,570,635,434,255,298);
	$t=$mang1[0];
	$k=$mang1[0];
	for ($i=1; $i <count($mang1) ; $i++) { 

		if ($t<$mang1[$i]) {

			$t=$mang1[$i];
		}
		if ($k>$mang1[$i]) {

			$k=$mang1[$i];
		}
	}
	echo "Số lớn nhất mảng 1 là : $t , nhỏ nhất là : $k <br>";

	$a=max($mang2); $b=min($mang2);
	$c=max($mang3); $d=min($mang3);
	echo "Số lớn nhất mảng 2 là : $a , nhỏ nhất là : $b <br>";
	echo "Số lớn nhất mảng 3 là : $c , nhỏ nhất là : $d <br>";
	
?>