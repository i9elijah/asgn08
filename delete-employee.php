<!DOCTYPE html>
<!--	Author: Elijah Hume
		Date:	11/3/2020
		File:	delete-employee.php
		Purpose:MySQL Exercise
-->

<html>
<head>
	<title>MySQL Query</title>
	<link rel ="stylesheet" type="text/css" href="sample.css">
</head>

<body>

<?php

include_once("connection.php");

$connect=mysqli_connect(SERVER, USER, PW, DB);

if( !$connect) 
{
	die("ERROR: Cannot connect to database $db on server $server 
	using user name $user (".mysqli_connect_errno().
	", ".mysqli_connect_error().")");
}

$empID = '1234567'; /// CHANGE THIS TO THE ID OF THE RECORD YOU WISH TO DELETE

$userQuery = "DELETE FROM personnel WHERE empID='$empID'";

$result = mysqli_query($connect, $userQuery);

if (!$result) 
{
	die("Could not successfully run query ($userQuery) from $db: " .	
		mysqli_error($connect) );
}
else
{
	print("	<h1>DELETE A RECORD</h1>");
	print ("<p>The record with ID $empID was deleted.</p>");
}
mysqli_close($connect);   // close the connection
 
?>
</body>
</html>
