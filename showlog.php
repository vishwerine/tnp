<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html>
<head>
<title>Student Log</title>
</head>

<body>
<center>
<?php
$con = mysqli_connect('localhost','root','','mydb');
if($_GET['butt']=="STUDENT LOG")
{
   $result = mysqli_query($con,"select * from student");
   if($result){
   echo '<table border="1"> <th colspan="6"> Student Log  </th>';
	while($i=$result->fetch_assoc())
    {
	 echo <<<FRMT
<tr>
<td colspan="5">
<a href="details.php?type=1&id=$i[pid]">
$i[name]</a></td>
<td colspan="2">
<a href="logaction.php?type=1&id=$i[pid]">Remove</a>
</td>
</tr>
FRMT;
    }
	echo "</table>";
	}
	else echo "We are unable to open the Student logs please visit later :) ";
}
else if ($_GET['butt']=="COMPANY LOG"){
$result = mysqli_query($con,"select * from company");
   if($result){
   echo '<table border="1"> <th colspan="6"> Company Log  </th>';
	while($i=$result->fetch_assoc())
    {
	 echo <<<FRMT
<tr>
<td colspan="5">
<a href="details.php?type=2&id=$i[pid]">
$i[name]</a></td>
<td colspan="2">
<a href="logaction.php?type=2&id=$i[pid]">Remove</a>
</td>
</tr>
FRMT;
    }
	echo "</table>";
	}
	else echo "We are unable to open the Company logs please visit later :) ";
}
else{
$result = mysqli_query($con,"select * from notification");
   if($result){
   echo '<table border="1"> <th colspan="6"> Notifications  </th>';
	while($i=$result->fetch_assoc())
    {
	 if ($i['type']==1){ $res_obj=$con->query("select * from student where pid=".$i['id']);}
	 else{ $res_obj=$con->query("select * from company where pid=".$i['id']);}
	 if($res_obj){
	 $res=$res_obj->fetch_assoc();
	 if($i['type']==1) $as="Student";
	 else $as="Company";
	 echo <<<FRMT
<tr>
<td colspan="5">
<a href="details.php?type=$i[type]&id=$i[id]">
$res[name]</a> requested registration as $as</td>
<td colspan="2">
<a href="request.php?type=$i[type]&id=$i[id]&allow=1">Allow</a>   <a href="request.php?type=$i[type]&id=$i[id]&allow=0">Deny</a>
</td>
</tr>
FRMT;
    }
	else{ 
	echo $con->error;
	echo "Problem in Inter-Log Communication, Please return later";
	break;
	}
	}
	echo "</table>";
	}
	else echo "We are unable to connect to notifications feed please visit later :) ";
}
?>
<form action="admin.php">
<input value="BACK" type="submit" />
</form>
<center>
</body>
</html>
