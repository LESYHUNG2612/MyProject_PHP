<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $data=file("Question.txt") or die("can not read file");
        $point = 0;
        array_shift($data);
        foreach ($data as $key => $value) {
            $tam = explode("|", $value);
            $id = $tam[0];
            $point = $point + $_POST[$id];           
        }
        $data=file("result.txt") or die("can not read file");
    
        array_shift($data);
        foreach ($data as $key => $value) {
            $tam = explode("|", $value);
            $min = $tam[0];     
            $max = $tam[1];  
            $content = $tam[2];   
            if ($point >= $min && $point <= $max){
                $result = $content;
                break;
            }
        }
    ?>
    <div class="content">
        <h1> Kết quả trắc nghiệm</h1>
        <p><b>Tổng điểm của bạn là : </b><?php echo $point;?></p>
        <p style="margin-top: 10px; text-align: justify;"><b><?php echo $result;?></b></p>
    </div>
</body>
</html>