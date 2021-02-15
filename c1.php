<html lang="en">
<?php
 $comment= filter_input(INPUT_POST, 'comment');
 $email= filter_input(INPUT_POST, 'email');
if(!empty($email))
{
if(!empty($comment))
{
$host = "localhost";
$dbusername = "root";
$dbpassword = "";
$dbname = "youtube";
// Create connection
$conn = new mysqli ($host, $dbusername, $dbpassword, $dbname);
if (mysqli_connect_error()){
die('Connect Error ('. mysqli_connect_errno() .') '. mysqli_connect_error());
}
else{
$sql = "INSERT INTO  c(comment,email) values ('$comment','$email')";
if ($conn->query($sql))
{
	echo "";
}
else
{
echo "Error: ". $sql ."
". $conn->error;
}
$conn->close();
}
}

else{
echo "Password should not be empty";
die();
}
}

else{
echo "email should not be empty";
die();
}
?>
<style>
.button {
  background-color: #4CAF50;
  border: none;
  color: white;
  padding: 15px 32px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  margin: 4px 2px;
  cursor: pointer;
}
</style>
<body align="center" ><br><br><br>


<h2>COMPLAINT REGISTERED SUCCESSFULLY</h2>
<br></br>
<br></br>
<br></br>

<form action="main.php">
<button class="button">CONTINUE BOOKING</button><br><br>
</form>



</body>
</html>