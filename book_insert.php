<html>
<head>
<title>Book Details</title>
<style>
form
{
	background-color:Green;
}
</style>
</head>
<body>
<?php
require('connect.php');
if(isset($_POST['sub']))
{
	$name=$_POST['Book_name'];
	$author=$_POST['Author'];
	$publisher=$_POST['Publisher'];
	$quantity=$_POST['Quantity'];
	$price=$_POST['Price'];
	$sql="insert into library(Book_name,Author,Publisher,Quantity,Price)values('$name','$author','$publisher','$quantity','$price')";
	$result=mysqli_query($conn,$sql);
if($result)
{
	header('Location:');
}
mysqli_close($conn);
}
else
{
?>
<form align="center" method="POST" action="">
<fieldset>
	<h1><u>Book Details</u></h1>
	
	<label for="book_name">Book_name:</label>
	<input type="text" name="Book_name" id="book_name"><br><br>

	<label for="author">Author:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label>
	<input type="text" name="Author" id="author"><br><br>

	<label for="pb">Publisher:&nbsp;&nbsp;&nbsp;&nbsp;</label>
	<input type="text" name="Publisher" id="pb" ><br><br>

	<label for="qn">Quantity:&nbsp;&nbsp;&nbsp;&nbsp;</label>
	<input type="text" name="Quantity" id="qn" ><br><br>
	
	<label for="Price">Price:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label>
	<input type="text" name="Price" id="prize"><br><br>

	<input type="submit" name="sub" id="sub" value="Submit">
	<input type="reset" name="rst" id="rst" value="Reset">
</fieldset>
<?php
}
?>
</form>
</body>
</html>
