<?php ob_start(); //Buffer start


// Store the inputs in variables and then hash the password
$username = $_POST['username'];
/// Passing through another variable (Middle Man)
$pass = hash('sha512', $_POST['pass']);

// Connect to Database
require_once('db.php');

//set up sql query to check login
$sql = "SELECT opp FROM opp_users WHERE username = '$username' AND pass = '$pass'";

// Execute query and store result
$result = $conn->query($sql);

// Count amount of rows returned
$count = $result->rowCount();

//evaluate how many rows we found to know if the login exists or not

if ($count >= 1) {
	echo 'Logged in Successfully.'; 

	// Access session on the server
	session_start();

	foreach  ($result as $row) {
		// Get the identity from the user table & store in the session object
		$_SESSION['user_id'] = $row['user_id'];

		
		header('location:index.html');
      
	}
}
// Otherwise, login is invalid
else {
	echo 'Invalid Login';
}
// Disconnect
$conn = null;

// Send all output to the browser
 ob_flush(); ?>
