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

      <div class = "content-container">
        <div class = "main-user-container">

          <div class = "main-user-top">
              <div>Members</div>
              <div>Admins</div>
          </div>
              <div class = "search-field"><input id = "myInput" type="text" placeholder="&#xF002; Search" style="font-family:Arial, FontAwesome"/></div>
              <div class = "total-members">Total Members: <span id = "member-qty"style="color: grey"></span></div>
        </div>

        <div class = "main-user-container">
          <div class = "main-user-top-nav">
                <div class ="member-text">Members</div>
                <div class = "add-member-btn" onclick="addNew()">Add new</div>
          </div>

          <div class = "filter-btn">
                  <div><i class="fa-solid fa-angle-left"></i>Filter</div>
          </div>
        </div>

        <div class = "main-data-container">
          <div class = "table-header">
            <div>Photo</div>
            <div>Member Name</div>
            <div>Mobile</div>
            <div>Email</div>
            <div>Role</div>
            <div>Operation</div>
            <div>Modify/Delete</div>
          </div>
          <div id = "all-data-row">
            <div class = "table-content-row" id = "0">
              <div><img src=""></div>
                  <div></div>
                  <div></div>
                  <div></div>
                  <div></div>
                  <div>All</div>
                  <div>Modify/Delete</div>
            </div>
        </div>
        </div>
      </div>
</body>


    <script src="script.js"></script>
    
    <link rel="stylesheet" href="./styles.css">
    <link rel="stylesheet" href="./mediaQuery.css">
    
</html>
<!--


<div id = "myTable">

    <div class="flex-container">
        <div>Mark</div>
        <div>templanzamark2002@gmail.com</div>
        <div>3</div>
      </div>

      <div class="flex-container">
        <div>Kyro</div>
        <div>kyro@gmail.com</div>
        <div>3</div>
      </div>
    </div>
-->