
<html><head>
<title>h</title>
</head>
<body>
<?php
require("connect.php");
if(isset($_POST["submit"]))
{
$id=$_POST["name"];
$sql="select * from library where id=$id";
$result=mysqli_query($conn,$sql);
if(mysqli_num_rows($result)>0)
{
while($row=mysqli_fetch_assoc($result))
	{
	 echo"bookname".$row["Book_name"]."<br>";
	 echo"author".$row["Author"]."<br>";
	 echo"publisher".$row["Publisher"]."<br>";
	 echo"quantity".$row["Quantity"]."<br>";
	 echo"price".$row["Price"]."<br>";
	}
}
else
{
echo"no results";
}	
mysqli_close($conn);
}
?>
</body>
</html>