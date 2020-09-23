
<?php
    $data=file("Question.txt") or die("cannot read file");
    //xoa thang tieu de file
    array_shift($data);
    // doc file ra
   /*  echo "<pre>";
        print_r($data);
    echo "</pre>"; */
    foreach($data as $key => $value){
    //tach chuoi
    $tam=explode("|",$value);
    $id = $tam[0];
    $Question=$tam[1];
    $ArrayQuestion[$id] = array("Question" => $Question);
    }
?>