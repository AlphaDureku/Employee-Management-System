<?php
echo "hello";
$dbServername = "localhost";
$dbUsername = "root";
$dbPassword = "teamnut2";
$dbName = "employee_management_system";

$connection = mysqli_connect($dbServername, $dbUsername, $dbPassword, $dbName);
$query = "SELECT image FROM employee_management_system.user_data where id = 3;";
$query_run = mysqli_query($connection, $query);

while($row = mysqli_fetch_assoc($query_run)){
  echo'<img id = "try" src = "data:image;base64,'.base64_encode($row['image']).'" style="width = 500px; height = 500px;>';
 
}
?>