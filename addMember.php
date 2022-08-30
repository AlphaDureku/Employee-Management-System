<?php
$dbServername = "localhost";
$dbUsername = "root";
$dbPassword = "teamnut2";
$dbName = "employee_management_system";

$conn = mysqli_connect($dbServername, $dbUsername, $dbPassword, $dbName);

if($conn === false){
    die("ERROR: Could not connect. "
        . mysqli_connect_error());
}

$full_name = $_REQUEST['full_name'];
$email = $_REQUEST['email'];
$mobile = $_REQUEST['mobile'];
$roles = $_REQUEST['roles'];
$file = $_FILES['profile_img'];
//$profile = $_REQUEST['profile_img'];


$fileName = $_FILES['profile_img']['name'];
$fileTmpName = $_FILES['profile_img']['tmp_name'];
$fileSize = $_FILES['profile_img']['size'];
$fileError = $_FILES['profile_img']['error'];
$filetype = $_FILES['profile_img']['type'];

$fileExt = explode('.', $fileName);
$fileActualExt = strtolower(end($fileExt));

$allow = array('jpg', 'png', 'jpeg');

if(in_array($fileActualExt, $allow)){
    if($fileError === 0){
        if($fileSize < 99999999999){
            $fileNameNew = uniqid('', true).".".$fileActualExt;
            $fileDestination ='assets/'.$fileNameNew;
            move_uploaded_file($fileTmpName, $fileDestination);
        } else{
            echo "File is too big!";
        }
    } else{
        "Uploading file FAILED!";
    }
} else {
    echo "File type unsupported";
}

$sql = "INSERT INTO user_data (profile_image, name, mobile, email, role) VALUES ('$fileNameNew ', '$full_name', '$mobile', '$email', '$roles');";

if(mysqli_query($conn, $sql)){
    header("Location: index.php");
} else{
    echo "ERROR: Hush! Sorry $sql. "
        . mysqli_error($conn);
}

mysqli_close($conn);
?>