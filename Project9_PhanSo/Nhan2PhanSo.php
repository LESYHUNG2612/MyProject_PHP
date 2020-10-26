<?php
/* // keo ham tim UCLN vaof dung
require_once "function.php"; */
/* Viet Phuong Trinh Toi Gian Phan So */
$fractions1 = "52/6";
$fractions2 = "50/6";
echo "Phân số 1: ".$fractions1."<br/>";
echo "Phân số 2: ".$fractions2."<br/>";
// Lay Phan So
$fractions1 = explode("/",$fractions1);
$fractions2 = explode("/",$fractions2);
echo "<pre>";
echo "Phân số 1 là :";
print_r($fractions1);
echo"</pre>";

echo "<pre>";
echo "Phân số 2 là :";
print_r($fractions2);
echo"</pre>";
$ts =$fractions1[0]*$fractions2[0];
$ms = $fractions1[1]*$fractions2[1];
echo "kết quả Nhân hai phân so : ".$ts."/".$ms;
// ham tim ucln
function UCLN($ts,$ms){
    for ($i= 1; $i <= $ts ; $i++) { 
       if($ts % $i ==0){$uclnN1[] = $i;}
    }
    for ($i= 1; $i <= $ms ; $i++) { 
        if($ms % $i ==0){$uclnN2[] = $i;}
    }
    $temp = array_intersect($uclnN1,$uclnN2);
    $result = max($temp);
    return $result;
}
$ucln = UCLN($ts,$ms);
// toi gian phan so
$ts = $ts /$ucln;
$ms = $ms /$ucln;
echo "<pre>";
echo "Phân Số Tối giản Là :".$ts."/".$ms;
echo"</pre>";