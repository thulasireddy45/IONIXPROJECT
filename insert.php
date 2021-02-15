<?php
$regno=$_POST['regno'];
$name=$_POST['name'];
$branch=$_POST['branch'];

if(!empty($regno) || !empty($name)  || !empty($branch)){
$host="localhost";
$dbUsername="root";
$dbPassword="";
$dbname="test";

$conn=new mysqli($host,$dbUsername,$dbPassword,$dbname);
if(mysqli_connect_error()){
 die('Connect Error('.mysqli_connect_error().')'.mysqli_connect_error());
}
else{
  $SELECT= "SELECT regno From details where regno=? Limit 1";
  $INSERT="INSERT into login(regno,name,branch) values(?,?,?)";
    
$stmt=$conn->prepare($SELECT);
$stmt->bind_param("i",$regno);
$stmt->execute();
$stmt->bind_result($regno); 
$stmt->store_result();
$rnum=$stmt->num_rows;
}
if($rnum==0){
$stmt->close();
$stmt=$conn->prepare($INSERT);
$stmt->bind_param("iss",$regno,$name,$branch);
$stmt->execute();
echo "submitted successfully";
}
else{
echo "details were already submitted";
}
$stmt->close();
$conn->close();

else{
echo "all fields are required";
die();
}
?>