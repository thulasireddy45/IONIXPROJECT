<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
* {
  box-sizing: border-box;
}

body {
  margin: 0;
  font-family: Arial, Helvetica, sans-serif;
}

/* The grid: Three equal columns that floats next to each other */
.column {
  float: left;
  width: 33.33%;
  padding: 50px;
  text-align: center;
  font-size: 25px;
  cursor: pointer;
  color: white;
}

.containerTab {
  padding: 100px;
  color: white;
}

/* Clear floats after the columns */
.row:after {
  content: "";
  display: table;
  clear: both;
}

/* Closable button inside the container tab */
.closebtn {
  float: right;
  color: white;
  font-size: 35px;
  cursor: pointer;
}
</style>
</head>
<body>

<div style="text-align:center">
  <h2>TOURIST PLACES IN INDIA</h2>
  <p>select any one catageroy:</p>
</div>

<!-- Three columns -->
<div class="row">
  <div class="column" onclick="openTab('b1');" style="background:gray;">
    RELIGIOUS PLACES
  </div>
  <div class="column" onclick="openTab('b2');" style="background:orange;">
    ADVENTURE PLACES
  </div>
  <div class="column" onclick="openTab('b3');" style="background:yellow;">
    ENVIRONMENT PLACES
  </div>

</div>

<!-- Full-width columns: (hidden by default) -->
<div id="b1" class="containerTab" style="display:none;background:gray">
   <span onclick="this.parentElement.style.display='none'" class="closebtn">&times;</span>
  <h3>RELIGIOUS PLACES IN INDIA</h3>
  <p><a href="https://en.wikipedia.org/wiki/Golden_Temple">Golden Temple/Swarn Mandir/Harmandir Sahib in Amritsar</a></p><br>
   <p><a href="https://en.wikipedia.org/wiki/Konark_Sun_Temple">Sun Temple (Surya Mandir) in Konark</a></p><br>
    <p><a href="https://en.wikipedia.org/wiki/Jagannath_Temple,_Puri">Jagannath Temple (Jagannath Mandir) in Puri</a></p><br>
   <p><a href="https://en.wikipedia.org/wiki/Venkateswara_Temple,_Tirumala">Tirumala Venkateswara Temple in Tirupati</a></p><br>
<p><a href="https://en.wikipedia.org/wiki/Madurai">Madurai in Tamil Nadu</a></p><br>
		
</div>

<div id="b2" class="containerTab" style="display:none;background:orange">
  <span onclick="this.parentElement.style.display='none'" class="closebtn">&times;</span>
  <h3>ADVENTURE PLACES IN INDIA</h3>
	 <p><a href="https://en.wikipedia.org/wiki/Bir,_Himachal_Pradesh">Bir-Billing in Himachal pradesh</a></p><br>
	 <p><a href="https://en.wikipedia.org/wiki/Roopkund">Roopkund Trek in  Uttarakhand</a></p><br>
	 <p><a href="https://goatoursplanner.com/goa-day-trips/flyboarding-in-goa/">Flyboarding in Goa.</a></p><br>
 	 <p><a href="https://www.thrillophilia.com/states/kerala/tags/zip-lining">Flying Fox Adventure in Kerala</a></p><br>
	 <p><a href="https://traveltriangle.com/karnataka-tourism/mysore/things-to-do/skydiving">Skydiving in Mysore</a></p><br>
</div>

<div id="b3" class="containerTab" style="display:none;background:yellow">
  <span onclick="this.parentElement.style.display='none'" class="closebtn">&times;</span>
  <h3>ENVIRONMENT PLACES IN INDIA</h3>
	<p><a href="https://www.holidify.com/places/coorg/">Coorg in Karnataka</a></p><br>
	<p><a href="https://en.wikipedia.org/wiki/Thenmala">Thenmala in Kerala.</a></p><br>
	<p><a href="https://www.thrillophilia.com/places-to-visit-in-yelagiri">Yelagiri in Tamil Nadu</a></p><br>
	<p><a href="https://en.wikipedia.org/wiki/Pakhal_Lake">Pakhal lake in Telangana</a></p><br>
	<p><a href="https://www.holidify.com/places/munnar/">Munnar in kerala</a></p><br>
</div>



<script>
function openTab(tabName) {
  var i, x;
  x = document.getElementsByClassName("containerTab");
  for (i = 0; i < x.length; i++) {
    x[i].style.display = "none";
  }
  document.getElementById(tabName).style.display = "block";
}
</script>
<form method="POST" class="box" align="center" action="homepagefinal.php">

  <button type="submit" class="btn">CONTINUE BOOKING</button>
</form> 
</body>
</html> 
