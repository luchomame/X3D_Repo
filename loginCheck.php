<?
session_start();
$_SESSION["isLogged"] = 0;
?>
<html>
<?
$dbh = mysqli_connect("localhost","lt02485","Bzp9yn9G","lt02485") or die("Couldn't connect to database.");

$username = $_POST["uname"];
$password = $_POST["psw"];

// check if user exists
$checkUSER = "SELECT username, password FROM userstest1 WHERE username='$username' AND password='$password'";
$check = mysqli_query($dbh,$checkUSER);
$checkRow = mysqli_num_rows($check);
if($checkRow > 0){
	$checkAd = "SELECT admin FROM userstest1 WHERE username='$username'";
	$check = mysqli_query($dbh,$checkAd);
	$row = mysqli_fetch_array($check);

	if($row['admin']  == 1) {
	unset($_SESSION["failedLogin"]);
	$_SESSION["isLogged"] = 1;
	$_SESSION["isAdmin"] = 1;	
	$_SESSION["username"] = $username;
	}
	else {
	  unset($_SESSION["failedLogin"]);
          $_SESSION["isLogged"] = 1;
          $_SESSION["isAdmin"] = 0;
          $_SESSION["username"] = $username;
	}

?>
<script>
	window.location="home.php";
</script>
<?
	exit(0);
} else {
	$_SESSION["failedLogin"] = 1; 
?>
<script>
	window.location="login.php";
</script>
<?
	exit(0);	
}
$checkEMAIL = "SELECT * FROM users WHERE Email='$email'";
$check = mysql_query($dbh,$checkEMAIL);
$checkRow = mysqli_num_rows($check);

$sql = "INSERT INTO users VALUES('$username','$password','$fName','$lName','$email')";

$result = mysql_query($sql, $dbh) or die("Something is wrong with your SQL statement.");
?>
<script>
	window.location="Register.html";
</script>
</html>

