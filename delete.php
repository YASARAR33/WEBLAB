<html>
<head>
<title>search</title>
</head>
<body>
<?php
require("connect.php");
if(isset($_POST["submit"]))
{
$id=$_POST["name"];
$sql="delete  from library where id=$id";
$result=mysqli_query($conn,$sql);
if($result)
{
echo "one record deleted";
}
else
{
echo"delete failed";
}	
mysqli_close($conn);
}
else
{
?>
<form method="POST" align="center">
<input type="text" name="name">
<input  type="submit"  name="submit"></button>
<?php
}
?>
</form>
</body>
</html>