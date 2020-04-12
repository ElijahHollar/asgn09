<?php

$page_title = "Raises";

include_once("includes/initialize.php");

database_is_connected_error($connect);

$userQuery = hourly_wage_less_than_ten_dollars_query();

$result = mysqli_query($connect, $userQuery);

check_that_query_runs($result);

if (mysqli_num_rows($result) == 0) 
{
	print("No records found with query $userQuery");
}
else 
{ 
	print("<h1>LIST OF EMPLOYEES WHO NEED A RAISE</h1>");

	while ($row = mysqli_fetch_assoc($result))
		{
			print("<p>Employee ".$row['empID']." needs a raise!</p>");
		}

}

mysqli_close($connect);   // close the connection
 
	include_once("includes/footer.php");

