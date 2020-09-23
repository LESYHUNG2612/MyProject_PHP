<meta name="viewport" content="width=device-width, initial-scale=1.0">
<?php
    $data=file("option.txt") or die("cannot read file");
    //xoa thang tieu de file
    array_shift($data);
    // doc file ra
    /* echo "<pre>";
        print_r($data);
    echo "</pre>";  */
    $ArrayOption=array();
    foreach($data as $key => $value){
     /*  tach chuoi */
    $tam=explode("|",$value);
    $QuestionId = $tam[0];
    $OptionId   = $tam[1];
    $Answer      = $tam[2];
    $Point       = $tam[3];
    $ArrayOption[$QuestionId][$OptionId]["Option"] = $Answer;
    $ArrayOption[$QuestionId][$OptionId]["Point"] = $Point;
    }
?>