<?php

$page_title = "Add Sales Person";

include_once("includes/initialize.php");

database_is_connected_error($connect);

$empID = $_POST['empID'];
$firstName = $_POST['firstName'];
$lastName = $_POST['lastName'];

$userQuery = add_sales_employee_query($empID, $firstName, $lastName);

$result = mysqli_query($connect, $userQuery);

check_that_query_runs($result);

if (!$result) 
{
	die("Could not successfully run query ($userQuery) from $db: " .	
		mysqli_error($connect) );
}
else 
{ 
	print("	<h1>ADD A NEW PERSONNEL RECORD</h1>");
	print ("<p>The following record was added to the personnel table:</p>");
	print("<table border='0'>
			<tr><td>EMPLOYEE ID</td><td>$empID</td></tr>
			<tr><td>FIRST NAME</td><td>$firstName</td></tr>
			<tr><td>LAST NAME</td><td>$lastName</td></tr>		
			<tr><td>JOB TITLE</td><td>Sales</td></tr>
			<tr><td>HOURLY WAGE</td><td>8.25</td></tr>
			</table>");
}

mysqli_close($connect);   // close the connection
 
include_once("includes/footer.php");
