<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html>
<head>
<title>Request</title>
</head>
<?php
$table=($_GET['type']==1)?"student":"company";
$con = mysqli_connect('localhost','root','','mydb');
if($_GET['allow']==1){
	$sql="update ".$table." set verify=1 where pid=".$_GET['id'];
	if($con->query($sql)){
		$sql="delete from notification where id=".$_GET['id']." AND type=".$_GET['type'];
		if(!$con->query($sql)){
			echo "We were not able to refresh the notification feed";
		}
		$butt="NOTIFICATIONS";
	    header("Location: http://localhost/tnp-master/showlog.php?butt=".$butt);
	}
	else echo "We are having a problem in updating the logs<br/> Please try later";
}
else{
	$sql="delete from ".$table." where pid=".$_GET['id'];
	if($con->query($sql)){
		$sql="delete from notification where id=".$_GET['id']." AND type=".$_GET['type'];
		if(!$con->query($sql)){
			echo "We were not able to refresh the notification feed";
		}
		$butt="NOTIFICATIONS";
 	    header("Location: http://localhost/tnp-master/showlog.php?butt=".$butt);
	}
	else echo "We are having a problem in updating the logs<br/> Please try later";
}

?>
<body>
</body>
</html>
