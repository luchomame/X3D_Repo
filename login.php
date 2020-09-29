<?
	session_start();
	unset($_SESSION["failedUser"]);
	unset($_SESSION["failedEmail"]);


?> 
<html>
   <link href="./css/styles.css" rel="stylesheet" type="text/css"> 
    <style>
body{background-color: gainsboro}  
ul {
background-color: yellow;
list-style-type: none;
margin:0;
padding: 0;
z-index:6;
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

body {font-family: Arial, Helvetica, sans-serif;
text-align: center;
}
* {box-sizing: border-box;}

input[type=text], select, textarea {
  width: 100%;
  padding: 12px;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
  margin-top: 6px;
  margin-bottom: 16px;
  resize: vertical;
}

input[type=submit] {
  background-color: #4CAF50;
  color: white;
  padding: 12px 20px;
  border: none;
  border-radius: 4px;
  cursor: pointer;
}

input[type=submit]:hover {
  background-color: #45a049;
}

.container {
  border-radius: 5px;
  background-color: #f2f2f2;
  padding: 20px;
}

form {
  border: 3px solid #f1f1f1;
}

/* Full-width inputs */
input[type=text], input[type=password] {
  width: 250px;                     /* modified */
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  box-sizing: border-box;
}

/* Set a style for all buttons */
button {
  background-color: #333;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  width: 350px;              /* modified */
}

/* Add a hover effect for buttons */
button:hover {
  opacity: 0.8;
    background-color: #88ACFF;
}

/* Add padding to containers */
.container {
  padding: 16px;
}

/* The "Forgot password" text */
span.psw {
  float: right;
  padding-top: 16px;
}

.center {
  margin: auto;
  width: 50%;
  background-color: #f2f2f2;
  padding: 5px;
}

/* Change styles for span and cancel button on extra small screens */
@media screen and (max-width: 300px) {
  span.psw {
    display: block;
    float: none;
  }

}

/* organize the label */
label {
  width:100px;
  display: inline-block;
  text-align: left;
}

</style>
  
<body>
  
    <nav>
        <ul>
          <li><a href="home.php">Home</a></li>
          <li><a href="3dmodels.php?action=empty">3D Models</a></li>
          <li><a href="manual.php">Manual</a></li>
          <li><a href="upload.php">Upload</a></li>
          <li><a href="login.php">Login</a></li> 
		  <li><a href="Register.html">Register</a></li>
        </ul>
         </nav>
  <meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
  

    <meta name="viewport" content="width=device-width, initial-scale=1">


<body>
<title>Login</title>
<h1><i><center>Login<center></i></h1>


        
<html>
<style>


</style>
<body>

<form action="loginCheck.php" method="post">


  <div class="container">
    <label for="uname"><b>Username</b></label>
    <input type="text" maxlength="15" placeholder="Enter Username" pattern="[a-zA-Z0-9]{6,12}" 
		name="uname" title="Must be 8-12 characters" required>
	<br/>
    <label for="psw"><b>Password</b></label>
    <input type="password" maxlength="15" placeholder="Enter Password" pattern="[a-zA-Z0-9]{8,12}" 
		title="Must be 8-12 characters" name="psw" required>
	<br/>
	<input type="checkbox" checked="checked" name="remember"> <label><small>Remember me</small></label>
	<br/>
<?
if($_SESSION["failedLogin"] > 0){
?>
    <p style="color:red;">Incorrect username or password.</p>
<?
	}
?>
    <button type="submit">Login</button>
   </div>
  <div class=container><span class="center"><a href="Register.html">No account? Register here.</a></span></div>
  <div class="container" style="background-color:#f1f1f1">
    <span class="psw"><a href="#">Forgot password?</a></span>
  </div>

</form>
    
</body>
</html>


        


