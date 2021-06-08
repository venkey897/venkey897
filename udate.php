<html>
<body bgcolor="lightgreen">
<form method="post">
<center>
Enter bike no:<input type="text" name="b" required><br><br>
<input type="submit" name="submit" value="submit">
</form>
<?php
if(isset($_POST['submit']))
{
$servername="localhost";
$username="root";
$password="";
$db="student";
$con=new mysqli($servername,$username,$password,$db);
if($con->connect_error)
{
die("connecion error".$con->connect_error);
}
$b=$_POST['b'];
$sql=("select * from petrol where bikeno='$b'");
$res=$con->query($sql);
echo "<html><head><style> table,th,td{border:1px solid black;}</style></head></html>";
echo "<table boarder=1>";
echo "<tr>";
echo "<th>Name</th><br>";
echo "<th>Bikeno</th>";
echo "<th>phno</th>";
echo "<th>Price</th>";
echo "<th>Address</th>";
echo "<th>date</th>";
echo "<th>time</th></tr>";
while($row=mysqli_fetch_array($res))
{

echo "<tr>";
echo"<td>".$row['name']."</td>";
echo"<td>".$row['bikeno']."</td>";
echo"<td>".$row['phno']."</td>";
echo "<td>".$row['liters']*$row['price']."</td>";
echo"<td>".$row['Address']."</td>";
echo"<td>".$row['date']."</td>";
echo"<td>".$row['time']."</td>";
echo "</tr> ";
echo "</table>";
}
$con->close();
}
?>
</body>
</html>