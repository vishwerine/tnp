<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html>
<head>
<title>LOG ACTION</title>
</head>
<?php
$con=mysqli_connect('localhost','root','','mydb');
$table=($_GET['type']==1)?"student":"company";
$sql="select * from ".$table." where pid=".(int)$_GET['id'];
$res_obj=$con->query($sql);
$res=$res_obj->fetch_assoc();
if($res['verify']==0){
$sql="delete from notification where id=".(int)$_GET['id']." AND type=".$_GET['type'];
if(!$con->query($sql))echo "Problem in updating Notifications Feed <br/>";
}
$sql="delete from ".$table." where pid=".(int)$_GET['id'];
$res=$con->query($sql);
if($res){
	 $butt=($_GET['type']==1)?"STUDENT LOG":"COMPANY LOG";
	 header("Location: http://localhost/tnp-master/showlog.php?butt=".$butt);
}
else{
	 echo "We are having problems in updating the logs <br />";
	 echo $con->error;
}
?>
<body>
</body>
</html>
