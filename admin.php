<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html>
<head>
<title>TnP ADMIN PAGE</title>
</head>



<body>
<center>
<form action="showlog.php" name="choice" method="get" >
<input type="submit" name="butt" value="STUDENT LOG" /><br/>
<input type="submit" name="butt" value="COMPANY LOG" /><br/>
<?php 
$con=mysqli_connect('localhost','root','','mydb');
$sql="select * from notification";
$res=$con->query($sql);
if($res){
?>
<input type="submit" name="butt" value="NOTIFICATIONS (<?php echo $res->num_rows; ?>)" /><br/>
<?php
}
else{echo "We are having problems with notification feed <br />";}
?>





</form>


<center>
</body>
</html>
