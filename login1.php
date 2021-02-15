<html>
<?php
 $username = filter_input(INPUT_POST,'username');
 $password = filter_input(INPUT_POST,'psw');
if (!empty($username))
{
if(!empty($password))
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
$sql = "INSERT INTO  account(username,password) values ('$username','$password')";
if ($conn->query($sql)){
echo "entered into database";
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
<body align="center" bgcolor="skyblue"><br><br><br>
<h1>Sign upSUCESSSFUL</h1>
<h2><a href="main.php">RETURN TO MAIN PAGE</h2>
</html>