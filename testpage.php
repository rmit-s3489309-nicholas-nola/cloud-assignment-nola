
<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<meta name="keywords" content="HTML, CSS, XML, XHTML, JavaScript">
<meta name="author" content="Surf Life Saving Sign-In">
<link rel="stylesheet" href="styles.css">
<?php


$conn = mysqli_connect('phpmyadmin.cfj6jxhppoax.ap-southeast-2.rds.amazonaws.com', 'phpMyAdmin', 'phpMyAdmin', 'cloudawsdb', 3306) or die("Unable to connect to database! Please try again later");
mysql_select_db(cloudawsdb);
 echo "worked";
//	$sql = $conn->query("SELECT first_name FROM testtable" );

$sql = "SELECT * FROM testtable";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "id: " . $row["first_name"] . "," .$row["last_name"] . "," .$row["club"] ."<br>";
    }
} else {
    echo "0 results";
}
$conn->close();
echo "closed";
?>

</head>
<body>
	<h1><a href="index.php">Surf Life Saving Online Patrol</a></h1>
<!------------------------------------------- SPACER --------------------------------------------------->
<div class="content_members">

	
</div>
<!------------------------------------------- SPACER --------------------------------------------------->
<div id="footer"> 
<hr id="hr3" />
		<footer>Created by Nicholas Nola s3489309 | James Nola s3489403<br> Life Saving Online Patrol </a></footer>
</body>
</html>