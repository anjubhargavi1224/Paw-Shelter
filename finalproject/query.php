<html>
<body>
<?php
$lname=$_GET["name"];
$email=$_GET["email"];
$phone=$_GET["phone"];
$message=$_GET["message"];
if(!empty($email))
{
$conn=mysqli_connect("localhost","root","","team1database");
$sql="INSERT INTO query VALUES('$name','$email','$phone','$message')";
if($conn->query($sql)===TRUE)
{
echo "<h1>Query registered!</h1>";
}
}
else
{
echo "enter valid details";
}
?>
</body>
</html>