<?php
    
$dbServername = "localhost";
$dbUsername = "root";
$dbPassword = "teamnut2";
$dbName = "employee_management_system";

$conn = mysqli_connect($dbServername, $dbUsername, $dbPassword, $dbName);
if($conn === false){
    die("ERROR: Could not connect."
        . mysqli_connect_error());
}
   $sql = "SELECT profile_image, name, mobile, email, role FROM employee_management_system.user_data;";
    $result = mysqli_query($conn, $sql);
    $json_array = array();
    while($row = mysqli_fetch_assoc($result)){
        $json_array[] = $row;
    }
    echo json_encode($json_array);

    mysqli_close($conn);
?>