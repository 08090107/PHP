<?php
    error_reporting(0);
    
    $conn = mysqli_connect("localhost","root","", "mydb");  //檢查連接
    if (mysqli_connect_error($conn))
        die("資料庫連線錯誤");

    mysqli_set_charset($conn, "utf8");//修改數據庫連接字符集為utf8
    $result=mysqli_query($conn, "select * from user");// 設定連線編碼
    while ($row=mysqli_fetch_array($result)) {
        echo $row[id];  //輸出一個或多個字符串
        echo " ";
        echo $row[pwd];
        echo "<br>";
    }
?>