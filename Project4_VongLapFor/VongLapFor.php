<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
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
                    <?php
                        for($i = 1; $i <= 5; $i++){
                            echo "<li>Cho dù cuộc sống có hàng nghìn lý do khiến bạn khóc, bạn cũng phải tìm cho mình một lý do để cười, bởi lẽ đó chính là cuộc đời, những gì chúng ta có thể làm chỉ là khiến bản thân mạnh mẽ hơn mà thôi.</li>";
                        }
                    ?>
                </ul>
            </div>
        </div>     
    </div>
</body>
</html>