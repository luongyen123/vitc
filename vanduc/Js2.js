function giai_phuong_trinh_bac_2(a,b,c) 

{
	var Q=b*b-4*a*c; // không được "" vì không phải là chuỗi
	if (Q<0){
                   alert('Phương trình vô nghiệm');
	         }
	if (Q==0) {
		           alert(' Phương trình có nghiệm kép x1')
		           
	}
    if (Q>0) {
    	           alert(' Phương trình có 2 nghiệm phân biệt x1= '+ (-b + Math.sqrt(Q)/ 3*a));
    	           alert(' Phương trình có 2 nghiệm phân biệt x2= '+ (-b - Math.sqrt(Q)/ 3*a));
    	           
    }
}


    giai_phuong_trinh_bac_2(1,3,4);
    giai_phuong_trinh_bac_2(6,-4,4);
    giai_phuong_trinh_bac_2(4,-7,6);