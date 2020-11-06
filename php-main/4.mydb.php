<?php
    error_reporting(0);
    
    $conn = mysqli_connect("localhost","root","", "mydb");
    if (mysqli_connect_error($conn))
        die("資料庫連線錯誤");

    mysqli_set_charset($conn, "utf8");
    $result=mysqli_query($conn, "select * from user");
    while ($row=mysqli_fetch_array($result)) {
        echo $row[id];
        echo " ";
        echo $row[pwd];
        echo "<br>";
    }
?>