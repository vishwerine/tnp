<?php
 
    $con = mysqli_query('localhost','root','universe','mydb');

    if ( $con ){
         echo "error: connecting to database";
               }


    $sql = "INSERT INTO student (name, username,password,cg,stream) VALUES ('".$_POST['name']."','".$_POST['username']."','".$_POST['password']."',".$_POST[cg].",'".$_POST['stream']."');";
    echo $sql;

   $result = mysqli_query($con,"select * from student;");

   while ( $row = mysqli_fetch_array($result)){
            echo $row['name'];
                                      }

   if (!mysqli_query($con,$sql))
   {
   die('Error: ' . mysqli_error($con));
   }
  echo "1 record added";

  mysqli_close($con);
?>
