<?php
	
	$sinhvien =[
		"hoten"=>'le van A',

		'quequan'=>['Thanh Hoa','Bac Ninh'],

	];
	$color =['red','green','color'];
	// echo $sinhvien['quequan'][0];

	foreach ($sinhvien as $key => $value) {

		if(is_array($value)){
			echo $key."-";
			for($i=0;$i<count($value);$i++){
				echo $value[$i];
			}
		}else{
			echo $key."-".$value."<br>";

		}
	}

	// }
	$mang_so_nguyen = [60, 62, 68, 71, 68, 73, 85, 66, 64, 76, 63, 81, 76, 73,  
		68, 72, 73, 75, 65, 74, 63, 67, 65, 64, 68, 73, 75, 79, 73];  
	// tìm giá trị lớn nhất nhỏ nhất của một tập hợp các mảng số nguyên
		$mang1 = array(360,310,310,330,313,375,456,111,256);   
		$mang2 = array(350,340,356,330,321);   
		$mang3 = array(630,340,570,635,434,255,298)

	
?>