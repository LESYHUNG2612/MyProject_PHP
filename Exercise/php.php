<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style type="text/css">
        * {
            margin: 0px;
            padding: 0px;
        }

        .Content {
            width: 500px;
            padding: 10px;
            border: 2px solid black;
            height: 120px;
            position: relative;
            top: 50px;
            left: 400px;
            z-index: 1;
            line-height: 30px;
            background: rgb(236, 231, 231);
        }
        div.row1{
            padding: 0px 400px;
        }
        
    </style>
    <?php
        $name = "Nho123@gmaill.com";
        $password="********";
    ?>
</head>
<body>
    <div class="Content">
        <?php
            $Group= array("1" => "Admin","2" => "Manager","3" => "Member","4" => "Guest");
            $xhtml="";
            $xhtml1 = "<span>Quyền Truy Cập :</span>";
            if(!empty($Group)){
                $xhtml .= '<select name="Group" style="width: 200px">';
                foreach($Group as $key => $value){
                    $xhtml .= '<option value='.$key.'>'.$value.'</option>';
                }
                $xhtml .= '</select><br />';
            }
            echo $xhtml1; echo $xhtml;
        ?>
        <!-- ================================================= -->
        <from action="#" method="POST" name="main-forn">
            <div class="row">
                <span>Tên Đăng Nhập:</span>
                <input type="text" name="name" value=<?php echo $name;?> />
            </div>
            <div class="row">
                <span>Mật Khẩu:</span>
                <input type="password" name="password" value=<?php echo $password;?> />
            </div>
            <div class="row1">
                <input type="submit" value="Đăng Nhập"/>
            </div> 
        </from>
    </div>
</body>

</html>