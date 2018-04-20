<?php
$servername="localhost";
$username="root";
$password="";
$dbname="mydb";
$s=$_GET['term'];
$con=mysqli_connect($servername,$username,$password,$dbname);
if(!$con)
die('connection failed '.mysqli_error());
$sql="select * from mytb1 where firstname like '%".$s."%' order by firstname ASC";
$data=array();
if($result=mysqli_query($con,$sql))
{
	while( $row = mysqli_fetch_array($result))
	{
		$data[]=$row['firstname'];
	}
}
echo json_encode($data);
?>