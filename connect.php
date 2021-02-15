<html>
<?php
 $FIRST_NAME = filter_input(INPUT_POST, 'fn');
 $LAST_NAME = filter_input(INPUT_POST, 'ln');
 $EMAIL = filter_input(INPUT_POST, 'email');
 $NP = filter_input(INPUT_POST, 'psw');
 $CNP = filter_input(INPUT_POST, 'psw1');
if (!empty($FIRST_NAME) && !empty($LAST_NAME) && !empty($EMAIL))
{
if(!empty($NP) && !empty($CNP))
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
$sql = "INSERT INTO  sign(FIRST_NAME,LAST_NAME,EMAIL,NP,CNP)
values ('$FIRST_NAME','$LAST_NAME','$EMAIL','$NP','$CNP')";
if ($conn->query($sql)){
echo "";
}
else{
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
echo "Username should not be empty";
die();
}
?>
<head>
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
</head>
<body align="center">

<br></br>
<br></br>
<h2>REGISTERED SUCCESSFULLY</h2>
<br></br>


<form action="main1.php">
<button class="button">CONTINUE REGISTRATION</button><br><br>
</form>

</body>
</html>















