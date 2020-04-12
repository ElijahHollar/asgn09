<?php

$page_title = "Wage Report";

include_once("includes/initialize.php");

database_is_connected_error($connect);

$hourlyWage = $_POST['hourlyWage'];
$jobTitle = $_POST['jobTitle'];

$userQuery = find_employee_id_by_job_title_and_hourly_wage_query($jobTitle, $hourlyWage);

$result = mysqli_query($connect, $userQuery);

check_that_query_runs($result);

if (mysqli_num_rows($result) == 0) 
{
	print("No records found with query $userQuery");
}
else 
{ 
	print("<h1>RESULTS</h1>");
	print("<p>The following employees have the $jobTitle job title, and an hourly wage of $".
			number_format($hourlyWage, 2)." or higher:</p>");
			
	print("<table border = \"1\">");
	print("<tr><th>EMP ID</th></tr>");

	while($row=mysqli_fetch_assoc($result)) {
		print("<tr><td>".$row['empID']."</td></tr>");
	}

	print ("</table>");

}

mysqli_close($connect);   // close the connection
 
include_once("includes/footer.php");
