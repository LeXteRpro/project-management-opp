<?php


// Connect to Database

$dbhost = "localhost";
$dbusername = "root";
$dbpass = "";
$dberror1 = "";


$conn = new PDO ($dbhost, $username, $dbpass) or die ($dberror1);

$select_db = mysql_select_db('opp') or die ('Could not select database!');


catch (PDOException $e) {
	
echo 'Connection failed: ' . $e->getMessage();

}

// $user = 'myUser';
// $pass = 'myPass';
// $dbname = 'MyDatabase';
// $con = mysql_connect($server, $user, $pass) or die("Can't connect");
// mysql_select_db($dbname);

?>
