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
  

//////////////////////////////////// FILLER /////////////////////////////////////////////////////////////
if (isset($_POST['remove'])) {
   $fname = $_POST["fname"];
   $lname = $_POST["lname"];
$conn = mysqli_connect('phpmyadmin.cfj6jxhppoax.ap-southeast-2.rds.amazonaws.com', 'phpMyAdmin', 'phpMyAdmin', 'cloudawsdb', 3306) or die("Unable to connect to database! Please try again later");
mysql_select_db(cloudawsdb);

$sql = "DELETE FROM patrolB WHERE first_name = '$fname' AND last_name = '$lname' AND on_off";
if ($conn->query($sql) === TRUE) {
    header('Refresh: 3;url=members_in_patrol_b.php');
	print "<label>That member has been removed</label>";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
$conn->close();
//echo '<script language="javascript">';
//echo 'alert("That member has been signed off")';
//echo '</script>';

//////////////////////////////////// FILLER /////////////////////////////////////////////////////////////

} else if (isset($_POST['update'])) {
       $fname = $_POST["fname"];
	   $lname = $_POST["lname"];
$conn = mysqli_connect('phpmyadmin.cfj6jxhppoax.ap-southeast-2.rds.amazonaws.com', 'phpMyAdmin', 'phpMyAdmin', 'cloudawsdb', 3306) or die("Unable to connect to database! Please try again later");
mysql_select_db(cloudawsdb);
 
$sql = "UPDATE patrolB SET on_off = 'Off' WHERE first_name = '$fname' AND last_name = '$lname'";

if ($conn->query($sql) === TRUE) {
    header('Refresh: 3;url=members_in_patrol_b.php');
	print "<label>That member has been signed off</label>";
//////////////////////////////////// FILLER /////////////////////////////////////////////////////////////	
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}


$conn->close();

//echo '<script language="javascript">';
//echo 'alert("That member has been signed off")';
//echo '</script>';


} else {
    
}

?>

 

<form id="login" action="delete_b.php" method="post" accept-charset="UTF-8">
<input id="signoutuser" type="text" name="fname" value="" placeholder="First name" />
<input id="signoutuser" type="text" name="lname" value="" placeholder="Last name" />
<input id="signout" type="submit" name="remove" value="Remove member" />
<input id="signout" type="submit" name="update" value="Update Member" />

</form>
<p style="padding-top:50px;"></p>
<hr id="hr3" />
		<footer>Created by Nicholas Nola s3489309 | James Nola s3489403<br> Life Saving Online Patrol </a></footer>
		</div>
</body>
</html>
