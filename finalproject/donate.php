<html>
<body>
<?php
$email=$_GET["email"];
$address=$_GET["Phone"];
$amount=$_GET["Amount"];

$conn=mysqli_connect("localhost","root","","team1database");
$sql="INSERT INTO donate VALUES('$email','$phone','$amount')";
if($conn->query($sql)===TRUE)
{
echo "<h1>Thank you for donating!</h1>";
}
else
{
echo "enter valid details";
}
?>
</body>
</html>