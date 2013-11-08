<html>
      <head>
            Register Student - TnpOnline IIT Ropar
      </head>

      <body>
            <h2> Welcome to </h2> 
            <a href="tnponline.php"> <h1> TnpOnline for IIT-Ropar </h1> </a>  
            <br>


      <?php

    
      $con = mysqli_connect('localhost','root','','mydb');
   
      $sql = "select * from student";
      mysqli_query($con,"insert into student (name,username,password,cg,stream,verify) values ('".$_POST['name']."','".$_POST['username']."','".$_POST['password']."',".$_POST['cg'].",'".$_POST['stream']."',0)");
      $sql="select * from student where username='".$_POST['username']."'";
	  $res_obj=$con->query($sql);
	  $res=$res_obj->fetch_assoc();
	  echo "Please note your pid is ".$res['pid']."<br \>";
	  $sql="insert into notification(type,id) values (1,".$res['pid'].")";
	  $res_obj=$con->query($sql);
	  echo "request for student added: wait for the administrator to approve your request"."<br>";
       

      ?> 


            <!--<p> fill your cv details below :: </p>
 
            <form name="cvdetails" action="addcvdetails.php?a=<?php //echo $row['pid']?>" method="post">
             Name : <input type="text" name="name">   <br>
             Username : <input type="text" name="username" value="">  <br>
             Password : <input type="password" name="password" value="">  <br>
             CG : <input type="text" name="cg">  <br>
             stream :   <br>
             <input type="radio" name="stream" value="cs"> CS <br>
             <input type="radio" name="stream" value="ee"> EE <br>
             <input type="radio" name="stream" value="me"> ME <br>
              
             <input type="submit" value="Submit">
             </form>
                  



 
      </body>
	</html>
!-->




