<!DOCTYPE html>

<html>
<head>
<meta charset="UTF-8">
<meta name="keywords" content="HTML, CSS, XML, XHTML, JavaScript">
<meta name="author" content="Surf Life Saving Sign-In">
<link rel="stylesheet" href="styles.css">



</head>
<body>
	<h1><a href="index.php">Surf Life Saving Online Patrol</a></h1>
<div class="content_members">
	<form id="login" action="patrolSign Function" method="post" accept-charset="UTF-8"> <!-- stops characters that are not letters or numbers -->
		<fieldset id="login_feild">
		<legend>Patrol Sign On</legend>
			<label for="username" >Enter Username:</label>
				<input type="text" name="member_username" id="member_pass_user"  maxlength="20" />
			<label for="password" >Enter Password:</label>
				<input type="password" name="member_password" id="member_pass_user" maxlength="20" />
			<div id="selectPatrol">   
				<select id="patrols" name="Patrols" placeholder="Select Patrol">
					<option value="" disabled selected style="display: none;">Please Choose Patrol</option>
					<option value="A">Patrol A</option>
					<option value="B">Patrol B</option>
					<option value="C">Patrol C</option>
					<option value="D">Patrol D</option>
				</select>
			</div>
				<input id="login_submit" type="submit" name="Submit" value="Login" />
				<input id="login_submit" type="button" name="return" value="Return" onclick="location.href='index.php'" style="margin-left:100px;" />
		</fieldset>
	</form>

	
</div>

<div id="footer"> 
<hr id="hr3" />
		<footer>Created by Nicholas Nola s3489309 | James Nola s3489403<br> Life Saving Online Patrol </a></footer>
</body>
</html>