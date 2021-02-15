
<div class="bg-img">
<h1 align="center"><i>PUBLIC ROAD TRANSPORT SYSTEM</h1>
<form method="POST" action="c1.php" class="container">
    <h1><font color=orange>COMPLIANTS</font></h1>
	<label><font color=white>email</font></label><br>
	<input type="text" name="email" placeholder="e-mail"><br>
	<label><font color=white>Complaint Type</font></label><br>
    <SELECT id="t2" name="select">
<option>Select</option>     
<option>Emercency</option>
   <option> Vehcile</option>
   <option> Tracking</option>
   <option> Booking</option>
   <option> Refund</option>
   </SELECT><br>
   <label><font color=white>Complaint Description</font></label><br>
    <textarea COLS=30 ROWS=8 placeholder="Comments..." id="t1" name="comment"></textarea><br><br>
    <button onclick="fn1()"class="btn">submit</button>

	<a href="main1.php">GO BACK</a>
  </form>

</div>
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

body, html {
  height: 100%;
}

* {
  box-sizing: border-box;
}

.bg-img {
  /* The image used */
  background-image: url("ll.jpg");

  /* Control the height of the image */
  min-height: 1000px;

  /* Center and scale the image nicely */
  background-position: center;
  background-repeat: no-repeat;
  background-size: cover;
  position: relative;
}

/* Add styles to the form container */
.container {
  position: absolute;
  right: 0;
  margin: 30px;
  max-width: 400px;
  padding: 80px;
  background-color:#ff;
}

/* Full-width input fields */
  input[type=password],{
  width: 100%;
  padding: 30px;
  margin: 5px 0 22px 0;
  border: none;
  background: #fff;
}

input[type=text]:focus, input[type=password]:focus {
  background-color: #ddd;
  outline: none;
}
input[type=label]{
	color : #ffff;
}

/* Set a style for the submit button */
.btn {
  background-color: #4CAF50;
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
<script type="text/javascript">
function fn1()
{
var s=document.getElementById("t2");
var a=document.getElementById("t1");
if(s.options[s.selectedIndex].value=="Select")
{
alert("select any option");
return false;
}
else if(a.value=="" || !(a.test(a.value)))
{
alert("comment any thing");
return false;
}
else
{
return true;
}
}
</script>

