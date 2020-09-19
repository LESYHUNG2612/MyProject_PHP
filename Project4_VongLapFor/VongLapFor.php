<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
    <?php
    $lan = "";
    $NoiDung="";
    ?>
</head>

<body>
    <div class="Container">
        <img class="Nen" src="img/4.jpg">
        <div class="left">
            <img class="NenTrai" src="img/1.PNG">
        </div>
        <div class="Right">
            <h1>Chép Phạt</h1>
            <div class="ContainerRight">
                <ul> 
                    <form action="#" method="POST" name="main-forn">
                    <div class="row">
                            <span>Nhập Nội Dung</span>
                            <input type="text" name="NoiDung" value = <?php echo $NoiDung;?> />
                         </div>
                         <div class="row">
                            <span>Nhập Số Lần</span>
                            <input type="number" name="lan" value = <?php echo $lan;?> />
                         </div>
                         <div class="row">
                             <input type="submit" value="Lấy Nội Dung"/>
                         </div> 
                    </from>
                    <?php
                    if(isset($_POST["lan"])){
                        $lan = $_POST["lan"];
                        $NoiDung = $_POST["NoiDung"];
                        if ($lan > 0){
                            for($i = 1; $i <= $lan; $i++){
                                echo "<li>".$NoiDung."</li>";
                            }
                        //Cho dù cuộc sống có hàng nghìn lý do khiến bạn khóc, bạn cũng phải tìm cho mình một lý do để cười,//
                        // bởi lẽ đó chính là cuộc đời, những gì chúng ta có thể làm chỉ là khiến bản thân mạnh mẽ hơn mà thôi.//
                        }
                        else{
                            echo "Nhập Số lần Chép phạt > 0";
                        }
                    }
                    ?>
                </ul>
            </div>
        </div>     
    </div>
</body>
</html>