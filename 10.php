<div class="bg-img">
<h1 align=center>ROAD TRANSPORT SYSTEM</h1>
  <form method="POST" onsubmit="return a()" action="connect.php" class="container">
    <h1> <font color="#f1f1f1">SIGN UP</font></h1>
	 <label for="FIRST NAME"><b>FIRST NAME</b></label>
	 <input type="text"  placeholder="FIRST NAME" name="fn" required>
    
	 <label for="LAST NAME"><b>LAST NAME</b></label>
	 <input type="text" placeholder="LAST NAME" name="ln" required>
    <label for="email"><b>USERNAME</b></label>
    <input type="text" id="t3" placeholder="Enter Email/Phno" name="email" required>

    <label for="psw"><b>Set Password</b></label>
    <input type="password" id="t1" placeholder="New Password" name="psw" required>
	

    <label for="psw1"><b>Confirm Password</b></label>
    <input type="password" id="t2" placeholder="Confirm New Password" name="psw1" required>

    <button type="submit" class="btn">SIGN UP</button><br><br>

	<a href="main.php" type="submit" class="btn" align="center">GO BACK</a>
  </form>
</div>

<style>
body, html {
  height: 100%;
}
.i
{
padding:30px 20px;
}



.bg-img {

  background-image: url("11.jpg");
  min-height: 720px;

  /* Center and scale the image nicely */
  background-position: center;
  background-repeat: no-repeat;
  background-size: cover;
  position: relative;
}

/* Add styles to the form container */
.container {
  position:absolute;
  right: 0;
  margin: 20px;
  max-width: 400px;
  padding: 20px;
  background-color:#ff;
}

/* Full-width input fields */
  input[type=text], input[type=password]
 {
  width: 100%;
  padding: 15px;
  margin: 5px 0 22px 0;
  border: none;
  background: #f1f1f1;
}

input[type=text]:focus, input[type=password]:focus {
  background-color: #ddd;
  outline: none;
}

/* Set a style for the submit button */
.btn {
  background-color: #EF935D;
  color: white;
  padding: 16px 20px;
  border: none;
  cursor: pointer;
  width: 100%;
  opacity: 0.9;
}

.btn:hover {
  opacity: 1;
}
</style>
</body>
<script type=""text/javascript">
function a()
{
var n1=document.getElementById("t1").value;
var n2=document.getElementById("t2").value;
var n3=document.getElementById("t3");
var c1=/^([a-z A-Z 0-9 \.]+)@([a-z A-Z 0-9 \.]+).([a-z A-Z])$/;
if(n1!=n2)
{

alert("Password doesn't Match");
return false;
}
else if(n3.value=="" || !(c1.test(n3.value)))
{
alert("invalid e-mail format");
return false;
}
else
{
return true;
}
}
</script>