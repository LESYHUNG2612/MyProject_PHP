
<?php
    // 1.xuất key hoặc giá trị mảng
  /*   $Couse1 = array ("name" => "php", "time" => 200);
    echo"<pre>";
        print_r($Couse1);
    echo"</pre>";
    $NewCouse = array_keys($Couse1);
    echo"<pre>";
    print_r($NewCouse);
    echo"</pre>"; */
    //==================================================//
    //2.xóa phần tử cuối mảng
  /*   $Couse2 = array ("PHP", "Jquery","JavaScript", "HTML","CSS");
    echo"<pre>";
        print_r($Couse2);
    echo"</pre>";
    // xóa thằng cuối mảng và trả về giá trị vừa xóa
    echo $lastItem= array_pop($Couse2);
    // xuất mảng ra để kiểm tra
    echo"<pre>";
        print_r($Couse2);
    echo"</pre>"; */
    //=================================================//
    //3.xóa phần tử Đầu mảng
  /*   $Couse3 = array ("PHP", "Jquery","JavaScript", "HTML","CSS");
    echo "<pre>";
        print_r($Couse3);
    echo "</pre>";
    // xóa thằng đầu mảng và trả về giá trị vừa xóa
    echo $FirstItem= array_shift($Couse3);
    // xuất mảng ra để kiểm tra
    echo "<pre>";
        print_r($Couse3);
    echo "</pre>"; */
    //=================================================//
    // xóa một hoặc nhiều phần  tử ở đầu hoặc cuối
   /*  $Couse4 = array ("PHP", "Jquery","JavaScript", "HTML","CSS");
    echo"<pre>";
        print_r($Couse4);
    echo"</pre>";
    //ham xu ly
    function removeItem(&$array, $type = "first",$total=2){
        $result = array();
        //kiem tra mang
        if(!empty($array)){
            if ($total >= count($array)) {
                $result= $array;
                $array = nulll;
            }
            else{
                if ($type = "first") {
                    for($i=0;$i <=$total;$i++){
                        $result[] = array_shift($array);
                    }
                }
                else if($type = "last"){
                    for($i=0;$i <=$total;$i++){
                        $result[] = array_pop($array);
                    }
                }
            }
        }
        return $result;
    }
    $arrayItem = removeItem($Couse4,"first",1);
    echo "arrayItem : <br />";
    echo "<pre>";
        print_r($arrayItem);
    echo "</pre>";

    echo "Couse4 : <br> />";
    echo "<pre>";
        print_r($Couse4);
    echo "</pre>"; */
    //=================================================//
 /*    // loại bỏ phần tử trùng nhau trong mảng
    $Couse5 = array ("PHP", "Jquery","JavaScript", "HTML","Jquery","JavaScript","CSS");
    echo"<pre>";
        print_r($Couse5);
    echo"</pre>";
    $newArr = array_unique($Couse5);
    echo"<pre>";
        print_r($newArr);
    echo"</pre>"; */
    //=================================================//
    // xoa mot bang || mot phan tu || nhieu phan tu trong mang
    /* $Couse6 = array ("PHP", "Jquery","JavaScript", "HTML","Jquery","JavaScript","CSS");
    echo"<pre>";
        print_r($Couse6);
    echo"</pre>";
    unset($Couse6[0]);
    echo"<pre>";
        print_r($Couse6);
    echo"</pre>";  */
    //=================================================//
    //them mot hoac nhieu phan tu dau hoac cuoi mang
   /*  $Couse7 = array ("PHP", "Jquery","JavaScript", "HTML","Jquery","JavaScript","CSS");
    echo"<pre>";
        print_r($Couse7);
    echo"</pre>";
    array_push($Couse7,"Jquery","JavaScript","CSS");
    echo"<pre>";
        print_r($Couse7);
    echo"</pre>"; */
    //=================================================//
    //them mot hoac nhieu phan tu dau hoac cuoi mang
   /*  $Couse8 = array ("PHP", "Jquery","JavaScript", "HTML","Jquery","JavaScript","CSS");
    echo"<pre>";
        print_r($Couse8);
    echo"</pre>";
    array_push($Couse8,"Jquery","JavaScript","CSS");
    echo"<pre>";
        print_r($Couse8);
    echo"</pre>"; */
    //=================================================//
    // dao nguoc vi tri cua mang
   /*  $Couse9 = array ("PHP", "Jquery","JavaScript", "HTML","Jquery","JavaScript","CSS");
    echo"<pre>";
        print_r($Couse9);
    echo"</pre>";
    $NewCouse9 = array_reverse($Couse9);
    echo"<pre>";
        print_r($NewCouse9);
    echo"</pre>"; */
    //=================================================//
    // dao nguoc vi tri key value
    /* $Couse10 = array ("PHP", "Jquery","JavaScript", "HTML","Jquery","JavaScript","CSS");
    echo"<pre>";
        print_r($Couse10);
    echo"</pre>";
    $NewCouse10 = array_flip($Couse10);
    echo"<pre>";
        print_r($NewCouse10);
    echo"</pre>"; */
    //=================================================//
   /*  $Tong= array (1,3,2,4,6,5,7,9,8);
    echo"<pre>";
        print_r($Tong);
    echo"</pre>";
    $NewTong = array_sum($Tong);
    echo"<pre>";
        echo "tổng là : "; print_r($NewTong);
    echo"</pre>"; */
    // Tinh tong mot mang
     //=================================================//
    // Tinh trung binh mot mang
    /* $Tong1= array (1,3,2,4,6,5,7,9,8);
    $lenght = count($Tong1);
    $Tong2 = array_sum($Tong1);
    echo"<pre>";
        print_r($Tong1);
    echo"</pre>";
    $NewTong1 = (($Tong2)/($lenght));
    echo"<pre>";
        echo "===> Trung Bình Cộng Là  : "; print_r($NewTong1);
    echo"</pre>"; */
    // max và min là dùng như c#==========================//
    //=================================================//
    //thong ke so lan xuat hien trong mang cua phan tư
