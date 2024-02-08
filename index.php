<?PHP
session_start();
$con = new mysqli("localhost", "root", "", "nasadigital_database");
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="style.css">

  <script src="https://kit.fontawesome.com/19f7021ca5.js" crossorigin="anonymous"></script>
  <title>KENT GLOBAL RESOURCES</title>


</head>

<body>
  
<button onclick="topFunction()" id="myBtn" title="Go to top">&#8593;<br>T<br>O<br>P
</button>


  <div class="header">
    <div class="container">
      <div class="navbar">
        <div class="logo">
          <img src="log1.png" alt="KENT GLOBAL RESOURCES">

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
            <li><a href="#">Account</a></li>
            <li><a href="adminlogin.php">Admin</a></li>
          </ul>
        </nav>
        <i class="fa-solid fa-cart-shopping"></i>
        <div class="menu" onclick="slidetoggle()">Menu</div>

      </div>
      <div id="header-2">KENT <font size="10rem" color="black">GLOBAL RESOURCES</font>
        <p>
          <font size="3.5rem"><u>
              <font color="red"><b>Hot Lines:</b></font>
            </u> 080288375117,0803388380,08142111864</font>
      </div>

      <div class="row">
        <div class="col-2">
          <h1>Welcome To Kent Global Resources</h1>
          <p>We Deal In Car Sound System, Sale and Installation of Navigation Equipments, Car Accessories,
            Car Upgrading Etc<br>
            <font color="#ff523b"><b>Head Office:</b></font> Aguiyi Isonsi Trade Center, Bola Ahmend Tinubu, Block A
            Shop 10 Alhaji Akinwunmi Street, Ladipo, Mushin Lagos.<br>
            <font color="#ff523b"><b>Branch Office:</b></font> Shop B10, Alhaji Omotayo Plaza, Osoro Street, Papa -Ajao,
            Mushin Lagos.
            <a href="#" class="btn">Explore More &#8594;</a>

          <p></p>

        </div>

        <div class="col-2">
          <img src="img/5.jpg" alt="">
        </div>
      </div>
    </div>
  </div>

  <div class="animated">
    <!-- animation -->
    <img src="img/1.jpg" id="images"class="imgxxx" width="100%" height="30%">
    <p></p>
  
  </div>
 
  <!-- -----------------------------------------------------BUY PRODUCTS--------------------------------- -->
  <center>
    <h4 style= "font-size: 2.5rem; color: #546; margin-top:10vh;margin-bottom:-10vh">Check More on Our Collections & Place Your Order</h4>
    <?php
    $select = "select * from product ORDER BY date_uploaded DESC";
    $sql = $con->query($select);
    ?>
    <div class="products">
      <?php
      while ($row = $sql->fetch_object()) { ?>
      
        <div id="imag"> <img src="uploaded/<?php echo $row->image; ?>" id="image"><br>&nbsp;
        <?php echo '<style="font-color:red">'. $row->product_name;?><p>&nbsp;
       <font color="" size="4rem"><b> &#x20A6; </b></font><?php echo $row->product_unit_price; ?>
       <p>
       <form action="proceed_to_order.php" method="POST"><input type="hidden" name="id" value="<?php echo $row->id; ?>">
            <button style="color:#fff; background-color:red; margin-bottom:10vh;cursor:pointer; border:none; padding:10px; font-size: 1rem;"  type="submit"  class="proceed">Order Now &#8594;</button>
          </form>
        
        </div>

      <?php } ?>
      

    </div>
  </center>
  <!--------------------------------- product categories ------------------------------------------------>

  <div class="categories1">
    <div class="h2x" style="font-size:2rem"> Explore Popular Categories</div>
    <div class="small-container1">
      <div class="row">

        <div class="col-4">
          <img src="img/9.jpg" alt="" />
          <h3 class="h"><center><button style="border:none; background-color:green; padding:10px; border-radius:5px; cursor:pointer">View Details</button> <br>&#x20A6;50,000.00</center>
          </h3>
        </div>
        <div class="col-4">
          <img src="img/10.jpg" alt="">
          <h3 class="h"><center><button style="border:none; background-color:green; padding:10px; border-radius:5px; cursor:pointer">View Details</button><br>  &#x20A6;50,000.00</center>
          </h3>
        </div>
        <div class="col-4">
          <img src="img/11.jpg" alt="">
          <h3 class="h"><center><button style="border:none; background-color:green; padding:10px; border-radius:5px; cursor:pointer">View Details</button> <br> &#x20A6;50,000.00</center>
          </h3>
        </div>
        <div class="col-4">
          <img src="img/12.jpg" alt="">
          <h3 class="h"><center><button style="border:none; background-color:green; padding:10px; border-radius:5px; cursor:pointer">View Details</button> <br> &#x20A6;50,000.00</center>
          </h3>
        </div>
      </div>
    </div>
  </div>
  <div class="categories1">
    <div class="small-container">
      <div class="row">
        <div class="col-4">
          <img src="img/13.jpg" alt="">
          <h3 class="h"><center><button style="border:none; background-color:green; padding:10px; border-radius:5px; cursor:pointer">View Details</button> <br> &#x20A6;50,000.00</center>
          </h3>
        </div>
        <div class="col-4">
          <img src="img/14.jpg" alt="">
          <h3 class="h"><center><button style="border:none; background-color:green; padding:10px; border-radius:5px; cursor:pointer">View Details</button> <br> &#x20A6;50,000.00</center>
          </h3>
        </div>
        <div class="col-4">
          <img src="img/15.jpg" alt="">
          <h3 class="h"><center><button style="border:none; background-color:green; padding:10px; border-radius:5px; cursor:pointer">View Details</button> <br> &#x20A6;50,000.00</center>
          </h3>
        </div>
        <div class="col-4">
          <img src="img/16.jpg" alt="">
          <h3 class="h"><center><button style="border:none; background-color:green; padding:10px; border-radius:5px; cursor:pointer">View Details</button> <br> &#x20A6;50,000.00</center>
          </h3>
        </div>
      </div>
    </div>
  </div>

  <div class="categories">
    <div class="small-container">
      <div class="row">
        <div class="col-4">
          <img src="img/17.jpg" alt="">
          <h3 class="h"><center><button style="border:none; background-color:green; padding:10px; border-radius:5px; cursor:pointer">View Details</button> <br> &#x20A6;50,000.00</center>
          </h3>
        </div>
        <div class="col-4">
          <img src="img/18.jpg" alt="">
          <h3 class="h"><button style="border:none; background-color:green; padding:10px; border-radius:5px; cursor:pointer">View Details</button> <br> &#x20A6;50,000.00</center>
          </h3>
        </div>
        <div class="col-4">
          <img src="img/19.jpg" alt="">
          <h3 class="h"><center><button style="border:none; background-color:green; padding:10px; border-radius:5px; cursor:pointer">View Details</button> <br> &#x20A6;50,000.00</center>
          </h3>
        </div>
        <div class="col-4">
          <img src="img/20.jpg" alt="">
          <h3 class="h"><center><button style="border:none; background-color:green; padding:10px; border-radius:5px; cursor:pointer">View Details</button> <br> &#x20A6;50,000.00</center>
          </h3>
        </div>
      </div>
    </div>
  </div>

  <div class="categories">
    <div class="small-container">
      <div class="row">
        <div class="col-4">
          <img src="img/21.jpg" alt="">
          <h3 class="h"><center><button style="border:none; background-color:green; padding:10px; border-radius:5px; cursor:pointer">View Details</button> <br> &#x20A6;50,000.00</center>
          </h3>
        </div>
        <div class="col-4">
          <img src="img/22.jpg" alt="">
          <h3 class="h"><center><button style="border:none; background-color:green; padding:10px; border-radius:5px; cursor:pointer">View Details</button><br> &#x20A6;50,000.00</center>
          </h3>
        </div>
        <div class="col-4">
          <img src="img/23.jpg" alt="">
          <h3 class="h"><center><button style="border:none; background-color:green; padding:10px; border-radius:5px; cursor:pointer">View Details</button><br> &#x20A6;50,000.00</center>
          </h3>
        </div>
        <div class="col-4">
          <img src="img/24.jpg" alt="">
          <h3 class="h"><center><button style="border:none; background-color:green; padding:10px; border-radius:5px; cursor:pointer">View Details</button><br> &#x20A6;50,000.00</center>
          </h3>
        </div>
      </div>
    </div>
  </div>

  <div class="categories">
    <div class="small-container">
      <div class="row">
        <div class="col-4">
          <img src="img/25.jpg" alt="">
          <h3 class="h"><center><button style="border:none; background-color:green; padding:10px; border-radius:5px; cursor:pointer">View Details</button><br> &#x20A6;50,000.00</center>
          </h3>
        </div>
        <div class="col-4">
          <img src="img/26.jpg" alt="">
          <h3 class="h"><center><button style="border:none; background-color:green; padding:10px; border-radius:5px; cursor:pointer">View Details</button><br> &#x20A6;50,000.00</center>
          </h3>
        </div>
        <div class="col-4">
          <img src="img/27.jpg" alt="">
          <h3 class="h"><center><button style="border:none; background-color:green; padding:10px; border-radius:5px; cursor:pointer">View Details</button> <br> &#x20A6;50,000.00</center>
          </h3>
        </div>
        <div class="col-4">
          <img src="img/28.jpg" alt="">
          <h3 class="h"><center><button style="border:none; background-color:green; padding:10px; border-radius:5px; cursor:pointer"><button style="border:none; background-color:green; padding:10px; border-radius:5px; cursor:pointer">View Details</button></button> <br> &#x20A6;50,000.00</center>
          </h3>
        </div>
      </div>
    </div>
  </div>

  <!-- ---------------------------------------Featured Products---------------------------------------  -->
  <div class="small-container">
    <h2 class="title">Featured Products</h2>

    <div class="row ">
      <div class="col-4">
        <img src="images/11.png" alt="">
        <h4>Red Printed T-Shirt</h4>
        <div rating>
          <i class="fa fa-star" style="color:red"></i>
          <i class="fa-solid fa-star" style="color:red"></i>
          <i class="fa-solid fa-star" style="color:red"></i>
          <i class="fa-regular fa-star-sharp-half-stroke" style="color:red"></i>
          <i class="fa-regular fa-star" style="color:red" style="color:red"></i>
        </div>
        <p>$50.00</p>
      </div>
      <div class="col-4">
        <img src="images/5.jpg" alt="">
        <h4>Red Printed T-Shirt</h4>
        <div rating>
          <i class="fa-solid fa-star" style="color:red"></i>
          <i class="fa-solid fa-star" style="color:red"></i>
          <i class="fa-solid fa-star" style="color:red"></i>
          <i class="fa-solid fa-star" style="color:red"></i>
          <i class="fa-regular fa-star" style="color:red"></i>

        </div>
        <p>$50.00</p>
      </div>
      <div class="col-4">
        <img src="images/bag.jpg" alt="">
        <h4>Red Printed T-Shirt</h4>
        <div rating>
          <i class="fa-solid fa-star" style="color:red"></i>
          <i class="fa-solid fa-star" style="color:red"></i>
          <i class="fa-solid fa-star" style="color:red"></i>
          <i class="fa-solid fa-star" style="color:red"></i>
          <i class="fa-regular fa-star" style="color:red"></i>
        </div>
        <p>$50.00</p>
      </div>
      <div class="col-4">
        <img src="images/hp.jpg" alt="">
        <h4>Red Printed T-Shirt</h4>
        <div rating>
          <i class="fa-solid fa-star" style="color:red"></i>
          <i class="fa-solid fa-star" style="color:red"></i>
          <i class="fa-solid fa-star" style="color:red"></i>
          <i class="fa-solid fa-star" style="color:red"></i>
          <i class="fa-regular fa-star" style="color:red"></i>
        </div>
        <p>$50.00</p>
      </div>
    </div>
    <!-- --------------------------------------------LATEST PRODUCTS------------------------------------- -->
    <h2 class="title">Latest Products</h2>

    <div class="row ">
      <div class="col-4">
        <img src="images/hp1.jpg" alt="">
        <h4>Red Printed T-Shirt</h4>
        <div rating>
          <i class="fa fa-star" style="color:red"></i>
          <i class="fa-solid fa-star" style="color:red"></i>
          <i class="fa-solid fa-star" style="color:red"></i>
          <i class="fa-regular fa-star-sharp-half-stroke" style="color:red"></i>
          <i class="fa-regular fa-star" style="color:red" style="color:red"></i>
        </div>
        <p>$50.00</p>
      </div>
      <div class="col-4">
        <img src="images/gg.jpg" alt="">
        <h4>Red Printed T-Shirt</h4>
        <div rating>
          <i class="fa-solid fa-star" style="color:red"></i>
          <i class="fa-solid fa-star" style="color:red"></i>
          <i class="fa-solid fa-star" style="color:red"></i>
          <i class="fa-solid fa-star" style="color:red"></i>
          <i class="fa-regular fa-star" style="color:red"></i>

        </div>
        <p>$50.00</p>
      </div>
      <div class="col-4">
        <img src="images/product-6.jpg" alt="">
        <h4>Red Printed T-Shirt</h4>
        <div rating>
          <i class="fa-solid fa-star" style="color:red"></i>
          <i class="fa-solid fa-star" style="color:red"></i>
          <i class="fa-solid fa-star" style="color:red"></i>
          <i class="fa-solid fa-star" style="color:red"></i>
          <i class="fa-regular fa-star" style="color:red"></i>
        </div>
        <p>$50.00</p>
      </div>
      <div class="col-4">
        <img src="images/product-9.jfif" alt="">
        <h4>Red Printed T-Shirt</h4>
        <div rating>
          <i class="fa-solid fa-star" style="color:red"></i>
          <i class="fa-solid fa-star" style="color:red"></i>
          <i class="fa-solid fa-star" style="color:red"></i>
          <i class="fa-solid fa-star" style="color:red"></i>
          <i class="fa-regular fa-star" style="color:red"></i>
        </div>
        <p>$50.00</p>
      </div>
    </div>

    <div class="row ">
      <div class="col-4">
        <img src="images/product-2.jpg" alt="">
        <h4>Red Printed T-Shirt</h4>
        <div rating>
          <i class="fa fa-star" style="color:red"></i>
          <i class="fa-solid fa-star" style="color:red"></i>
          <i class="fa-solid fa-star" style="color:red"></i>
          <i class="fa-regular fa-star-sharp-half-stroke" style="color:red"></i>
          <i class="fa-regular fa-star" style="color:red" style="color:red"></i>
        </div>
        <p>$50.00</p>
      </div>
      <div class="col-4">
        <img src="images/product-8.jfif" alt="">
        <h4>Red Printed T-Shirt</h4>
        <div rating>
          <i class="fa-solid fa-star" style="color:red"></i>
          <i class="fa-solid fa-star" style="color:red"></i>
          <i class="fa-solid fa-star" style="color:red"></i>
          <i class="fa-solid fa-star" style="color:red"></i>
          <i class="fa-regular fa-star" style="color:red"></i>

        </div>
        <p>$50.00</p>
      </div>
      <div class="col-4">
        <img src="images/product-1.jpg" alt="">
        <h4>Red Printed T-Shirt</h4>
        <div rating>
          <i class="fa-solid fa-star" style="color:red"></i>
          <i class="fa-solid fa-star" style="color:red"></i>
          <i class="fa-solid fa-star" style="color:red"></i>
          <i class="fa-solid fa-star" style="color:red"></i>
          <i class="fa-regular fa-star" style="color:red"></i>
        </div>
        <p>$50.00</p>
      </div>
      <div class="col-4">
        <img src="images/products-12.jpg" alt="">
        <h4>Red Printed T-Shirt</h4>
        <div rating>
          <i class="fa-solid fa-star" style="color:red"></i>
          <i class="fa-solid fa-star" style="color:red"></i>
          <i class="fa-solid fa-star" style="color:red"></i>
          <i class="fa-solid fa-star" style="color:red"></i>
          <i class="fa-regular fa-star" style="color:red"></i>
        </div>
        <p>$50.00</p>
      </div>
    </div>
    <a href="#" class="btn">Explore More &#8594;</a>
  </div>

  <!---------------------------------------------- Offer--------------------------------------------------- -->
  <div class="offer">
    <div class="small-container">
      <div class="row">
        <div class="col-2">
          <img src="img/9.jpg" class="offer-img">
        </div>
        <div class="col-2">
          <p>
            <center>Exclusive Available on NDL
          </p>
          <h1>Smart Band 4</h1>
          <small> The Mi smart Band 4 Features a 39.9% large
            (than Mi Band 3)Amoled Full-touch display with
            adjustable brightness,
            so everything is clear as can be
          </small>
          <p></p>
          <a href="#" class="btn">Buy Now &#8594;</a></center>
        </div>
      </div>
    </div>
  </div>
  <!-- Testimonial 
  <div class="testimonial">
    <h1 class="h1">Testimonial</h1>
  <div class="small-container">
    <div class="row">
      <div class="col-31">
        <i class="fa-solid fa-quote-left" style="color: red; font-size: 34px;"></i>
        <p>The Mi smart Band 4 Features a 39.9% large
          (than Mi Band 3)Amoled Full-touch display with
          </p>
           <div rating>
            <i class="fa-solid fa-star"style="color:red"></i>
            <i class="fa-solid fa-star"style="color:red"></i>
            <i class="fa-solid fa-star"style="color:red"></i>
            <i class="fa-solid fa-star"style="color:red"></i>
            <i class="fa-regular fa-star"style="color:red"></i>
          </div>
          <img src="images/product-3.jpg" width="50px"/>
        <h3>Magreth Thompson</h3>
    </div>

    <div class="col-31">
      <i class="fa-solid fa-quote-left"style="color: red; font-size: 34px;"></i>
      <p>The Mi smart Band 4 Features a 39.9% large
        (than Mi Band 3)Amoled Full-touch display with
         </p>
         <div rating>
          <i class="fa-solid fa-star"style="color:red"></i>
          <i class="fa-solid fa-star"style="color:red"></i>
          <i class="fa-solid fa-star"style="color:red"></i>
          <i class="fa-solid fa-star"style="color:red"></i>
          <i class="fa-regular fa-star"style="color:red"></i>
        </div>
       <img src="images/product-3.jpg"/>
      <h3> Magreth Thompson</h3>
      </div>
      <div class="col-31">
        <i class="fa-solid fa-quote-left"style="color: red; font-size: 34px;"></i>
        <p>The Mi smart Band 4 Features a 39.9% large
          (than Mi Band 3)Amoled Full-touch display with
          </p>
           <div rating>
            <i class="fa-solid fa-star"style="color:red"></i>
            <i class="fa-solid fa-star"style="color:red"></i>
            <i class="fa-solid fa-star"style="color:red"></i>
            <i class="fa-solid fa-star"style="color:red"></i>
            <i class="fa-regular fa-star"style="color:red"></i>
          </div>
         <img src="images/product-4.jpg" />
        <h3> Magreth Thompson</h3>
        </div>
    </div>
    </div>
  </div>
     -->


  <!-- Brand -->

  <div class="brands">
    <div class="small-container">
      <h1 class="h1">Our Partners</h1>
      <div class="row">

        <div class="col-5">

          <img src="images/vendor-1.jpg" alt="">
        </div>
        <div class="col-5">
          <img src="images/vendor-7.jpg" alt="">
        </div>
        <div class="col-5">
          <img src="images/vendor-8.jpg" alt="">
        </div>
        <div class="col-5">
          <img src="images/vendor-6.jpg" alt="">
        </div>
        <div class="col-5">
          <img src="images/vendor-5.jpg" alt="">
        </div>
      </div>
    </div>
  </div>
  <!-- Footer -->
  <div class="footer">
    <div class="container">
      <div class="row">
        <div class="footer-col-1">
          <h3>Download Our App</h3>
          <p>Downlaod App for Android and ios mobile phone</p>
        </div>
        <div class="footer-col-2">
          <img src="log1.png" alt="">

          <p>Our Purpose is to Make your business visible</p>
        </div>
        <div class="footer-col-3">
          <h3>Useful Links</h3>
          <ul>
            <li>Coupons</li>
            <li>Blog post</li>
            <li>Return policy</li>
            <li>Join Affliate Marketing</li>
          </ul>
        </div>
        <div class="footer-col-3">
          <h3>Follow Us</h3>
          <ul>
            <li>Facebook</li>
            <li>Twitter</li>
            <li>Linedin</li>
            <li>Instagram</li>
            <li>Youtube</li>
          </ul>
        </div>
      </div>
    </div>
  </div>
  <script>
    var menuitems = document.getElementById("menuitems");
    menuitems.style.maxHeight = "0px";
    function slidetoggle() {
      if (menuitems.style.maxHeight == "0px") {
        menuitems.style.maxHeight = "200px";
      }
      else {
        menuitems.style.maxHeight = "0px";
      }
    }


    var myimage = ["img/2.jpg", "img/3.jpg", "img/4.jpg", "img/6.jpg", "img/7.jpg", "img/8.jpg"];
    main = document.getElementById('images');
    var index = 0;
    var i = 0;
    setInterval(function () {
      if (++i % 1) {
        main.style.opacity = 0.1;
      }
      else {
        main.src = myimage[index = (index + 1) % myimage.length];
        main.style.opacity = 1.0;
      }
    },
      2000);


      

