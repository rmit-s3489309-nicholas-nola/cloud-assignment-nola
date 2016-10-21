<!DOCTYPE html>

<html>
<head>
<meta charset="UTF-8">
<meta name="keywords" content="HTML, CSS, XML, XHTML, JavaScript, PHP">
<meta name="author" content="Surf Life Saving Sign-In">
<link rel="stylesheet" href="styles.css">





</head>
<body>
<h1><a href="index.php">Surf Life Saving Online Patrol</a></h1>

<div class="content">

	<form name="guestlogin" id="login" action="run.php" method="post" accept-charset="UTF-8"> <!-- stops characters that are not letters or numbers -->
		<fieldset id="login_feild">
		<legend>Guest Sign-On</legend>
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
				<input id="login_submit" type="button" name="return" value="Return" onclick="location.href='index.php'" style="margin-left:100px;" />
		</fieldset>
	</form>

	
</div>

<div id="footer"> 
<hr id="hr3" />
		<footer>Created by Nicholas Nola s3489309 | James Nola s3489403<br> Life Saving Online Patrol </a></footer>
</body>
</html>