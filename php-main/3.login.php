<?php 
    if (($_GET[id] == "john") && ($_GET[pwd]=="john1234"))
        echo "Welcome";  //輸入正確
    else
        echo "fail login";//輸入錯誤
?>