// Get the button
let mybutton = document.getElementById("myBtn");

// When the user scrolls down 20px from the top of the document, show the button
window.onscroll = function() {scrollFunction()};

function scrollFunction() {
  if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
    mybutton.style.display = "block";
  } else {
    mybutton.style.display = "none";
  }
}

// When the user clicks on the button, scroll to the top of the document
function topFunction() {
  document.body.scrollTop = 0;
  document.documentElement.scrollTop = 0;
}

     
  </script>
  <style>
  
 
    .products {
      display: flex;
      justify-content: space-around;
      flex-direction: wrap;
      flex-wrap: wrap;
      margin-top: 10px;
      font-size: 1.5rem;
      width:80%;
      padding: 10vh;
    


    }

    #div {
      display: none;
      width: 20vh;
      text-align: center;
      justify-content: center;
    }

    #image {
      width: 20vh;
      height: 15vh;
      
    }
    #myBtn {
  display: none;
  position: fixed;
  bottom: 15vh;
  right: 0px;
  z-index:12 ;
  font-size: 18px;
  border: none;
  outline: none;
  background: red;
  color: white;
  cursor: pointer;
  padding: 20px;
  border-radius: 4px;
  max-width: 2vh;
  
}

#myBtn:hover {
  background-color: green;
}
  </style>
  
 <script src="https://apps.elfsight.com/p/platform.js" defer></script>
<div class="elfsight-app-b5894234-2175-4ae2-945d-a4aebed39f54"></div>
</body>

</html>