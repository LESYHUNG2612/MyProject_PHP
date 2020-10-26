<?php
/* // lấy h hien tai cua he thong
 $time = getdate();
 echo "<pre>";
 print_r($time);
 echo "</pre>";
 echo $time["hours"];  */
 //=========================================================//
/* // xac định múi giờ hiện tại ở đâu
 $timezone = date_default_timezone_get();
 echo $timezone; */
 //=========================================================//
/*  //thiet lap mui gio 
 //xem cac mui gio tren google với từ khóa timeZone
 date_default_timezone_set("Asia/Ho_Chi_Minh");
 $time = getdate();
 echo "<pre>";
 print_r($time);
 echo "</pre>";
 echo $time["hours"]; */
 //=========================================================//
/*  //xem danh sach cac mui gio
 $timezone = timezone_identifiers_list(16);
 echo "<pre>";
 print_r($timezone);
 echo "</pre>"; */
 //=========================================================//
/*  // xác dinh thoi gian hien tai so voi ngay 1/1/1970
 // tra ve so giây
 //1/1/1970 là thời gian dùng cho hệ thống Unit
 $time = time();
 echo $time;
 // lay gio he thong de so sanh
 echo "<pre>";
 print_r(getdate());
 echo "</pre>"; */
 //=========================================================//
 /* //  xác định một thời gian nào đó so với 1/1/1970
 // tra ve so giây
 $time1 = mktime(0,0,0,2,21,1999);
 echo $time1; */
 //=========================================================//
 //định dạng cách hien thi thoi gian
 //d hiển thi 1->31 hoac j  hien thi ngay 01->31
 //m  hiển thi tháng 01->12 hoac n hien thi thang 1->12
 // y hien thi 2 số cuối năm 99 hoac Y hien thi năm 2000
 // g hiển thi 0->12h,G hiển thị 0->23h,h hiển thị 0->12h,H hiển thị 0-23h
 //i hiển thị 0->59s,s hiển thị 00->59s
 // a hiển thị am pm, A hiển thị AM PM
 $time = time();
 echo date("h/a/d/m/y",$time);
 echo "<br/>";
 echo date("H/A/j/n/Y",$time);
 //=========================================================//