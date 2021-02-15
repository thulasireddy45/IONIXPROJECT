<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<link rel="stylesheet" href="style.css">
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet" type="text/css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
<title>login page</title>
</head>
<style>
*{
margin:0;
padding:0;
font-family:Century Gothic;
}
header
{
background-image:url(88.jpg);
height:100vh;
background-size:cover;
background-position:center;
}
ul{
float:right;
list-style-typr:none;
margin-top:25px;
}
ul li{
display: inline-block;
}
ul li a{
text-decoration: none;
color:#182C61;
padding:5px 20px;
border:1px solid trasparent;
transition:0.6s ease;
}
ul li a:hover{
background-color:#fff;
color:#000;
}
ul li.active a{
background-color:#fff;
color: #000;
}
.navbar {
    font-family: Montserrat, sans-serif;
    margin-bottom: 0;
    background-color: #2d2d30;
    border: 0;
    font-size: 11px !important;
    letter-spacing: 4px;
    opacity: 0.9;
  }
  .navbar li a, .navbar .navbar-brand { 
    color: #d5d5d5 !important;
  }
  .navbar-nav li.active a {
    color: #fff !important;
    background-color: #29292c !important;
  }
  .navbar-default .navbar-toggle {
    border-color: transparent;
  }
.Transport img{
float: left;
width: 250px;
height: auto;
}
.box input[type="text"],.box input[type ="password"]
{
border:0;
background:none;
display:block;
margin:20px auto;
text-align:center;
border: 2px solid #F8EFBA;
padding:14px 10px;
width:200px;
outline:none;
color:white;
border-radius:24px;
transition:0.25s;
 }
.box input[type="text"]:focus,.box input[type ="password"]:focus{
width:280px;
border-color:#3498db;
}

.bg-img {

  background-image: url("88.jpg");
  min-height: 720px;

 
  background-position: center;
  background-repeat: no-repeat;
  background-size: cover;
  position: relative;
}

.box input[type="submit"]{
border:0;
background:#ffffffff;
display:block;
margin:20px auto;
text-align:center;
border: 2px solid #3498db;
padding:14px 40px;
width:200px;
outline:none;
color:black;
border-radius:24px;
transition:0.25s;
cursor:pointer;
}
.box input[type="submit"]:hover{
background:black;
color:white;
}
.main{
max-width: 1200px;
margin: auto;
}
p
{ position:center} 

.container {
  position:absolute;
  right: 0;
  margin: 20px;
  max-width: 400px;
  padding: 20px;
  background-color:#ff;
}

/* Full-width input fields */
  input[type=text]
 {
  width: 100%;
  padding: 15px;
  margin: 5px 0 22px 0;
  border: none;
  background: #f1f1f1;
}

input[type=text]:focus{
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
</style>
<title>ROAD TRANSPORT SERVICES</title>
<link rel="stylesheet" type="text/css" href="scc/style.css">
</head>
<body>
<header>
<nav class="navbar navbar-default navbar-fixed-top">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
      <a class="navbar-brand" href="#myPage"><img src="01.jpg" width=50 height=50></a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav navbar-right">
        <li><a href="#myPage">HOME</a></li>
        <li> <a href="#">MY ACCOUNT</a></li>
        <li><a href="https://mail.google.com">CONTACT US</a></li>
        <li> <a href="main.php">LOGOUT</a></li> 
          </ul>
        </li>
        
      </ul>
    </div>
  </div>
</nav>
<div class="main">
<div class="Transport">
</div>
<ul>
<li > <a href="#">HOME</a></li>
</ul>
</div>
<div class="title">
</div>
<div class="bg-img"><br><br><br>
<b><h1 align=center>ONLINE BOOKING PORTAL</h1></b>
  <form  method="POST" action="5.html" class="container">
    <h1> <font color="#f1f1f1">DETAILS</font></h1>
	 <label for="FIRST NAME"><b>FROM</b></label>
	 <input type="text"  placeholder="FROM" name="fn" required>
    
	 <label for="LAST NAME"><b>DESTINATION</b></label>
	 <input type="text" placeholder="DESTINATION" name="ln" required>

    <label for="email"><b>EMAIL</b></label>
    <input type="text" id="t3" placeholder="Enter E-mail" name="email" required>

	<label for="email"><b>PHONE NO</b></label>
    <input type="text" id="t3" placeholder="Enter Phone no" name="phno" required>

    <label for="psw"><b>FROM DATE</b></label>
    <input type="TEXT" id="t1" placeholder="dd/mm/yyyy" name="psw" required>
	
	 <label for="psw1"><b>TO DATE</b></label>
    <input type="TEXT" id="t1" placeholder="dd/mm/yyyy" name="psw1" required>

    <button type="submit" class="btn">CONFORM BOOKING</button>
  </form>
</div>
</body>
</html>

