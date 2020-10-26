<?php
/* ============================================ */
/* $case1 = "PHP"." is easy <br/>";
echo $case1;
//tinh do dài chuoi va xuat chuoi
var_dump($case1); */
/* ============================================ */
// sự khác biet cua 3 cach viet
/* $case2 = 1 . 2;
var_dump($case2);
echo "<br/>";
$case3 = 1.2;
var_dump($case3);
echo "<br/>";
$case4 = 1+2;
var_dump($case4); */
/* ============================================ */
// lay chieu dai chuoi sử dụng mb_strlen khi chứa cac ky tu UTF-8
$case5 = "tổng số ký tự có trong chuổi, chúng ta tìm cách để tính nó.";
$result = mb_strlen($case5);
echo $result;
echo "<br/>";
echo "====================================";
echo "<br/>";
// lấy chieu dai chuoi su dụng strlen khi khong co cac ky tu UTF-8
$result1 = strlen($case5);
echo $result1;
echo "<br/>";
echo "====================================";
echo "<br/>";
// dung ham str_word_count để dem so tu xuat hien trong chuoi
$result2 = str_word_count($case5);
echo "số từ trong chuỗi là:" ;echo $result2;
echo "<br/>";
echo "====================================";
echo "<br/>";
// dung ham strtoupper để chuyen chu thuong thanh chu hoa
$result3 = strtoupper($case5);
echo $result3;
echo "<br/>";
echo "====================================";
echo "<br/>";
// dung ham strtolower để chuyen chu thuong thanh chu hoa
$result4 = strtolower($case5);
echo $result4;
echo "<br/>";
echo "====================================";
echo "<br/>";
// dung ham ucfirst de chuyen ky tu dau tien trong chuoi thanh chu hoa
$result5 = ucfirst($case5);
echo $result5;
echo "<br/>";
echo "====================================";
echo "<br/>";
// dung ham lcfirst de chuyen ky tu dau tien trong chuoi thanh chu thuong
$result6 = lcfirst($case5);
echo $result6;
echo "<br/>";
echo "====================================";
echo "<br/>";
// dung ham ucwords de chuyen tat ca  ky tu dau tien trong chuoi thanh chu hoa
$result7 = ucwords($case5);
echo $result7;
echo "<br/>";
echo "====================================";
echo "<br/>";
// stripos() tim kiem chi so xuat hien dau tien cua mot tu nao do danh cho php version4
$case6 = "tổng số ký tự có trong chuổi, chúng ta tìm cách để tính nó.";
echo $case6;
echo "<br/>";
$word = "có";
echo stripos($case6,$word);
echo "<br/>";
echo "====================================";
echo "<br/>";
// strripos() tim kiem chi so xuat hien cuoi cung cua mot tu nao do danh cho php version4
$word1 = "trong";
echo "chi so xuat hien cuoi cung là:";echo stripos($case6,$word1);
echo "<br/>";
echo "====================================";
echo "<br/>";
// strrev để dảo ngược chuỗi
$case7 = "tong so ky tu co trong chuoi, chung ta tim cach de tinh no.";
echo $case7;
echo "<br/>";
echo "chuổi đảo ngược là:";echo strrev($case7);
echo "<br/>";
echo "====================================";
echo "<br/>";
// substr  de trich xuat noi dung nao do trong chuoi tu cac vi tri
$case8 = "tong so ky tu co trong chuoi, chung ta tim cach de tinh no.";
echo $case8;
echo "<br/>";
echo "chuổi được trích xuất là:";echo substr($case8,2,10);
echo "<br/>";
echo "====================================";
echo "<br/>";
// xoa bỏ ký tự trắng dư thừa nằm bên trái chuỗi nào đó ltrim($str,$params)
// tham số $params  khi bằng rỗng sẽ xóa bỏ các ký tự sau :
// "\0" null, "\t" tab, "\n" new line, "\x0B" vertical tab,"\r" carriage return," " white space
//===========================================//
//su dung ham isset($str) hoac trim($str = "") de kiem tra chuoi rong hay khong
//===========================================//
//implode($str,$array) chuyen cac gia tri cua mang thanh chuoi cách nhau bang ky tu $str
// explode($delimiter,$str) chuyen chuoi thanh cac gia tri cua mang tach chuoi dua vao ky tu $delimiter
//===========================================//
//substr($str,$start,$lenght) truy xuat cac doan noi dung trong chuoi ($str chuoi,$start vị tri bat dau,$lenght do dai chuoi)
//===========================================//
// str_repeat($str,$n) de lap chuoi $str với $n lan
//===========================================//
//chr() tra ve ky tu tuong ung voi ma ASCII duoc truyen vao
//ord() tra ve gia tri ASCII cua ky tu dau tien trong chuoi
//===========================================//
//parse_str() de chuyen cac noi dung truy van vao cac bien hoac mang
//===========================================//
// parse_url() de truy xuat cac thanh phan protocol,domain name,... cua mot url
$str ="http://www.zend.vn:80/Lap-Trinh/Ky-Thuat-Xu-Ly-Mang.php?id=79&page=2#item";
$data = parse_url($str);
echo "<pre>";
print_r($data);
echo "</pre>";
echo "<br/>";
echo "====================================";
echo "<br/>";
//===========================================//
//  strcmp($str1,$str2) so sanh hai chuoi
// substr_compare($str1,$str2,$lenght) lấy $lenght phan tu tu vi tri $start trong chuoi 1 sau do so sanh voi chuoi $str2
//substr_compare($str1,$str2,0,3) tu vi tri 0 va lay 3 phan tu
//===========================================//
//str_pad($str,$length,$padString,$padType) de tang do dai cua chuoi $str thanh $lenght với cac ky 
// tu moi them vao la $padString co che them vao la $padType(STR_PAD_right,left,both)
//===========================================//
//str_shuffle() sap xep ngau nhien ccac ky tu trong chuoi
//===========================================//
//str_replace($find,$replace,$string) thay the cac gia tri $find trong chuoi $string bang gia tri $replace
//===========================================//
//substr_count($string,$substring,$start,$lenght) lay $lenght gia tri phan tu tu vi tri $start trong chuoi 
//$str và thong ke so lan xuat hien cua chuoi $substring trong chuoi vua lay tren
//===========================================//
//str_split($str,$lenght) cat chuoi thanh tung phan tu trong mang moi phan tu co do dai $lenght ky tu
//===========================================//
// addslashes($str) them ky tu \ vao truoc cac ky tu '"\
// addcslashes($str,$character) them ky tu \ vao truoc ky tu $character
// stripslashes($str) hien thi chuoi khong co ky tu gach cheo duoc tao boi ham addslashes($str)
// stripcslashes($str) hien thi chuoi khong co ky tu gach cheo duoc tao boi ham addcslashes($str,$character)
//===========================================//
//htmlspecialchars($str) chuyen doi cac ky tu duoc quy dinh truoc sang gia trị html entities
//htmlspecialchars_decode($str) chuyen doi cac  gia trị html entities duoc goi boi ham htmlspecialchars() ve gia trị ban dau
//htmlentities($str) chuyen doi cac ky tu  sang gia trị html entities
//html_tity_decode($str) chuyen doi cac  gia trị html entities duoc goi boi ham htmlspecialchars($str) ve gia trị ban dau
//===========================================//
//strip_tags($str) de loai bo cac the html co trong chuoi
?>