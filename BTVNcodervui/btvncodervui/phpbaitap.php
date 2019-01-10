<?php
   
    $mang1 = array(360,310,310,330,313,375,456,111,256);   
	$mang2 = array(350,340,356,330,321);   
    $mang3 = array(630,340,570,635,434,255,298); 
// Bài 1
    for ($i=1; $i <count($mang1) ; $i++) { 
		if ($mang1[0]<=$mang1[$i]) {
			$mang1[0]=$mang1[$i];
        }
    }
    echo "giá trị lớn nhất bài 1: " .$mang1[0]."<br>";

    for ($i=1; $i <count($mang1) ; $i++) { 
		if ($mang1[0]>=$mang1[$i]) {
			$mang1[0]=$mang1[$i];
        }
    }
    echo "giá trị nhỏ nhất bài 1: " .$mang1[0]."<br><br>";
// Bài 2
    for ($i=1; $i <count($mang2) ; $i++) { 
		if ($mang2[0]<=$mang2[$i]) {
			$mang2[0]=$mang2[$i];
        }
    }
    echo "giá trị lớn nhất bài 1: " .$mang2[0]."<br>";

    for ($i=1; $i <count($mang2) ; $i++) { 
		if ($mang2[0]>=$mang2[$i]) {
			$mang2[0]=$mang2[$i];
        }
    }
    echo "giá trị nhỏ nhất bài 1: " .$mang2[0]."<br><br>";
// Bài 3
    for ($i=1; $i <count($mang3) ; $i++) { 
        if ($mang3[0]<=$mang3[$i]) {
            $mang3[0]=$mang3[$i];
        }
    }
    echo "giá trị lớn nhất bài 1: " .$mang3[0]."<br>";

    for ($i=1; $i <count($mang3) ; $i++) { 
        if ($mang3[0]>=$mang3[$i]) {
            $mang3[0]=$mang3[$i];
        }
    }
    echo "giá trị nhỏ nhất bài 1: " .$mang3[0]."<br>";

?>

