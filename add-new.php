<!DOCTYPE html>
<html lang="en">
<head>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://kit.fontawesome.com/97b14fecde.js" crossorigin="anonymous"></script>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div id="nav-placeholder"></div>
    
<div class = "add-member-container">
<h2>New Member Information</h2>
<form action = "addMember.php" method = "post" enctype="multipart/form-data">

    <div class = "form-grid-container">
            <div><label for="name">Full Name:</label></div>
            <div><input type="text" id ="name" name = "full_name" required></div>
            <div><label for="name">Email:</label></div>
            <div><input type="text" id ="email" name = "email" required></div>
            <div><label for="mobile">Mobile Number:</label></div>
            <div><input type="tel" placeholder = "63+"id ="mobile" name = "mobile" required></div>
            <div><label for ="roles">Select a Role or Position:</label></div>
            <div><select name = "roles" id = "roles" required>
                <option value ="Administrator">Administrator</option>
                <option value ="Director">Director</option>
                <option value ="Manager">Manager</option>
                <option value ="Staff">Staff</option>
                </select>
            </div>  
            <div> <label for="myfile">Upload profile picture: </label></div>
            <div><input type="file" id="myfile" name="profile_img" required><br><br></div>
    </div>
            <div class ="form-btn">
            <input id = "new-member-btn"type="reset" value="Reset">
            <input id = "new-member-btn"type="submit" value="Submit"></div>
            </div>

</form>

</div>
</body>
<script type="text/javascript" src="./script.js"></script>
<link rel="stylesheet" href="styles.css">
<link rel="stylesheet" href="./mediaQuery.css">
</html>