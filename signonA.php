<!DOCTYPE html>

<html>
<head>
<meta charset="UTF-8">
<meta name="keywords" content="HTML, CSS, XML, XHTML, JavaScript, PHP">
<meta name="author" content="Surf Life Saving Sign-In">
<link rel="stylesheet" href="styles.css">

<?php
$name = "";
$last = "";
$club = "";
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if (empty($_POST["guest_firstname"])) {
    echo "First Name is required";
  } else {
    $name = test_input($_POST["guest_firstname"]);
  }

  if (empty($_POST["guest_lastname"])) {
    echo "Last Name is required";
  } else {
    $last = test_input($_POST["guest_lastname"]);
  }

  
}

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}

if (isset($_POST["submit"]) && $_POST["club"] === "Patrol A" ) { 
$first_name = $_POST["guest_firstname"];
$last_name = $_POST["guest_lastname"];
$club = $_POST["club"];
$on_off = "On";

$conn = mysqli_connect('phpmyadmin.cfj6jxhppoax.ap-southeast-2.rds.amazonaws.com', 'phpMyAdmin', 'phpMyAdmin', 'cloudawsdb', 3306) or die("Unable to connect to database! Please try again later");
mysql_select_db(cloudawsdb);
 
$sql = "INSERT INTO patrolA (first_name, last_name, club, on_off)
VALUES ('$first_name', '$last_name', '$club', '$on_off)";

if ($conn->query($sql) === TRUE) {
    echo '<script language="javascript">';
	echo 'alert("Thank you for Signing on!")';
	echo '</script>';
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();



} else {
$first_name = $_POST["guest_firstname"];
$last_name = $_POST["guest_lastname"];
$club = $_POST["club"];
$on_off = "On";
$conn = mysqli_connect('phpmyadmin.cfj6jxhppoax.ap-southeast-2.rds.amazonaws.com', 'phpMyAdmin', 'phpMyAdmin', 'cloudawsdb', 3306) or die("Unable to connect to database! Please try again later");
mysql_select_db(cloudawsdb);
 
$sql = "INSERT INTO patrolA (first_name, last_name, club, on_off)
VALUES ('$first_name', '$last_name', '$club', '$on_off')";

if ($conn->query($sql) === TRUE) {
    header('Refresh: 3;url=members_in_patrol_a.php');
    echo '<script language="javascript">';
	echo 'alert("Thank you for Signing on!")';
	echo '</script>';
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}


$conn->close();



}

?>




</head>
<body>
<h1><a href="index.php">Surf Life Saving Online Patrol</a></h1>

<div class="content">

	<form name="guestlogin" id="login" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post" accept-charset="UTF-8"> <!-- stops characters that are not letters or numbers -->
		<fieldset id="login_feild">
		<legend>Patrol Sign-On</legend>
				<label for="firstname" >Enter Name:</label><br />
				<input type="text" name="guest_firstname" id="guest_pass_user"  maxlength="20" /><br />
				<label for="lastname" >Enter Last Name:</label><br />
				<input type="text" name="guest_lastname" id="guest_pass_user"  maxlength="20" /><br />
				<label for="password" >Select A Patrol:</label>
			<div id="club_select">
				<select id="club" name="club" >
					<option style="display: none;"" value="null" disabled selected>Select an Option</option>
					<option value="patrol_A">Patrol A</option>
					<option value="Patrol_B">Patrol B</option>
				</select>
			</div>
				<input id="login_submit" type="submit" name="submit" value="Sign On" />
				<input id="login_submit" type="button" name="return" value="Return" onclick="location.href='members_in_patrol_a.php'" style="margin-left:100px;" />
		</fieldset>
	</form>

	
</div>

<div id="footer"> 
<hr id="hr3" />
		<footer>Created by Nicholas Nola s3489309 | James Nola s3489403<br> Life Saving Online Patrol </a></footer>
</body>
</html>