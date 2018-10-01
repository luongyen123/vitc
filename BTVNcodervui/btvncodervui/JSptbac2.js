function giai_phuong_trinh_bac_2(a,b,c) 

{
	var Q=b*b-4*a*c; // không được "" vì không phải là chuỗi
	if (Q<0){
                   alert('Phương trình vô nghiệm');
	         }
	if (Q==0) {
		           alert(' Phương trình có nghiệm kép x1=X2= '+ -b/2*a); // nối chuỗi +
		           
	}
    if (Q>0) {
    	           alert(' Phương trình có 2 nghiệm phân biệt x1= '+ (-b + Math.sqrt(Q)/ 2*a));
    	           alert(' Phương trình có 2 nghiệm phân biệt x2= '+ (-b - Math.sqrt(Q)/ 2*a));
    	           
    }
}


    giai_phuong_trinh_bac_2(1,2,4);
    giai_phuong_trinh_bac_2(1,-4,4);
    giai_phuong_trinh_bac_2(2,-7,3);