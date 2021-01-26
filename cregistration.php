<?php 
  require_once("includes/init.php");


require 'includes/master.inc.php';
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="device-width, initial-scale=1">
    <title>Registration</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.8/css/all.css">
    <link rel="stylesheet" href="css/registration.css">
  </head>
  <body>
<form action="profile.php" method="GET"> 
 
<table class="table table-hover profile-table">
<thead> 
<th>Course Code</th>  
<th> Course Name</th>  
<th>Semester</th>  
<th>Course Capacity</th>  
<th>Enrolled</th>  
<th>Enroll</th>  
</thead>
<tbody> 
<?php
$sql = "SELECT * FROM tbl_courses";
$result = $DB->executeSelectQuery($sql);
while ($course = mysqli_fetch_assoc($result)) {
echo "<tr>";        
echo "<td>".$course ['courseCode']. "</td>";
echo "<td>".$course ['courseName']. "</td>";
echo "<td>".$course ['courseSemester']. "</td>";
echo "<td>".$course ['courseCapacity']. "</td>";
echo "<td>".$course ['courseEnrollment']. "</td>";
echo "<td> <input name = 'Enroll[]' type = 'checkbox' value ='".$course ['_id']."' / >";
echo "</tr>";
       }     
?>
</tbody>
</table>
<input type="submit" name="enroll" value="Enroll"> 
</form> 