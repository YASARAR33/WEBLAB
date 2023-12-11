<html>
<head>
<title>viewall</title>
</head>
<body>
<?php
require("connect.php");
$sql="select * from library";
$result=mysqli_query($conn,$sql);
if(mysqli_num_rows($result)>0)
{
while($row=mysqli_fetch_assoc($result))
	{
	 echo"bookname".$row["Book_name"]."<br>"."<table>";
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
?>
</body>
</html>