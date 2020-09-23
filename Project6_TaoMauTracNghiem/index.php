<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
  
    <div class="content">
        <h1>Mẫu Trắc Nghiệm</h1>
        <form action="php.php" method="POST" name=mainfrom>
            
            <?php
            require_once "A.php";
            require_once "B.php";
            $NewArray = array();
            foreach($ArrayQuestion as $key => $value){
                $NewArray[$key]["Question"] = $value["Question"];
                $NewArray[$key]["sentences"] = $ArrayOption[$key];
            }
            $i=1;
            foreach ($NewArray as $key => $value) {
                echo '<div class="Question">';
                echo '<p><span>  Question'.$i.':</span>'.$value["Question"].'</p>';
                echo '<ul>';
                foreach($value["sentences"] as $keyC => $valueC) {
                    echo '<li><label><input type="radio" name="'.$key.'" value="'.$valueC["Point"].'">'.$valueC["Option"].'</label></li>';
                }
                echo '</ul>';
                $i++;
            }  
            ?>
            <div class="row">
                <input type="sunmit" value="Kiểm Tra" name="submit"></input>
            </div>            
        </form>
    </div>
</body>
</html>