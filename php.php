<?php
    echo "hi";
    setcookie("my cookie","cookie cua tui", time()+120);
    if (isset ($_COOKIE['Mycookie']))
    {
        echo"<pre>";
         print_r($_COOKIE['Mycookie']);
        echo"</pre>";
    }
?>