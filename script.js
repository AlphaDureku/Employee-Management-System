//Onload Navigation bar
$(function () {
  $("#nav-placeholder").load("nav.html");
});

//Search bar function
$(document).ready(function () {
  $("#myInput").on("keyup", function () {
    let value = $(this).val().toLowerCase();
    $("#all-data-row .table-content-row").filter(function () {
      $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1);
    });
  });
});

//Add new onclick
const addNew = () => {
  location.href = "add-new.php";
};
//side-nav user onclick
const users = () => {
  location.href = "index.php";
};
//Employee counter
const numberOfemp = (numberOfrow) => {
  document.getElementById("member-qty").textContent = numberOfrow;
};

//Insertion of Data from database to grid rows
let i = 1;
function createRow() {
  let parent = document.getElementById("all-data-row");
  let row = document.createElement("div");
  row.classList.add("table-content-row");
  row.setAttribute("id", `${i}`);
  row.innerHTML = `<div><img src=""></div>
  <div></div>
  <div></div>
  <div></div>
  <div></div>
  <div>All</div>
  <div>Modify/Delete</div>`;
  parent.append(row);
  i++;
}

function checkrow(data) {
  let length = data.length;
  for (let j = 1; j < length; j++) {
    createRow();
  }
}
//rendering of employee data and HTML row
function set_data(data) {
  let numberOfrow = document.querySelectorAll(".table-content-row").length;
  for (k = 0; k < numberOfrow; k++) {
    let parent = document.getElementById(`${k}`);
    let children = parent.children;

    children[0].children[0].setAttribute(
      "src",
      `./assets/${data[k].profile_image}`
    );
    children[1].textContent = data[k].name;
    children[2].textContent = data[k].mobile;
    children[3].textContent = data[k].email;
    children[4].textContent = data[k].role;
  }
  numberOfemp(numberOfrow);
}

//fetch data from database via php
fetch("getDB.php")
  .then((response) => response.json())
  .then((data) => {
    checkrow(data);
    set_data(data);
  });

navigator.geolocation.getCurrentPosition(showPosition);

function showPosition(position) {
  console.log(position.coords.latitude);
  console.log(position.coords.longitude);
}
/*
var oReq = new XMLHttpRequest();
oReq.onload = function () {
  let data = JSON.parse(oReq.responseText);
};
oReq.open("get", "getdb.php", true);
oReq.send();
*/

/*Filter by Role
    $(document).ready(function(){
      $("#myInput").on("keyup", function() {
        let value = $(this).val().toLowerCase();
        $("#all-data-row .table-content-row").filter(function() {
          $(this).toggle($(this).find('.ugh').text().toLowerCase().indexOf(value) > -1)
        });
      });
    });
  */
let arr = [10];
console.log(arr.length);
