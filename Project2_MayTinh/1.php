<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link type= "text/css" href="style.css" rel="stylesheet" media="screen"> 
</head>
<body>
    <?php
        $n1 ="0";
        $n2 ="0";
        $caculate ="+";
       //kiem tra cac gia tri vào
       if(isset( $_POST["Number1"])== true && isset( $_POST["Number2"])== true && isset( $_POST["caculate"])== true){
             $n1 = $_POST["Number1"];
             $caculate = $_POST["caculate"];
             $n2 = $_POST["Number2"];
             $flag = true;
             //kiem tra n1 va n2 co phai la so khong
            if(is_numeric($n1) && is_numeric($n2)){
                switch ($caculate){
                    case "+":
                       $result = $n1 + $n2;
                    break;
                    case "-":
                       $result = $n1 - $n2;
                    break;
                    case "*":
                       case "x":
                       $result = $n1 * $n2;
                    break;
                    case "/":
                       case ":":
                       $result = $n1 / $n2;
                    break;
                    case "%":
                       $result = $n1 % $n2;
                    break;
                    default:
                       $result = $n1 + $n2;
                       $caculate = "+";
                    break;
                }
            }
            else{
                $result =" không thực hiện được";
                $flag = false;
            }
       }
    ?>
    <div class="Content">
        <h1>Mô Phỏng Máy Tính Điện Tử</h1>
        <form action="#" method="POST" name="main-forn">
            <div class="row">
                <span>Số Thứ Nhất</span>
                <input type="text" name="Number1" value = <?php echo $n1;?> />
            </div>
            <div class="row">
                <span>Phép Toán</span>
                <input type="text" name="caculate" value = <?php echo $caculate;?> />
                <!--value = php echo $caculate; giư lai gia tri nhap vào-->
            </div>
            <div class="row">
                <span>Số Thứ Hai</span>
                <input type="text" name="Number2" value = <?php echo $n2;?> />
            </div>
            <div class="row">
                <input type="submit" value="Xem Kết Quả"/>
            </div> 
            <div class="row">
                <?php
                if($flag==true){
                    echo "kết Quả : " .$n1 . " " .$caculate . " " .$n2 . " = ".$result;
                }
                else{
                    echo $result;
                }
                ?>
            </div>         
        </form>
    </div>
</body>
</html>