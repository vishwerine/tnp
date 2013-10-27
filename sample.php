<?php

    echo "bazinga"."<br>";
    $con = mysqli_connect('localhost','root','universe','mydb');
   
    $sql = "select * from student";
    $result = mysqli_query($con,$sql);
    while ( $row = mysqli_fetch_array($result)){
             echo $row['username']."<br>";
                                              }
    mysqli_query($con,"insert into student (name,username) values ('varsha','varsha1')");
    echo "entry added";

    mysqli_close($con);


?>
