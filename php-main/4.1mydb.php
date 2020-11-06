<?php
    $conn = mysqli_connect("localhost", "root", "", "mydb");
    
    $result=mysqli_query($conn, "select * from user");

    $row=mysqli_fetch_array($result);

    echo $row[id] + " " + $row[pwd]; 
?>