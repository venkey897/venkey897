<?php
if(isset($_POST['submit']))
{
$dbhost="localhost";
$username="root";
$password="";
$database="student";
$con=new mysqli($dbhost,$username,$password,$database);
if($con->connect_error)
{
die("connection failed".$con->connect_error);
}
$n=$_POST['n'];
$ph=$_POST['ph'];
$l=$_POST['l'];
$p=$_POST['p'];
$a=$_POST['a'];
$bikeno=$_POST['b'];
$d=date("Y-m-d");
$t=date("H:i:s");
$sql="insert into petrol values ('$n','$ph','$bikeno','$p','$l','$a','$d','$t')";
if($con->query($sql)===TRUE)
{
echo "<center>record inserted successfully</center>";
}
else
{
echo "Error:".$sql."<br>".$con->error;
}
$con->close();
}
?>
