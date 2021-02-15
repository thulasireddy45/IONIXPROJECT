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
background-image:url(123.jpg);
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
  //.navbar-nav li a:hover {
  //  background-color:#ddd;
   // color: #fff !important;
 // }

 // navbar-nav li a {
   // float:right;
    //display:block;
    //color:#f2f2f2;
    //text-align:centre;
    //padding:14px 16px;
    //text-decoration:none;
  //}
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
</style>
<title>ROAD TRANSPORT SERVICES</title>
<link rel="stylesheet" type="text/css" href="scc/style.css">

<script>
a=document.getElementById("t1").value;
b=document.getElementById("t2").value;
if(a.trim()!="" && b.trim()!="")
{

}
</script>
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
        <li><a href="main.php">HOME</a></li>
        <li> <a href="10.php">SIGN UP</a></li>
        <li> <a href="compli.php">HELP</a></li> 
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
<li > <a href="">HOME</a></li>


</ul>
</div>
<br>
<br><br><br><br><br><br>
<br><br><br><br>
<form method="POST" class="box" align="center" action="1.php">
<b><font color=white>USER NAME:  </font></b><input type="text" name="firstname" placeholder="E-mail/Phone no" id="t1" required>
<br> <br>
 <b><font color=white> PASSWORD:  </font></b>
  <input type="password" name="lastname" placeholder="password" id="t2" required>
  <br><br>
  <input onclick="yash()" type="submit" value="LOGIN">
</form> 
<div class="title">
</div>
</body>
</html>

