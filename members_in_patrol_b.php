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

<div id="footer"> 
<input id="login_submit" action="" type="submit" name="Submit" value="Sign On" onclick="location.href='patrol_signon.php'" />
<input id="login_submit" action="" type="submit" name="Submit" value="Sign Off" />

<form style="padding-top:30px;">
		<label for="password" style="padding-left:220px;">Signed On Patrol To Patrol B</label>
	
<?php


$conn = mysqli_connect('phpmyadmin.cfj6jxhppoax.ap-southeast-2.rds.amazonaws.com', 'phpMyAdmin', 'phpMyAdmin', 'cloudawsdb', 3306) or die("Unable to connect to database! Please try again later");
mysql_select_db(cloudawsdb);
 
//	$sql = $conn->query("SELECT first_name FROM testtable" );

$sql = "SELECT * FROM patrolB";
$result = $conn->query($sql);
echo "<table>
  <tr>
    <th>First Name</th>
    <th>Last Name</th>
    <th>Club</th>
	<th>ON/OFF</th>
  </tr> ";
if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        {
			$first_name = $row["first_name"];
			$last_name= $row["last_name"];
			$club = $row["club"];
			$on_off = $row["on_off"];
			
			//$output .=$row['first_name']. "\t" .$row['last_name']. "\n";
			
			
			 
			echo "<tr>"; 
			echo "<td>" . $first_name ." </td>  " ;
			echo "<td>" . $last_name ."  </td> " ;
			echo "<td>" . $club ." </td>  " ;
			echo "<td>" . $on_off ." </td> ";
			echo"</tr>";
			
		}
    }
} else {
    echo "0 results";
}
echo "</table>";
$conn->close();

?>




<div class="together">
<input id="signout" onclick="location.href='delete_b.php'" type="button" name="submit" value="Sign Out Member" />
<input id="signout" onclick="location.href='signonB.php'" type="button" name="submit" value="Sign Member On" />
<input id="signout" type="button" name="return" value="Return" onclick="location.href='memberslogin.php'" style="width:190px;"/>



</div>
<hr id="hr3" />
		<footer>Created by Nicholas Nola s3489309 | James Nola s3489403<br> Life Saving Online Patrol </a></footer>
		</div>
</body>
</html>
