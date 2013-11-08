<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<?php
$con = mysqli_connect('localhost','root','','mydb');
if ($_GET['type']==1){ $res_obj=$con->query("select * from student where pid=".$_GET['id']);}
else{ $res_obj=$con->query("select * from company where pid=".$_GET['id']);}
if($res_obj){
	$res=$res_obj->fetch_assoc();
?>
		 
		 
<html>
<head>
<title>Details of <?php echo $res['name']?></title>
</head>
<body>
<center>
<?php 
if($_GET['type']==1){
	echo <<<FRMT
	<h3>Student</h3><br />
	Name- $res[name]<br/>
    Username - $res[username]<br />
	Stream- $res[stream]<br />
	CGPA- $res[cg]<br />
FRMT;
	}
else{
	$website="http://".$res['website'];
	$dis="NULL";
	switch ($res['discipline']){
	case "1":
	     $dis="CSE";
		 break;
	case "2":
	     $dis="EE";
		 break;
	case "3":
	     $dis="ME";
		 break;
	case "4":
	     $dis="CSE and EE";
		 break;
	case "5":
	     $dis="EE and ME";
		 break;
	case "6":
	     $dis="CSE and ME";
		 break;
	case "7":
	     $dis="All three i.e.- CSE,EE and ME";
		 break;
		  
	}
	$type=ucwords($res['type']);
	$namehr=ucwords($res['namehr']);
	$jb=ucwords($res['jobpost']);
	echo <<<FRMT
    <h3>Company</h3>
	Name- $res[name]<br/>
	Username- $res[username]<br/>
	Address- $res[address]<br/>
	Website-<a href="$website">$res[website]</a><br />
	Type of Company - $type<br />
    Name HR(Head Rep.) - $namehr<br />
    Email HP- <a href="mailto:$res[emailhr]">$res[emailhr]</a><br />
    Jobpost- $jb<br/>
	Discipline - $dis
FRMT;
    	}
}
$butt1=($_GET['type']==1)?"STUDENT LOG":"COMPANY LOG";
echo <<<FRMT
<br/><br/><h3><a href="showlog.php?butt=$butt1">Back</a>      <a href="logaction.php?type=$_GET[type]&id=$_GET[id]">Remove</a></h3>
FRMT;
?>
<center>
</body>
</html>
