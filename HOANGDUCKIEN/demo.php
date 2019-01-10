<?php

// $mang_so_nguyen = [60, 62, 68, 71, 68, 73, 85, 66, 64, 76, 63, 81, 76, 73,  
// 		68, 72, 73, 75, 65, 74, 63, 67, 65, 64, 68, 73, 75, 79, 73];  
// foreach ($mang_so_nguyen as $value) {
// 				$tong_gia_tri=0;
// 				$tong_gia_tri+=$value;
// 				$do_dai=count($mang_so_nguyen);
// 		}
// 		$tb= $tong_gia_tri/$do_dai;
// 		echo "Giá trị trung bình:$tb ";
	

	// tìm giá trị lớn nhất nhỏ nhất của một tập hợp các mảng số nguyên
		$mang1 = array(360,310,310,330,313,375,456,111,256,100);   
		 $mang2 = array(350,340,356,330,321);   
		 $mang3 = array(630,340,570,635,434,255,298);

$max = 0;
$min=0;

//  Mảng 1
for ($i = 0; $i < count($mang1); $i++)
{
    if ($max == 0){
        $max = $mang1[$i];
        
    }
    else {
        if ($mang1[$i] > $max){
            $max = $mang1[$i];
           
        }
    }
}
 
// tìm giá trị min
for ($i = 0; $i < count($mang1); $i++)
{
    if ($min == 0){
        $min = $mang1[$i];
        $positionmin = $i;
    }
    else {
        if ($mang1[$i] < $min){
            $min = $mang1[$i];
            $positionmin = $i;
        }
    }
}
echo "các pt trong mảng 1: ";
foreach($mang1 as $value) {
   echo "$value.",  "";
}

echo "<br>Giá trị lớn nhất của mảng 1: $max";
echo "Giá trị nhỏ nhất của mảng 1: $min";
echo "<br><hr>";
// mảng 2
$max2 = 0;

for ($i = 0; $i < count($mang2); $i++)
{
    if ($max2 == 0){
        $max2 = $mang2[$i];
        
    }
    else {
        if ($mang2[$i] > $max2){
            $max2 = $mang2[$i];
           
        }
    }
}
 
// tìm giá trị min
$min2=0;
for ($i = 0; $i < count($mang2); $i++)
{
    if ($min2 == 0){
        $min2 = $mang2[$i];
       
    }
    else {
        if ($mang2[$i] < $min2){
            $min2 = $mang2[$i];
           
        }
    }
}
echo "các pt trong mảng 2:  ";
foreach($mang2 as $value) {
   echo "  $value.",  "";
}
echo "<br>Giá trị lớn nhất của mảng 2: $max2";
echo "Giá trị nhỏ nhất của mảng 2: $min2";
// mảng 3

$max3 = 0;

for ($i = 0; $i < count($mang3); $i++)
{
    if ($max3 == 0){
        $max3 = $mang3[$i];
        
    }
    else {
        if ($mang3[$i] > $max3){
            $max3 = $mang3[$i];
           
        }
    }
}
 
// tìm giá trị min
$min3=0;
for ($i = 0; $i < count($mang3); $i++)
{
    if ($min3 == 0){
        $min3 = $mang3[$i];
       
    }
    else {
        if ($mang3[$i] < $min3){
            $min3 = $mang3[$i];
           
        }
    }
}

echo "<br><hr>các pt trong mảng 3:  ";
foreach($mang3 as $value) {
   echo "  $value.",  "";
}
echo "<br>Giá trị lớn nhất của mảng 3: $max3";
echo "Giá trị nhỏ nhất của mảng 3: $min3";
?>
