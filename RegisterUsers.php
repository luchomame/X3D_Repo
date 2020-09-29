<html>
<?
$dbh = mysqli_connect("localhost","lt02485","Bzp9yn9G","lt02485") or die("Couldn't connect to database.");
//$db = mysql_select_db("lt02485", $dbh) or die("Couldn't select database.");

$username = $_POST["uname"];
$password = $_POST["psw"];
$fName = $_POST["fname"];
$lName = $_POST["lname"];
$email = $_POST["email"];

// check if user exists
$checkUSER = "SELECT * FROM userstest1 WHERE username='$username'";
$check = mysqli_query($dbh,$checkUSER);
$checkRow = mysqli_num_rows($check);
if($checkRow > 0){
	$_SESSION["failedUser"] = 1; 
?>
<script>
	window.location="Register.html";
</script>
<?
	exit(0);
}
$checkEMAIL = "SELECT * FROM userstest1 WHERE Email='$email'";
$check = mysqli_query($dbh,$checkEMAIL);
$checkRow = mysqli_num_rows($check);
if($checkRow > 0){
	$_SESSION["failedEmail"] = 1; 
?>
<script>
	window.location="Register.html";
</script>
<?
	exit(0);
}


$sql = "INSERT INTO userstest1 VALUES('$fName','$lName','$username','$password','$email', 0)";

$result = mysqli_query($dbh, $sql) or die("Something is wrong with your SQL statement.");
?>
<script>
	window.location="login.php";
</script>
</html>
