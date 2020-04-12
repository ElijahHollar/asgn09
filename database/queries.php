<?php

function hourly_wage_less_than_ten_dollars_query () {
  $userQuery = "SELECT empID FROM personnel WHERE hourlyWage < '10.00'";
  return $userQuery;
}

function find_employee_id_by_job_title_and_hourly_wage_query ($jobTitle, $hourlyWage) {
  $userQuery = "SELECT empID FROM personnel WHERE jobTitle='$jobTitle' AND hourlyWage >= '$hourlyWage'";
  return $userQuery;
}

function update_personnel_last_name_query () {
  $userQuery = "UPDATE personnel SET lastName='Jackson', jobTitle='Manager' WHERE empID='12353'";
  return $userQuery;
}

function find_employee_name_by_job_title_query ($jobTitle) {
  $userQuery = "SELECT firstName, lastName FROM personnel WHERE jobTitle='$jobTitle'";
  return $userQuery;
}

function add_sales_employee_query ($empID, $firstName, $lastName) {
  $userQuery = "INSERT INTO personnel VALUES ('$empID', '$firstName', '$lastName', 'Sales', '8.25')";
  return $userQuery;
}