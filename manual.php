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
</head>
   
<title>Manual</title>
   
     <meta name="viewport" content="width=device-width, initial-scale=1">

<style>

body{
     background-color: #FAFAFA;
        margin:0;
        padding:0;
 } 
 
 
        
/* Navbar styling begins here */

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

<?
	if($_SESSION["isAdmin"] == 1) {
?>
	  <li><a href="admin.php">Admin</a></li>
<?
	}
?>	

	</ul>
      </nav>
	  
	  <h1><i><center>How To Use The Repository<center></i></h1>

<table width = "70%" align="center" bgcolor="lightgrey" border="4" cellpadding="10">
<tbody>
<tr>
<td>
<p style="font-size:140%;">
<b>INTRODUCTION</b><br>
- This X3D repository will allow users to search, 
upload/download and view a large collection of X3D models. This repository differs from 
other repositories found on the web as it consists strictly of X3D models and users are 
able to upload their own creations. Users will apply public labels/keywords to their X3D uploads. 
This will improve and refine the classification system in a similar fashion like a folksonomy. 
</P>
<P style="font-size:140%;">
<b>HOME</b><br>
- From the <a href="home.php">Home Menu</a>, the user will view the weekly spotlight X3D model. 
The user will find the model, a model name, and a description of the model. The model will also 
display the average user rating based on 5 starts. Author information, file size, polygon count, 
and keywords will be included. If the user wishes to download the spotlight model, they can do 
some from the home page (or through the filter system under <a href="3dmodels.php">3D Models</a> )
</P>
<P style="font-size:140%;">
<b>3D MODELS</b><br>
- From <a href="3dmodels.php">3D Models</a>, 
the user will search for a specific model, model category, author, or model size via the search bar. 
The user can also utilize the filtering system to narrow their search based on preset options: polygon 
size: large (>50,000), medium (10,000-50,000), small (<10,000), and average user rating. The models can
 be displayed in ascending or descending order. There is a reset option so the user may start over if they feel they made a mistake. 
</P>
<P style="font-size:140%;">
<b>MANUAL</b><br>
- From the <a href="manual.php">Manual</a> section, the user will learn how to use the repository.
</P>
<P style="font-size:140%;">
<b>UPLOAD</b><br>
- From the <a href="upload.php">Upload Menu</a>, the 
user will upload their own X3D models. The user will need to assign a name to the model and category(s) 
(A dropdown menu of basic categories will display. As the user makes a selection, another series of categories 
will display allowing the user to refine their choices).
</P>
<P style="font-size:140%;">
<b>REGISTER</b><br>
- From the <a href="Register.html">Register Menu</a>, the user can register 
or log in to the repository. To register, the user will be required to supply their first and last name, and an email. 
The user may use their email address as their username or create a new one. The user will supply answers to security 
questions so that their login credentials may be retrieved if forgotten. 
</P>
<P style="font-size:140%;">
<b>LOGIN</b><br>
- To <a href="login.php">Log in</a> to the repository, the user will 
enter their username and password, which will be verified. After registering/logging in, the user will be able to 
download/upload X3D models. If the user forgets their login credentials, there is a button labeled “forgot password”. 
Once clicked, the user will answer a series of questions they previously supplied answers to during registration. 
If the answers match, their password will be displayed.

</P>
</td>
</tr>
</tbody>
</table>
  






    
</body>
</html>


        


