<!DOCTYPE html>

<html>
<head>
<meta charset="UTF-8">
<meta name="keywords" content="HTML, CSS, XML, XHTML, JavaScript">
<meta name="author" content="Surf Life Saving Sign-In">
<link rel="stylesheet" href="styles.css">
<!--<script>
setTimeout(function () {
   window.location.href= 'http://ec2-52-64-242-227.ap-southeast-2.compute.amazonaws.com/cloud-assignment-nola/members_in.php'; // the redirect goes here

},5000);
</script>-->

</head>
<body>
	<h1><a href="index.php">Surf Life Saving Online Patrol</a></h1>
<div class="content_operating">

  

<?php
  
 if (isset($_POST["submit"])) { 
$delete = $_POST["delete"];

$conn = mysqli_connect('phpmyadmin.cfj6jxhppoax.ap-southeast-2.rds.amazonaws.com', 'phpMyAdmin', 'phpMyAdmin', 'cloudawsdb', 3306) or die("Unable to connect to database! Please try again later");
mysql_select_db(cloudawsdb);
 
$sql = "DELETE FROM patrolB WHERE first_name = '$delete'";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}


$conn->close();

echo '<script language="javascript">';
echo 'alert("Thank you for Signing on!")';
echo '</script>';

}


?>

 

<form id="login" action="operating.php" method="post" accept-charset="UTF-8">
<input id="signoutuser" type="text" name="delete" value="" />
<input id="signout" type="submit" name="submit" value="Sign Out Member" />

</form>
<p style="padding-top:50px;"></p>
<hr id="hr3" />
		<footer>Created by Nicholas Nola s3489309 | James Nola s3489403<br> Life Saving Online Patrol </a></footer>
		</div>
</body>
</html>
