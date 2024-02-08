<?php
session_start();
$con = new mysqli("localhost", "root", "", "nasadigital_database");
if (isset($_FILES['image'])) {
    $errors = array();
    $file_name = $_FILES['image']['name'];
    $file_size = $_FILES['image']['size'];
    $file_tmp = $_FILES['image']['tmp_name'];
    $file_type = $_FILES['image']['type'];
    $file_ext = strtolower(end(explode('.', $_FILES['image']['name'])));

    $path = $file_name;
    $product_id = $_POST['product_id'];
    $product_name = $_POST['product_name'];
    $product_desc = $_POST['product_desc'];
    $product_unit_price = $_POST['product_unit_price'];
    $product_quantity = $_POST['product_quantity'];
    $image = $_POST['image'];
    $date = date('D-M-Y');
    $extensions = array("jpeg", "jpg", "png", "pdf", "doc");

    if (in_array($file_ext, $extensions) === false) {
        $errors[] = "extension not allowed, please choose a JPEG or PNG, PDF, O file.";
    }

    if ($file_size > 209715200) {
        $errors[] = 'File size must be excately 200 mb';
    }

    if (empty($errors) == true) {
        $con->query("INSERT INTO `product` VALUES('','$product_id','$product_name ','$product_desc','$phone','$product_unit_price','$product_quantity',NOW())") or die(mysqli_error($con));
        move_uploaded_file($file_tmp, "uploaded/" . $file_name);
        echo '<script>alert("Product Uploaded Successfully"); window.location="upload.php";</script>';
    } else {
        print_r($errors);
    }
}
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
                        <form method="post" enctype="multipart/form-data">
                            <div class="form-input">
                                <Label>Product Id</Label>
                                <p>
                                    <input type="text" name="product_id" placeholder="Enter Product Id"
                                        required></input>
                                <p>
                                    <Label>Product Name</Label>
                                <p>
                                    <input type="text" name="product_name" placeholder="Enter Product Name"
                                        required></input>
                                <p>
                                    <Label>Description</Label>
                                <p>
                                    <textarea name="product_desc" placeholder="Enter Product Description"
                                        required></textarea>
                                <p>
                                    <Label>Unit Price</Label>
                                <p>
                                    <input type="number" name="product_unit_price" placeholder="Enter Price"
                                        required></input>
                                <p>
                                    <Label>Quantity Available</Label>
                                <p>
                                    <input type="text" name="product_quantity" placeholder="Enter Quantity"
                                        required></input>
                                <p>
                                    <label> Upload Product</label>
                                    <input type="file" name="image"></input>
                                <p>
                                <p>
                                    <button type="submit" class="btnxx">Upload File</button>
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
                </style>

    </body>

</html>