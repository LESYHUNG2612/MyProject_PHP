<?php
/* // keo ham tim UCLN vaof dung
require_once "function.php"; */
/* Viet Phuong Trinh Toi Gian Phan So */
$fractions = "18/4";
// Lay Phan So
$fractions = explode("/",$fractions);

// xuất tử số
$ts = $fractions[0];
echo "<pre>";
echo "Tử số là :";
print_r($ts);
echo"</pre>";
//Xuat Mau So
$ms = $fractions[1];
echo "<pre>";
echo "Mẫu số là :";
print_r($ms);
echo "<pre>";
echo "<pre>";
echo "Phân số là :".$ts."/".$ms;
echo "<pre>";
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
//$ucln = UCLN($fractions[0],$fractions[1])
$ucln = UCLN($ts,$ms);
// toi gian phan so
$ts = $ts /$ucln;
$ms = $ms /$ucln;
echo "Phân Số Tối giản Là :".$ts."/".$ms;

