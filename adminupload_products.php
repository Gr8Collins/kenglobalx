


<center>
<?php
session_start();
$con = new mysqli("localhost", "root", "", "ultimateschool_database");
?>
<?php if (!isset($_SESSION['id'])){
header("location:admin_login.php");
}
?>
</center>
<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<style>
  body{
    font-family: ebrima;
  }
</style>
<body>

<p></p>

<div class="admin" >
<div class="admin_dashboard1" ></i><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-person-fill" viewBox="0 0 16 16">
  <path d="M3 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6"/>
</svg><a href="#"> Admin Dashboard</a><p>
<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-house-up-fill" viewBox="0 0 16 16">
  <path d="M12.5 16a3.5 3.5 0 1 0 0-7 3.5 3.5 0 0 0 0 7m.354-5.854 1.5 1.5a.5.5 0 0 1-.708.708L13 11.707V14.5a.5.5 0 1 1-1 0v-2.793l-.646.647a.5.5 0 0 1-.708-.707l1.5-1.5a.5.5 0 0 1 .708 0Z"/>
  <path d="M8.707 1.5a1 1 0 0 0-1.414 0L.646 8.146a.5.5 0 0 0 .708.708L8 2.207l6.646 6.647a.5.5 0 0 0 .708-.708L13 5.793V2.5a.5.5 0 0 0-.5-.5h-1a.5.5 0 0 0-.5.5v1.293z"/>
  <path d="m8 3.293 4.712 4.712A4.5 4.5 0 0 0 8.758 15H3.5A1.5 1.5 0 0 1 2 13.5V9.293z"/>
</svg><a href="admindashboard.php"> Home </a> <p>
<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-minecart-loaded" viewBox="0 0 16 16">
  <path d="M4 15a1 1 0 1 1 0-2 1 1 0 0 1 0 2m0 1a2 2 0 1 0 0-4 2 2 0 0 0 0 4m8-1a1 1 0 1 1 0-2 1 1 0 0 1 0 2m0 1a2 2 0 1 0 0-4 2 2 0 0 0 0 4M.115 3.18A.5.5 0 0 1 .5 3h15a.5.5 0 0 1 .491.592l-1.5 8A.5.5 0 0 1 14 12H2a.5.5 0 0 1-.491-.408l-1.5-8a.5.5 0 0 1 .106-.411zm.987.82 1.313 7h11.17l1.313-7z"/>
  <path fill-rule="evenodd" d="M6 1a2.498 2.498 0 0 1 4 0c.818 0 1.545.394 2 1 .67 0 1.552.57 2 1h-2c-.314 0-.611-.15-.8-.4-.274-.365-.71-.6-1.2-.6-.314 0-.611-.15-.8-.4a1.497 1.497 0 0 0-2.4 0c-.189.25-.486.4-.8.4-.507 0-.955.251-1.228.638q-.136.194-.308.362H3c.13-.147.401-.432.562-.545a1.6 1.6 0 0 0 .393-.393A2.5 2.5 0 0 1 6 1"/>
</svg><a href="#"> Upload Products </a> <p>
<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-bag-check-fill" viewBox="0 0 16 16">
  <path fill-rule="evenodd" d="M10.5 3.5a2.5 2.5 0 0 0-5 0V4h5zm1 0V4H15v10a2 2 0 0 1-2 2H3a2 2 0 0 1-2-2V4h3.5v-.5a3.5 3.5 0 1 1 7 0m-.646 5.354a.5.5 0 0 0-.708-.708L7.5 10.793 6.354 9.646a.5.5 0 1 0-.708.708l1.5 1.5a.5.5 0 0 0 .708 0z"/>
</svg><a href="#"> Manage Products</a> <p>
<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-card-checklist" viewBox="0 0 16 16">
  <path d="M14.5 3a.5.5 0 0 1 .5.5v9a.5.5 0 0 1-.5.5h-13a.5.5 0 0 1-.5-.5v-9a.5.5 0 0 1 .5-.5zm-13-1A1.5 1.5 0 0 0 0 3.5v9A1.5 1.5 0 0 0 1.5 14h13a1.5 1.5 0 0 0 1.5-1.5v-9A1.5 1.5 0 0 0 14.5 2z"/>
  <path d="M7 5.5a.5.5 0 0 1 .5-.5h5a.5.5 0 0 1 0 1h-5a.5.5 0 0 1-.5-.5m-1.496-.854a.5.5 0 0 1 0 .708l-1.5 1.5a.5.5 0 0 1-.708 0l-.5-.5a.5.5 0 1 1 .708-.708l.146.147 1.146-1.147a.5.5 0 0 1 .708 0M7 9.5a.5.5 0 0 1 .5-.5h5a.5.5 0 0 1 0 1h-5a.5.5 0 0 1-.5-.5m-1.496-.854a.5.5 0 0 1 0 .708l-1.5 1.5a.5.5 0 0 1-.708 0l-.5-.5a.5.5 0 0 1 .708-.708l.146.147 1.146-1.147a.5.5 0 0 1 .708 0"/>
