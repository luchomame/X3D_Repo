<?
	session_start();
	unset($_SESSION["failedLogin"]);
	unset($_SESSION["failedUser"]);
	unset($_SESSION["failedEmail"]);
?> 
<html>
<head>
        <script type='text/javascript' src='https://www.x3dom.org/download/x3dom.js'> </script>
        <link rel='stylesheet' type='text/css' href='https://www.x3dom.org/download/x3dom.css'/>
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

</head>
<title>Home</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body{
     background-color: #FAFAFA;
        margin:0;
        padding:0;

 }
        
.grid-container {
  display: grid;
  justify-content: end;
  grid-template-columns: 100px 100px 100px; /*Make the grid smaller than the container*/
  grid-gap: 40px;
  background-color: #FAFAFA;
  padding: 10px;
    
}

.grid-container > div {
  background-color: #FAFAFA(255, 255, 255, 0.8);
  text-align: left;
  padding: 30px 0;
  font-size: 30px;
    
}
#overlayHeader {
        position:absolute;
        z-index:5;
        top:200px;
        left:25px;
        padding:5px;
        border:2px solid black;
        background-color:#D4D4D4;
        opacity:0.9;
    }

	
/* Navbar stylng begins here */

nav>ul {
height: 50px;
line-height: 50px;
text-align: center;
background-color: #333;
}

/*nav>ul>li {
display: inline-block;
position: relative;
background-color: #333;
border-radius: 5px;
padding: 0 20px;
}*/
nav>ul>li{
display: inline-block;
position: relative;
background-color: #333;
border-radius: 5px;
padding: 0 20px;
}

nav ul li a {
text-decoration: none;
display: block;
color: white;
}

nav ul li a:hover {
color: 88ACFF;
}
body {font-family: Arial, Helvetica, sans-serif;
text-align: center;
}


.rating > span:hover:before {
   content: "\2605";
   position: absolute;
}
.checked {
  color: orange;
}
</style>
  
<body>
  
    <nav>
        <ul>
          <li><a href="home.php">Home</a></li>
          <li><a href="3dmodels.php?action=empty">3D Models</a></li>
          <li><a href="manual.php">Manual</a></li>
          <li><a href="upload.php">Upload</a></li>
<?
	if($_SESSION["isLogged"] == 0){
?>
          <li><a href="login.php">Login</a></li> 
          <li><a href="Register.html">Register</a></li>

<?
	}else{
?>
		  <li><a href="signout.php">Sign Out</a></li>
<?
	}
?>
<?

	if($_SESSION["isAdmin"] == 1) {
?>
	  <li><a href="admin.php">Admin</a></li>
<?
	}
?>

        </ul>
         </nav>
    
    
     
<h1><i><center>Weekly User Spotlight<center></i></h1>
	   <p><b><center> This Weeks Top Rated Model: "Human Body"
	   <br> Submitted by: u/Ricky on 11/13/2019 
	   <center></b></p>
        
<div class="w3-container">
  
 
</div>

<div class="w3-row">
        <div class="w3-container">
        <div id="overlayHeader">
	
          <h1 align = "left">Human Body</h1>
		  <h4 align = "left"> Rating: 
			<span class="fa fa-star checked"></span>
			<span class="fa fa-star checked"></span>
			<span class="fa fa-star checked"></span>
			<span class="fa fa-star checked"></span>
			<span class="fa fa-star"></span><br><br> </h4>
          <hr/>
          <p align = "left" ><b>Author: Ricky<br/> 
		  File Size: 4.31 KB<br/> 
		  Polygon Count: 50,000<br/> 
		  Keywords: Body, Human, 3D<br/><br>

	
		  <a href="x3d/large/BodySkinIndexedFaceSetNIST.x3d" download>Download Here</a> <br><br>
		  

			 <br><br>

			<center><button onclick="window.location.href = '3dmodels.php';">Back To 3D Models</button></center>
		  </b>
		  </p>

  </div>
  

    <!--CODY YOU SHOULD BE ABLE TO DROP YOUR X3D HERE-->
      <X3D height='900px'> 
            <scene>
            <inline nameSpaceName="body" mapDEFToID="true" url="x3d/large/BodySkinIndexedFaceSetNIST.x3d" />
            </scene>
        </x3d>
    </div>
    </div>


        <div class="rating">
		  Rating:
			<span>☆</span><span>☆</span><span>☆</span><span>☆</span><span>☆</span>
			 <br><br>
</div>
    </body>

</html>