/*     $Mang= array (1,3,2,2,2,3,3,4,4,4,5,5,5,5,5,5,6,6,6,4,6,5);
    echo"<pre>";
        print_r($Mang);
    echo"</pre>";
    $NewMang= array_count_values($Mang);
    echo"<pre>";
        print_r($NewMang);
    echo"</pre>"; */
    //=================================================//
    // dùng hàm array_merge($mang1,$mang2,...) để nhập hai hay nhieu mang lai
    /* $Mang2= array (1,3,2,2,2,3,3,4,4,4,5);
    $Mang3= array (1,3,2,2,2,3,3,4,4,4,5);
    echo"<pre>";
        print_r($Mang2);
        print_r($Mang3);
    echo"</pre>";
    $NewMang3= array_merge($Mang2,$Mang3);
    echo"<pre>";
    print_r($NewMang3);
    echo"</pre>"; */
     //=================================================//
    // array_rand($array,$number) láy ngau nhien so number phan tu  từ mảng array dua vao mang moi
   /*  $Mang4= array ("php"=>"PHP","js"=>"jocmla","JS"=>"Javascript","Css"=>"CSS","html"=>"HTML");
    echo"<pre>";
    print_r($Mang4);
    echo"</pre>";
    $NewMang4= array_rand($Mang4);
    echo"<pre>";
     echo " day là key : ";print_r($NewMang4);
    echo"</pre>"; */
    //=================================================//
    //array_search($value,$array) tim phan tu mang gia tri value trong mang array
    /* $Mang5= array ("php"=>"PHP","js"=>"jocmla","JS"=>"Javascript","Css"=>"CSS","html"=>"HTML");
    echo"<pre>";
    print_r($Mang5);
    echo"</pre>";
    $NewMang5= array_search("PHP",$Mang5);
    echo"<pre>";
     echo " day là key : ";print_r($NewMang5);
    echo"</pre>"; */
     //=================================================//
    // array_key_exits($key,$array) kiem tra khoa key co ton tai trong array không nếu có tra ve true dùng echo "Exists"; de xuat ra
    /* $Mang6= array ("php"=>"PHP","js"=>"jocmla","JS"=>"Javascript","Css"=>"CSS","html"=>"HTML");
    echo"<pre>";
    print_r($Mang6);
    echo"</pre>";
    if(array_key_exists("php",$Mang6)){
        echo "===>có tồn tại trong mang";
    } */
    //=================================================//
    //in_array($value,$array) kiem tra gia tri value co ton tai trong array không nếu có trả về true
   /*  $Mang7= array ("php"=>"PHP","js"=>"jocmla","JS"=>"Javascript","Css"=>"CSS","html"=>"HTML");
    echo"<pre>";
    print_r($Mang7);
    echo"</pre>";
    if(in_array("PHP",$Mang7)){
        echo "===>có tồn tại trong mang";
    }  */
     //=================================================//
    // array_change_key_case($array) chuyen cac key thành chữ thường  tra ve mang moi
    //chu ý key viet hoa
    /* $Mang8= array ("PHP"=>"PHP","JS"=>"jocmla","JS"=>"Javascript","Css"=>"CSS","html"=>"HTML");
    echo"<pre>";
    print_r($Mang8);
    echo"</pre>";
    $NewMang8=array_change_key_case($Mang8);
    echo"<pre>";
    print_r($NewMang8);
    echo"</pre>"; */
    //=================================================//
     // array_change_key_case($array,CASE_UPPER) chuyen cac key thành chữ hoa  tra ve mang moi
    /*  $Mang9= array ("php"=>"PHP","js"=>"jocmla","JS"=>"Javascript","Css"=>"CSS","html"=>"HTML");
    echo"<pre>";
    print_r($Mang9);
    echo"</pre>";
    $NewMang9 = array_change_key_case($Mang9, CASE_UPPER);
    echo"<pre>";
    print_r($NewMang9);
    echo"</pre>"; */
    //=================================================//
    // implode($str, $array) chuyen cac gia trị array thanh mot chuoi cac phan tu cach nhau boi ky tu $str
    /* $Mang10= array ("phpPHP","jsjocmla","JSJavascript","CssCSS","htmlHTML");
    echo $str= implode("**",$Mang10) */
    //=================================================//
    // explode($delimiter,$str) chuyen mot chuoi thanh mot mang tach chuoi dua vao $delimiter 
    // moi doạn tach ra thanh mot phan tu moi
    /* $Mang11= "Php Javascript";
    $NewMang11 = explode(" ",$Mang11);
    echo"<pre>";
        print_r($NewMang11);
    echo"</pre>";  */
     //=================================================//
     //current($array) truy xuat du lieu hien tai cua mang
    /*  $Mang12= array ("phpPHP","jsjocmla","JSJavascript","CssCSS","htmlHTML");
     echo"<pre>";
     print_r($Mang12);
     echo"</pre>";
      echo "Mang12 phần tử hiện tại là : ".current($Mang12)."<br/>"; */
     //=================================================//
    //end($array)  truy xuat phan tu cuoi cung cua mang
    /* $Mang13= array ("phpPHP","jsjocmla","JSJavascript","CssCSS","htmlHTML");
    echo"<pre>";
    print_r($Mang13);
    echo"</pre>";
     echo "Mang13 phần tử cuối cùng là  : ".end($Mang13)."<br/>"; */
    //=================================================//
   /*  $Mang14= array ("phpPHP","jsjocmla","JSJavascript","CssCSS","htmlHTML");
    echo"<pre>";
    print_r($Mang14);
    echo"</pre>"; */
    // next($array) truy xuat phan tu sau phan tu hien tai cua mang
     /* echo "Mang14 phần tử tiếp theo là  : ".Next($Mang14)."<br/>"; */
    //=================================================//
    //prev($array) truy xuat phan tu truoc phan tu hien tai cua mang
   /*  echo "Mang14 phần tử trước là  : ".prev($Mang14)."<br/>"; */
    // reset($array)tra ve gia tri dau tien cua mang
    /* echo "Mang14 phần tử đau tien  là  : ".reset($Mang14)."<br/>"; */
    // end($array)tra ve gia tri dau tien cua mang
   /*  echo "Mang14 phần tử cuoi cung cau mang là  : ".end($Mang14)."<br/>"; */
    //=================================================////=================================================//
   /*  $Mang15 =array ("phpPHP","jsjocmla","JSJavascript","CssCSS","htmlHTML");
    echo"<pre>";
    print_r($Mang15);
    echo"</pre>";  */
     // serialize($value) chuyen chuoi,mang,doi tuong $value thanh mot chuoi dac biet
   /*  $result = serialize($Mang15);
    echo"<pre>";
    echo "kết quả là : ";print_r($result);
    echo"</pre>";  */
    //unserialize($value) chuyen chuoi serialize($value) về trang thai ban đau
   /*  $result1 = unserialize($result);
    echo"<pre>";
    echo "kết quả là : ";print_r($result1);
    echo"</pre>";  */
      //=================================================////=================================================//
      //shuffle tạo ra mang mới với thu tu phan tu trong mang thay doi
    /* $Mang16=array(1,2,3,4,5,5,6,77,8,8,8,);
    echo"<pre>";
        print_r($Mang16);
    echo"</pre>";
    shuffle($Mang16);
    echo"<pre>";
    echo "kết quả là : ";print_r($Mang16);
    echo"</pre>"; */
     //=================================================////=================================================//
      //compact() su dung de tao mang moi tu bien co san
    /* $name = "php";
    $time= "1000";
    $array = compact("name","time");
    echo"<pre>";
        echo "kết quả là : ";print_r($array);
    echo"</pre>"; */
    //=================================================////=================================================//
    //tạo mang su dung ham range