</svg><a href="adminsales.php"> View Sales </a> <p>
<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-left-right" viewBox="0 0 16 16">
  <path fill-rule="evenodd" d="M1 11.5a.5.5 0 0 0 .5.5h11.793l-3.147 3.146a.5.5 0 0 0 .708.708l4-4a.5.5 0 0 0 0-.708l-4-4a.5.5 0 0 0-.708.708L13.293 11H1.5a.5.5 0 0 0-.5.5m14-7a.5.5 0 0 1-.5.5H2.707l3.147 3.146a.5.5 0 1 1-.708.708l-4-4a.5.5 0 0 1 0-.708l4-4a.5.5 0 1 1 .708.708L2.707 4H14.5a.5.5 0 0 1 .5.5"/>
</svg><a href="admindashboard.php"> Pending Orders </a> <p>
<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-left-square" viewBox="0 0 16 16">
  <path fill-rule="evenodd" d="M15 2a1 1 0 0 0-1-1H2a1 1 0 0 0-1 1v12a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1zM0 2a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v12a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2zm11.5 5.5a.5.5 0 0 1 0 1H5.707l2.147 2.146a.5.5 0 0 1-.708.708l-3-3a.5.5 0 0 1 0-.708l3-3a.5.5 0 1 1 .708.708L5.707 7.5z"/>
</svg><a href="#">Logout</a>
</div>
</div>


<div id="search">
<input type="text" name="search" placeholder="Search AVialble products" id="search1">
</div>




<div class="forms">
<!-- ----------------------------------------Update Form---------------------------------------------------- -->
<form action="#" method="POST" class="frm">
 <div class="update">  
 <label>PRODUCT NAME </label><br>
<input type="text" name="name" value=""><br>

<label>DESCRIPTION: </label><br>
<input type="text" name="name" value=""><br>

<label>UNIT PRICE: </label><br>
<input type="text" name="name" value=""><br>
<br>
<label>QUANTITY AVAILABLE: </label><br>
<input type="text" name="name" value=""><br>
<br>
</form>
<label>UPLOAD: </label><br>
<form method="post" action="uploadaction.php" enctype="multipart/form-data">
    <input type="file" name="pix">
    <br>
    <button type="Submit">Upload File</button>
</form>

<?php
$fname = $_FILES['pix']['name'];
$fsize = $_FILES['pix']['size'];
$type = $_FILES['pix']['type'];
$tmp = $_FILES['pix']['tmp_name'];
move_uploaded_file($tmp, "upload/" . $fname);
echo $fname . "<br>";
echo $fsize . "<br>";
echo $type . "<br>";
echo $tmp . "<br>";
?>
</form>
</div>


<style>
    .up{
        margin-left: 30vh;
    }
    .up:hover{
        margin-left: 30vh;
        background-color: orangered;

    }
    #search1{
        margin-left: 60vh;
        margin-bottom: 5vh;
        background: #d7d5df;
box-shadow: 0 0 10px 0 rgba(0,0,0,1);
width: 150vh;
     
    }
    .forms{
        padding: 5vh;
 background: #d7d5df;
box-shadow: 0 0 10px 0 rgba(0,0,0,1);
width: 200vh;
margin: 10vh auto;
       
    }
    .frm{
        margin-left: 70vh;
    }
    .msgx{
display:none ;
}
.but_click{
    background-color: green;
    margin-top: -10vh;
    padding: 10px;
    border-radius: 5px;
    border: none;
    outline: none;
    color: #fff;
    cursor: pointer;
}
#mesage{
background-color: rgba(0,0,0,0.5);
margin: 20vh 50vh;
outline: none;
border: none;
border-radius: 10px;
color: #fff;
font-weight: 600;
font-size:1rem;
}

/* Admin css */
.admin{
display: flex;
justify-content: space-between;
background: #d7d5df;
box-shadow: 0 0 10px 0 rgba(0,0,0,1);
width: 100%;
top: 0;
bottom: 0;
left: 0;
right: 0;



}
.admin_dashboard1{
    
background: #f8f6f6;
box-shadow: 0 0 10px 0 rgb(66, 65, 65);
width: 30vh;
line-height: 7vh;
margin: 0;
position: fixed;
cursor: pointer;
padding: 50px;
height: 700px;
justify-content: space-between;
border-radius: 10px;

}
 a{
  text-decoration: none; 
  color: black;
  padding: 10px;
}
a:hover{
background: #478;
  color: #FFF;
  border-radius: 10px;

}

button {
background-color: rgb(10, 161, 248);
color: #000;
padding: 10px;
border-radius: 10px;
margin: 10px;
outline: none;
border: none;
}

label{
    margin-left: 5vh;
    padding: 10px;
    color: #000;
    font-size: 1rem;
    font-weight: 600;
   
}
input{
margin-left: 5vh ;
margin-right: 10px ;
border-radius: 10px;
width: 90vh;
padding: 2vh;
border: none;
outline: none;
box-shadow: 0 0 10px 0 rgba(0, 0, 0, 0.5);
background-color:rgb(17, 166, 216);
color: #000;
font-weight: 600;

}
</style>

</body>
</html>






