<html>
      <head>
            Company - TnpOnline IIT Ropar
      </head>

      <body>
            <h2> Welcome to </h2> 
            <a href="tnponline.php"> <h1> TnpOnline for IIT-Ropar </h1> </a>  
            <br>


            <?php
                 $con = mysqli_connect('localhost','root','universe','mydb');
         
                 $result = mysqli_query($con,"select * from company where username='".$_POST['username']."';");

                 $row = mysqli_fetch_array($result);

                 if ( $_POST['password'] == $row['password'] && $row['approve'] == 0 ) {
            
                          echo " welcome ".$_POST['username']."<br>";
                          echo "your address is ".$row['address']."<br>";

                                                               }
                 else     {
                        echo "oops password didn't match"."<br>";
                       


                          }  
  
             ?>

 
      </body>
</html>
