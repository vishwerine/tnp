<!doctype html>
<html>
      <head>
            <title>
                   New Company- TnpOnline.com
            </title>
      </head>
 
      <body>
            <h2> Welcome to </h2> 
            <a href="tnponline.php"> <h1> TnpOnline for IIT-Ropar </h1> </a>

                 



            <p> fill your details below to register </p>
 
            <form name="signup" action="registercompany.php" method="post">
             Name : <input type="text" name="name">   <br>
             Username : <input type="text" name="username" value="">  <br>
             Password : <input type="password" name="password" value="">  <br>
             Address : <input type="text" name="address" value="">  <br>
             Website : <input type="text" name="website" value="">  <br>
             type of company :   <br>
             <input type="radio" name="type" value="private"> Private Sector <br>
             <input type="radio" name="type" value="startup"> Start Up <br>
             <input type="radio" name="type" value="govt"> Govt. Owned <br>
             <input type="radio" name="type" value="public"> Public Sector <br>
             <input type="radio" name="type" value="mnci"> Multi-National Corporation(Indian) <br>
             <input type="radio" name="type" value="mncf"> Multi-National Corporation(Foreign)<br>
             <input type="radio" name="type" value="other"> Other <br>
             Name HR (Head Representative): <input type="text" name="namehr">   <br>
             Email HR : <input type="text" name="emailhr">   <br>
             JobPost : <input type="text" name="jobpost">   <br>
             Discipline :   <br>
             <input type="checkbox" name="discipline[]" value='cs'> CS <br>
             <input type="checkbox" name="discipline[]" value='ee'> EE <br>
             <input type="checkbox" name="discipline[]" value='me'> ME <br>
              
             <input type="submit" value="Submit">
             </form>
                  

      </body>
</html>
