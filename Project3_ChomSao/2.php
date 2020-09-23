<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link type= "text/css" href="style.css" rel="stylesheet" media="screen">
    <?php
    $Day = "";
    $Month ="";
    $img = "";
    $name="";
    $time = "";
    $result= "";
    if(isset($_POST["Day"]) && isset($_POST["Month"])){
       $Day = $_POST["Day"];
       $Month = $_POST["Month"];
      
       if(is_numeric($Day) && is_numeric($Month)){
        $flagShow = true;
            switch($Month){
                case 1:
                    if($Day <= 19){ $img = "capricorn"; $name="Ma Kết";      $time= "23/12 - 19/01";}
                    if($Day >= 20){ $img = "aquarius";  $name="Bảo Bình";    $time= "20/01 - 19/02";}
                    if($Day <1 || $Day>31) $flagShow=false;
                    break;
                case 2:
                    if($Day <1 || $Day>29) $flagShow = false;
                    if($Day <= 19){ $img = "aquarius"; $name="Bảo Bình";      $time= "20/01 - 19/02";}
                    if($Day >= 20){ $img = "pisces";  $name="Song Ngư";    $time= "20/02 - 21/03";}
                   
                    break;
                case 3:
                    if($Day <=21){ $img = "pisces";  $name="Song Ngư";    $time= "20/02 - 21/03";}
                    if($Day >=22){ $img = "aries"; $name="Bạch Dương";      $time= "22/03 - 20/04";}                   
                    if($Day <1 || $Day>31) $flagShow=false;
                    break;
                case 4:
                    if($Day <=20){  $img = "aries"; $name="Bạch Dương";      $time= "22/03 - 20/04";}
                    if($Day >=21){ $img = "Taurus"; $name="Kim Ngưu";      $time= "21/04 - 21/05";}                   
                    if($Day <1 || $Day>30) $flagShow=false;
                    break;
                case 5:
                    if($Day <=21){  $img = "Taurus"; $name="Kim Ngưu";      $time= "21/04 - 21/05";}
                    if($Day >=22){ $img = "Gemini"; $name="Song Tử";      $time= "22/05 - 22/06";}                   
                    if($Day <1 || $Day>31) $flagShow=false;
                    break;
                case 6:
                    if($Day <=22){ $img = "Gemini"; $name="Song Tử";      $time= "22/05 - 22/06";}
                    if($Day >=23){ $img = "cancer"; $name="Cự Giải";      $time= "23/06 - 23/07";}                   
                    if($Day <1 || $Day>30) $flagShow=false;
                    break;
                case 7:
                    if($Day <=23){ $img = "cancer"; $name="Cự Giải";      $time= "23/06 - 23/07";}
                    if($Day >=24){ $img = "leo";    $name="Sư Tử";        $time= "24/07 - 23/08";}                   
                    if($Day <1 || $Day>31) $flagShow=false;
                    break;
                case 8:
                    if($Day <=23){  $img = "leo";       $name="Sư Tử";      $time= "24/07 - 23/08";}
                    if($Day >=24){  $img = "virgo";     $name="Xử Nữ";      $time= "24/08 - 23/09";}                   
                    if($Day <1 || $Day>31) $flagShow=false;
                    break;
                case 9:
                    if($Day <=23){ $img = "virgo";     $name="Xử Nữ";      $time= "24/08 - 23/09";}
                    if($Day >=24){ $img = "libra"; $name="Thiên Bình";      $time= "24/09 - 23/10";}                   
                    if($Day <1 || $Day>30) $flagShow=false;
                    break;
                case 10:
                    if($Day <=23){ $img = "libra"; $name="Thiên Bình";      $time= "24/09 - 23/10";}
                    if($Day >=24){ $img = "scorpio"; $name="Bọ Cạp";      $time= "24/10 - 22/11";}                   
                    if($Day <1 || $Day>31) $flagShow=false;
                    break;
                case 11:
                    if($Day <=22){ $img = "scorpio";        $name="Bọ Cạp";      $time= "24/10 - 22/11";}
                    if($Day >=23){ $img = "sagittarius";    $name="Nhân Mã";     $time= "23/11 - 22/12";}                   
                    if($Day <1 || $Day>30) $flagShow=false;
                    break;
                case 12:
                    if($Day <=22){  $img = "sagittarius";    $name="Nhân Mã";     $time= "23/11 - 22/12";}
                    if($Day >=23){  $img = "capricorn"; $name="Ma Kết";      $time= "23/12 - 19/01";}                   
                    if($Day <1 || $Day>31) $flagShow=false;
                    break;
                default: 
                    $flagShow=false;
                    break;
            }
            if($flagShow == true){
                $result = '<div class="result">
                <img src="img/'.$img .'.PNG " alt="' .$img. '"/>
                <p>'.$name.'<span>('.ucfirst($img).' : ' .$time.')</span> </p>
            </div>';
            }
            else{
                echo "Dữ Liệu Không Hợp Lệ";
            }
       }
       else{
        $flagShow = false;
        echo "Dữ Liệu Không Hợp Lệ";
       }
    }
    ?>
</head>
<body>
    <div class="Content">
        <h1>Chòm Sao</h1>
        <form action="#" method="POST" name="main-forn">
            <div class="row">
                <span>Nhập Ngày Sinh</span>
                <input type="number" name="Day" value = <?php echo $Day;?> />
            </div>
            <div class="row">
                <span>Nhập Tháng Sinh</span>
                <input type="number" name="Month" value = <?php echo $Month;?> />
                <!--value = php echo $caculate; giư lai gia tri nhap vào-->
            </div>
            <div class="row">
                <input type="submit" value="Lấy Chòm Sao"/>
            </div> 
        </form>
       <?php
            echo $result;
       ?>
    </div>
</body>
</html>