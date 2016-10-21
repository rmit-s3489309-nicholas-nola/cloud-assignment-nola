<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<meta name="keywords" content="HTML, CSS, XML, XHTML, JavaScript">
<meta name="author" content="Surf Life Saving Sign-In">
<link rel="stylesheet" href="styles.css">
<?php
session_start();
if (isset($_POST['submit'])) { 
$hostname = "localhost";
$dbusername = "root";
$passworddb = "phpmyadmin";
$dbname = "patrollistdb";
	
	
	
	
//$conn = new mysqli($hostname, $dbusername, $passworddb, $dbname);
$conn = mysqli_connect('phpmyadmin.cfj6jxhppoax.ap-southeast-2.rds.amazonaws.com', 'phpMyAdmin', 'phpMyAdmin', 'cloudawsdb', 3306);
if ($conn->connect_error) {
    die("Connection to the database failed: " . $conn->connect_error);
}
	$usernameLogin = $_POST['member_username'];
	$pass = $_POST['member_password'];
	$sqlquery = $conn->query("SELECT * FROM members WHERE username='$usernameLogin' AND password='$pass'");
	
	$result = $sqlquery->num_rows;
	if ($result > 0 && $usernameLogin === "nicholas") {
		header("location: members_in_patrol_a.php");
		
	} else if ($result > 0 && $usernameLogin === "james") {	
        $usernameLogin = $sqlquery->fetch_assoc();
		header("location: members_in_patrol_b.php");
    } else {
        echo '<script language="javascript">';
		echo 'alert("ERROR: Incorrect Username or Password!")';
		echo '</script>';
    }
    $conn->close();
}
?>

</head>
<body>
	<h1><a href="index.php">Surf Life Saving Online Patrol</a></h1>
<!------------------------------------------- SPACER --------------------------------------------------->
<div class="content_members">
	<form id="login" action="" method="post" accept-charset="UTF-8"> <!-- stops characters that are not letters or numbers -->
		<fieldset id="login_feild">
		<legend>Members Login</legend>
<!------------------------------------------- SPACER --------------------------------------------------->
			<label for="username" >Enter Username:</label>
				<input type="text" name="member_username" id="member_pass_user"  maxlength="20" />
<!------------------------------------------- SPACER --------------------------------------------------->
			<label for="password" >Enter Password:</label>
				<input type="password" name="member_password" id="member_pass_user" maxlength="20" />
<!------------------------------------------- SPACER --------------------------------------------------->
			<!--<div id="selectPatrol">   
				<select id="patrols" name="Patrols" placeholder="Select Patrol">
					<option value="" disabled selected style="display: none;">Please Choose Patrol</option>
					<option value="A">Patrol A</option>
					<option value="B">Patrol B</option>
					<option value="C">Patrol C</option>
					<option value="D">Patrol D</option>
				</select>	
			</div>-->
<!------------------------------------------- SPACER --------------------------------------------------->
				<input id="login_submit" type="submit" name="submit" value="Login"/>
				<input id="login_submit" type="button" name="return" value="Return" onclick="location.href='index.php'" />
<!------------------------------------------- SPACER --------------------------------------------------->
		</fieldset>
	</form>
	
</div>
<!------------------------------------------- SPACER --------------------------------------------------->
<div id="footer"> 
<hr id="hr3" />
		<footer>Created by Nicholas Nola s3489309 | James Nola s3489403<br> Life Saving Online Patrol </a></footer>
</body>
</html>