<html>
<? 
$dbh = mysqli_connect("localhost","lt02485","Bzp9yn9G","lt02485");

$file = fopen("BlockTower.x3d","r");
$data =fread($file, filesize("BlockTower.x3d"));
$data = addslashes($data);

fclose($file);
$data = htmlentities($data);

$query = "INSERT INTO x3d(file) VALUES('$data')";
mysqli_query($dbh, $query) or die("error with the query");
print "File has been uploaded";

/*echo "what is being saved into DB:";
echo "<br/>";
$result = '';
while(!feof($file)){
	$result .= fgets($file);
	echo ($result);
}
	$result = htmlentities($result);
	$query = "INSERT INTO x3d(file) VALUES('$result')";
	mysqli_query($dbh, $query) or die("error with the query");

	//WORKS!!!!!
	echo $result;
	echo "<br/>";*/

$query2 = "SELECT file FROM x3d WHERE id = 1";
$result = mysqli_query($dbh, $query2) or die("Query 2 failed");

if(mysqli_num_rows($result) == 0) {
	echo "DB is empty";
} else {
	$myfile = fopen("test3.txt","w");
	while(list($contentOfFile) = mysqli_fetch_array($result)) {
		$contentOfFile = html_entity_decode($contentOfFile);
		fwrite($myfile, $contentOfFile);
	}
	
	fclose($myfile);
}


/*$fileContent = fread($file, $length);
$content = addslashes($content);
fclose($file);
echo $fileContent;

$query = "INSERT INTO X3D VALUES('$content')";
mysqli_query($dbh, $query) or die("Query failed");
echo 'upload successful';

$query2 = "SELECT * FROM X3D";
$result = mysqli_query($dbh, $query2) or die("Query 2 failed");

if(mysqli_num_rows($result) == 0) {
	echo "DB is empty";
} else {
	$myfile = fopen("test2.x3d","a");
	while(list($contentOfFile) = mysqli_fetch_array($result)) {
		fwrite($myfile, $contentOfFile);
	}
	
	fclose($myfile);
}*/
?>
</html>
