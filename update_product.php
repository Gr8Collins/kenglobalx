<?php
session_start();
$con = new mysqli("localhost", "root", "", "nasadigital_database");

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Upload Products</title>
</head>

<body>
    <link rel="stylesheet" href="style.css">

    <script src="https://kit.fontawesome.com/19f7021ca5.js" crossorigin="anonymous"></script>
    <title>NASA DIGITAL LTD</title>
    </head>

    <body>
        <div class="header">
            <div class="container">
                <div class="navbar">
                    <div class="logo">
                        <img src="log1.png" alt="Nasa Digital Ltd">

                    </div>
                    <nav>
                        <ul id="menuitems">
                            <li><a href="index.php">Home</a></li>
                            <li><a href="#">About</a></li>
                            <li> <a href="#">Products</a>
                                <ul>
                                    <li> <a href="products.html">Explore Product</a></li>
                                    <li> <a href="cart2.html">Place An Order</a></li>

                                </ul>
                            </li>
                            <li><a href="account.html">Account</a></li>
                            <li><a href="adminlogin.php">Admin</a></li>
                        </ul>
                    </nav>
                    <i class="fa-solid fa-cart-shopping"></i>
                    <div class="menu" onclick="slidetoggle()">Menu</div>

                </div>
                <div id="header-2">NASA <font size="10rem" color="black">DIGITAL LTD</font>
                    <p>
                        <font size="3.5rem"><u>
                                <font color="red"><b>Hot Lines:</b></font>
                            </u> 080288375117,0803388380,08142111864</font>
                </div>
                <div class="section">
                    <div id="section1"><img src="img/img6.jpg" alt="" srcset="" id="section1"></div>
                    <div id="section_2">
                    
                    
                    <?php

$id= $_POST['id'];
$sel = "select * from product where id = '$id'";
$sql = $con->query($sel);
$row = $sql->fetch_object();
?>
 <div id="imag"> <img src="uploaded/<?php echo $row->image; ?>" id="image"><br>&nbsp;


<form method="post" action="update_action.php">
<div class="form-input">
<Label>Product Id</Labe
 <p>
 <input type="text" name="product_id" value= "<?php echo $row->product_id; ?>"></input>
                                <p>
<Label>Product Name</Label>
                                <p>
<input type="text" name="product_name"  value= "<?php echo $row->product_name; ?>"></input>
                                <p>                          
<Label>Unit Price</Label>
            <p>
<input type="number" name="product_unit_price" value="<?php echo $row->product_unit_price; ?>"></input>
                                <p>
<Label>Quantity Available</Label>
                                <p>
<input type="text" name="product_quantity" value="<?php echo $row->product_quantity; ?>"></input>
                                <p>

                                <p>
<input type="hidden" name="id" value="<?php echo $row->id; ?>">
<button type="update" class="btnxx" name="update" style="cursor: pointer;" onclick="update">
Update Details &#8594;</button>
                        </form>
                    </div>

                </div>


                <style>
                    .section {
                        display: flex;
                        justify-content: space-between;
                        flex-wrap: wrap;
                    }

                    #section1 {
                        margin-top: 15vh;
                        height: 65vh;
                    }

                    .btnxx {
                        background-color: rgb(66, 65, 65);
                        color: #fff;
                        width: 20vh;
                        height: 5vh;
                        border-radius: 10vh;
                        outline: none;
                        border-color: none;
                        border: none;
                        margin-top: 5vh;
                    }

                    .btnxx:hover {
                        background-color: orange;
                        width: 20vh;
                        border-radius: 10px;
                        color: #fff;
                        padding: 10px;
                        text-align: center;
                        outline: none;
                        border: none;
                        cursor: pointer;

                    }

                    textarea {
                        width: 50vh;
                        height: 20vh;
                        border: none;
                        padding: 10px;
                        outline: none;


                    }

                    input {
                        background: radial-gradient(#fff, #ffd6d6);
                        width: 70vh;
                        height: 6vh;
                        border: none;
                        border-radius: 2vh;
                        padding: 20px;
                        outline: none;
                        margin: 10px;
                    }

                    label {
                        font-size: 2rem;
                        font-family: 'Open Sans', 'Helvetica Neue', sans-serif;
                    }

                    .form-input {

                        text-align: center;
                        width: 80vh;
                        margin: 10px auto;
                        padding: 5vh;
                        border-radius: 10vh;



                    }

                    .frm {
                        background-color: red;
                        width: 19%;
                        height: 20vh;
                    }

                    .inp {
                        background-color: red;
                        color: white;


                    }
                    
    #image {
      width: 30vh;
      height: 25vh;
      
    }
                </style>

    </body>

</html>