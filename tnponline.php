<!doctype html>
<html>
      <head>
            <title>
                  tnponline.com
            </title>
      </head>

      <body>
            <h2> welcome to </h2>
            <h1> <a href="tnponline.php"> TnpOnline for IIT-Ropar </a> </h1>

            <p> Student Log in :</p>
            <form name="slogin" action="student.php" method="post">
             Username: <input type="text" name="username"> <br>
             Password <input type="password" name="password"> <br>
             <input type="submit" value="Sign In">
            </form>

            <p> Company Log in :</p>
            <form name="clogin" action="company.php" method="post">
             Username: <input type="text" name="username"> <br>
             Password <input type="password" name="password"> <br>
             <input type="submit" value="Sign In">
            </form>
 

            <a href="newstudent.php">  <p> new student? </p> </a>
            <a href="newcompany.php">  <p> new company? </p> </a>
 
      </body>
</html>
