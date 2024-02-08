<?php
session_start();
$con = new mysqli("localhost", "root", "", "nasadigital_database");

?>


<?php

if (isset($_POST['submit'])) {
    $product_id = $_POST['product_id'];
    $product_name = $_POST['product_name'];
    $product_desc = $_POST['product_desc'];
    $product_unit_price = $_POST['product_unit_price'];
    $product_quantity = $_POST['product_quantity'];
    $tamount = $_POST['tamount'];
    $phone = $_POST['phone'];
    $address = $_POST['address'];
    $pay= $_POST['pay'];
    $name= $_POST['name'];
    $status="Pending";
    $date_ordered = date('D-M-Y');

    
    $insert="INSERT INTO orders(product_id,product_name,product_desc,product_unit_price,product_quantity,tamount,name,phone,address,pay,status,date_ordered) VALUES('$product_id','$product_name','$product_desc','$product_unit_price','$product_quantity','$tamount','$name','$phone','$address','$pay','$status',NOW())";
    $sql = $con->query($insert);
    echo "<script> alert('Order Successful');</script>";
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Proceed To Order</title>
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
 <br> <center>Product Details</center>
<div style="background-color:green; padding:5px; text-align:center;color:#fff">
    <?php echo $row->product_desc;?>
</div>
<script type="text/javascript">
        function sum() {
            var txtFirstNo = document.getElementById('amt').value;
            var txtSecondNo = document.getElementById('qty').value;
            var result = parseInt(txtFirstNo) * parseInt(txtSecondNo);
            if (!isNaN(result)) {
           document.getElementById('txtResult').value = result;
            }
        }
    </script>
<form method="post" action="">
<div class="form-input">
<Label>Product Id</Labe
 <p>
 <input type="text" name="product_id" value= "<?php echo $row->product_id; ?>" readonly></input>
                                <p>
<Label>Product Name</Label>
                                <p>
<input type="text" name="product_name"  value= "<?php echo $row->product_name; ?> "readonly></input>
                                <p>  
                                <Label>Product Desc</Label>
                                <p>
<input type="text" name="product_desc"  value= "<?php echo $row->product_desc; ?> "readonly></input>
<p>                        
<Label>Unit Price</Label>
            <p>
<input type="number" name="product_unit_price" id="amt" onkeyup ="sum()" readonly value="<?php echo $row->product_unit_price; ?>"></input>
                                <p>
<Label>Quantity Available</Label>
                                <p>
<input type="text" name="product_quantity" id="qty" placeholder="Enter quantity needed" onkeyup="sum()"></input>
                                <p>
                                <Label>Total Amount</Label>
                                <p>
<input type="text" name="tamount" id="txtResult" readonly ></input>
                                <p>
                                <Label>Customer's Name</Label>
                                <p>
<input type="text" name="name" placeholder="Enter Your Name"></input>
                                <p>
                                <Label>Phone Number</Label>
                                <p>
<input type="text" name="phone" placeholder="Enter phone number"></input>
<Label>Delivery Address</Label>
                                <p>
<input type="text" name="address" placeholder="Enter Address"></input>
                                <p>
                                <label>Payment Mode</label>
                                <p><p>
  <select name="pay">
  	<option>Select Your Payment Mode?</option>
  	<option>On Delivery</option>
  	<option>Transfer</option>
  </select>
 <p>
    <h5>Please Take Note Of Your Order?product_id. Do Chat or Email us for quick processing <h5><p>
<input type="hidden" name="id" value="<?php echo $row->id; ?>">
<button type="update" class="btnxx" name="submit" style="cursor: pointer;" onclick="update">
Proceed &#8594;</button>
                        </form>
                      <style>
                    select{
                        background-color: ;
                        outline: none;
                        border: none;
                        width: 70vh;
                        height: 6vh;
                        border-radius: 1vh;
                    }
                    option{
                    outline: none;
                   
                    }
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
                        background: radial-gradient(#fff);
                        width: 70vh;
                        height: 6vh;
                        border-color:green;
                        border-radius: 1vh red;
                        padding: 20px;
                        outline: none;
                        margin: 10px;
                    }

                    label {
                        font-size: 1rem;
                        font-family: 'Open Sans', 'Helvetica Neue', sans-serif;
                        color:green;
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
      width: 60vh;
      height: 50vh;
      margin-left: 10vh;
      
    }
                </style>

    </body>

</html>