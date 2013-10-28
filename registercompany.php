<?php

    
    $con = mysqli_connect('localhost','root','universe','mydb');
   
    if (isset($_POST['discipline'])) {
               $row = $_POST['discipline'];
                                     }
  $var = 0;
    if (in_array("cs", $row) && in_array("ee",$row) && in_array("me",$row))
    {
    $var = "7";
    }
else if (in_array("cs", $row) && in_array("ee",$row) )
    {
    $var =  "4";
    }

else if ( in_array("ee",$row) && in_array("me",$row))
    {
    $var =  "5";
    }

else if (in_array("cs", $row) && in_array("me",$row))
    {
    $var =  "6";
    }
else if (in_array("me",$row))
    {
    $var  ="3";
    }
else if (in_array("cs", $row) )
    {
    $var = "1";
    }
else if (in_array("ee", $row))
    {
    $var =  "2";
    }


    mysqli_query($con,"insert into company (name,username,password,address,website,type,namehr,emailhr,jobpost,discipline,verify) values ('".$_POST['name']."','".$_POST['username']."','".$_POST['password']."','".$_POST['address']."','".$_POST['website']."','".$_POST['type']."','".$_POST['namehr']."','".$_POST['emailhr']."','".$_POST['jobpost']."',".$var.",0);");
    echo "request for company added: wait for the administrator to approve your request";

    mysqli_close($con);


?>
