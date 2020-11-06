<?php
    error_reporting(0); #把警告訊息關掉

    #php要怎麼跟mysq1資料庫連結，有三個步驟
    #1. mysqli_connect，必須要設定ip(本地端為localhost)
    #   帳號、密碼、以及連結的資料庫(mydb)
    $conn = mysqli_connect("localhost","root","","mydb");

    #2. mysqli_query從表格user找出資料
    $result =mysqli_query($conn,"select * from user");

    #3. mysqli_fetch_array從$result擷取每筆資料
    $row=mysqli_fetch_array($result); #每fetch一次抓一筆資料
    echo $row[id]." ".$row[pwd];

    echo "<br>";
    $row=mysqli_fetch_array($result); #每fetch一次抓一筆資料
    echo $row[id]." ".$row[pwd];
?>