/*     $array = range(1,100,2);// 1 là số đầu tiên ,100 so cuoi cung,2 la buoc nhay
    echo"<pre>";
        echo "kết quả là : ";print_r($array);
    echo"</pre>";  */
    //=================================================////=================================================//
    //tạo mang su dung ham array_combine($key.$value)
   /*  $key = array(1,2,3,4,5,6,67,7,8);
    $value = array("php","2","4","php","2","4","php","2","4");
    $NewMang17 = array_combine($key,$value);
    echo"<pre>";
    echo "kết quả là : ";print_r($NewMang17);
    echo"</pre>";   */
    //=================================================////=================================================//
    //tạo mang su dung ham array_combine($key.$value)
    //array_dif($array1,$array2) tra ve mang nhung gia tri ton tai trong array1 mà k co trong array2
    //array_dif_key($array1,$array2) tra ve mang nhung phan tu có khoa ton tai trong array1 mà k co trong array2
    //array_dif_assoc($array1,$array2) tra ve mang nhung phan tu có khoa và gia trị  ton tai trong array1 mà k co trong array2
    // array_walk sẽ gui gia tri cua mang toi mot ham xu ly và nhan ket qua là hàm mới
    // array_map sẽ gui gia tri cua mot  hoac nhieu mang toi mot ham xu ly và nhan ket qua là hàm mới
    //array_slice(array,offset,length,preserve); trich xuat lay mot doan phan tu cua mang tu vi tri 
            // bat dau offset và lấy length phần tử
    //array_splice(array1,offset,length,array2) xoa bo mot doan phan tu cua mang array1 tu vi tri offset 
            // và lấy length phần tử , sau đó thay thế các phần tử bị loại bỏ bằng mảng array2
    // sort(array) sắp xếp các phan tu trong mang tang dan theo gia trị
    //rsort(array) sắp xếp các phan tu trong mang giam dan theo gia trị
    //ksort(array)  sắp xếp các phan tu trong mang tang dan theo khóa
    //krsort(array)  sắp xếp các phan tu trong mang giam dan theo khóa
?>