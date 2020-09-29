<?
	session_start();
	unset($_SESSION["failedLogin"]);
	

	$info = pathinfo($_FILES['fileToUpload']['name']);
	$ext = $info['extension']; // get the extension of the file
	$newname = "testUpload.".$ext; 
	
	$target = $newname;
	echo "a". $_FILES['fileToUpload']['tmp_name'];
	move_uploaded_file($_FILES['fileToUpload']['tmp_name'], $target) or die("did not work");

?> 
<html>
<h1> Did it work? </h1>
</html>