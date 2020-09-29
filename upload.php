<?
	session_start();
	unset($_SESSION["failedLogin"]);
	unset($_SESSION["failedUser"]);
	unset($_SESSION["failedEmail"]);
?> 

<!DOCTYPE html>

<html>
<head>
<style>

body{
background-color: gainsboro
}  

ul{
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

nav>ul>li {
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

input[type=text], select {
  width: 250px;
  padding: 10px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid black;
  border-radius: 4px;
  box-sizing: border-box;
}

input[type=submit] {
  width: 100px;
  background-color: #333;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  border-radius: 4px;
  cursor: pointer;
}

input[type=submit]:hover {
  background-color: #88ACFF;
}




/* organize the label */
label {
  width:100px;
  display: inline-block;
  text-align: left;
}
h1 {
	text-align:center;
}

</style>
<title>Upload</title>

</head>
    
  
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
	<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">

<h1><i>Upload Form</i></h1>


        
<div class="w3-container">
  
 
</div>
    
<div class="w3-row">
  <div class="w3-container w3-#b38b6d">
     <div class="w3-container w3-onehalf">
      
     <div class="grid-container"> 
<div>
<?
	if($_SESSION["isLogged"] == 0){
?>
  <a href="login.php">Login to upload</a>
<?
	}
?>  

<form action="uploadSuccessful.html" onsubmit="return getExt();" method="post" enctype="multipart/form-data">
	<label>Model Name:</label>
	<input size="10" maxlength="25" name="Mname" type="text" required /> <br /><br /> 
	<label>Keywords:</label> <input size="10" maxlength="25" name="keywords" type="text" required /> <br /><br /> 

<!-- Drop down list -->
<label>Model Category:</label>
 <select id="dropdownlist" name="categories" onchange="javascript:populate()"> 
	<option>Categories </option>
	  <optgroup label="Vehicles">
		 <option>2 Wheel</option>
		 <option>4 Wheel</option>
	  </optgroup>
		<optgroup label="Nature">
		 <option>Trees</option>
		 <option>Flowers</option>
	  </optgroup>
		<optgroup label="Kitchen">
		 <option>Pots</option>
		 <option>Pans</option>
	  </optgroup>
	  <optgroup label="Building">
		 <option>One Story</option>
		 <option>Two Story</option>
	  </optgroup>
	  <optgroup label="New category" id="add">
		 <option>New category...</option>
	  </optgroup>
</select><br /><hr />
<script type="text/javascript">
		var s1 = document.getElementById('dropdownlist');
		function populate(){
			s1 = document.getElementById('dropdownlist');
			if(s1.value == "New category...") {
				document.getElementById("ifYes").style.display = "block";
			}
			else {
				document.getElementById("ifYes").style.display = "none";
			}
		}
</script>

	<div id="ifYes" style="display:none">
		<label>New Category</label>
		<input type="text" id="newCat" size="10" maxlength="25"><br/>
		<label>New Subcategory</label>
		<input type="text" id="newSub" size="10" maxlength="25"><br/>
	</div>

    Select .x3D file to upload:
<?
	if($_SESSION["isLogged"] == 0) {
?>
    <input type="file" name="fileToUpload" id="fileToUpload" disabled>
<?
	}else {
?>
	 <input type="file" name="fileToUpload" id="fileToUpload">
<?
	}
?>

	<br/>
    <input type="submit" value="Upload" name="submit"/>
</form>
     
  <br>

</div>
         </div>
      </div>
    </div>
    </div>

<script>

	function getExt(){
		if(document.getElementById('dropdownlist').value == "New category..."){
			if(document.getElementById("newCat").value == "" || document.getElementById("newSub").value == 0){
				alert("Must enter a category and subcategory");
				return false;
			}
		}
		
		if(document.getElementById("fileToUpload").disabled){
			alert("Log in first");
			return false;
		}
		if(document.getElementById('dropdownlist').value == "Categories"){
			alert("Choose a category");
			return false;
		}
		
		file = document.getElementById("fileToUpload").value;
		ext = file.split('.').pop();
		ext.toLowerCase();
		if(ext == "x3d" || ext == "x3db" || ext == "x3dv")
			return true;
		else {
			alert("Not an x3d, x3db, or x3dv file.");
			return false;
		}
		
		
	}
</script>	
    
</body>
</html>


        


