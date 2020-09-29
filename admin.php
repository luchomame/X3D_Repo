<?
session_start();
?>
<html>
<head>
        <script type='text/javascript' src='https://www.x3dom.org/download/x3dom.js'> </script>
        <link rel='stylesheet' type='text/css' href='https://www.x3dom.org/download/x3dom.css'/>
</head>

<title>Administration</title>

     <meta name="viewport" content="width=device-width, initial-scale=1">

<style>

body{
     background-color: #FAFAFA;
        margin:0;
        padding:0;
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


</style>

<body>

    <nav>
        <ul>
          <li><a href="home.php">Home</a></li>
          <li><a href="3dmodels.php">3D Models</a></li>
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

          </ul>
      </nav>







          <h1><i><center>Pending Category Requests<center></i></h1>
<form method="post">
<input type="submit" name="button1" value="Clear Uploads"/>
</form>

<?php


        $myfile = fopen("admin.txt", "r");
	echo "<div class='container'>";
        while(!feof($myfile)) {
                 echo "<div class='item'>" . fgets($myfile) . "</div><br>";
}
	echo "</div>";
	
	if(isset($_POST['button1'])) {
		$mynewfile = fopen("admin.txt", "w");
		fwrite($mynewfile, "");
?>
		<script type="text/javascript">
window.location.href = 'http://web-students.armstrong.edu/~lt02485/php/P4/admin.php';
</script>
<?php
}
?>




</body>
</html>

