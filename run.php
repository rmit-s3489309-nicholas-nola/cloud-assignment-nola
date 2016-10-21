
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
 
$sql = "INSERT INTO patrolB (first_name, last_name, club, on_off)
VALUES ('$first_name', '$last_name', '$club', '$on_off')";

if ($conn->query($sql) === TRUE) {
    echo '<script language="javascript">';
	echo 'alert("Thank you for Signing on!")';
	echo '</script>';
	header('Refresh: 0;url=index.php');
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}


$conn->close();


}

?>