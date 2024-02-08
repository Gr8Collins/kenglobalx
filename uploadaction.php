<form method="POST" enctype="multipart/form-data">
	

    <?php
    session_start();
    $con = new mysqli("localhost", "root", "", "nasadigital_database");
    ?>
    
    
    <script type="text/javascript">
            function sum() {
                var txtFirstNo = document.getElementById('amt').value;
                var txtSecondNo = document.getElementById('qt').value;
                var result = parseInt(txtFirstNo) * parseInt(txtSecondNo);
                if (!isNaN(result)) {
               document.getElementById('txtResult').value = result;
                }
            }
        </script>

                            
<?php

$id= $_POST['id'];
$sel = "select * from product where id = '$id'";
$sql = $con->query($sel);
$row = $sql->fetch_object();
?>
      <div class="form-group"> <h4 style="color:#145A32">Product Details<hr><?php echo @$msg;?></h4>
      <label>Product Name</label>
        <input type="Name" readonly="readonly" class="form-control" name="name" placeholder="Enter Product Name" value="<?php echo $row['productname']; ?>">
        <small id="emailHelp" class="form-text text-muted">We'll never share your details with anyone else.</small>
      </div>
        <div class="form-group">

        
        <label>Amount</label>
        <input type="text" readonly="readonly" class="form-control" onkeyup="sum()" name="amount" id="amt" placeholder="Enter Product Price" value="<?php echo $row['amount']; ?>">
      </div>
      
      <div class="form-group">
        <label>Description</label>
        <input type="text" readonly="readonly" class="form-control" name="product_desc" placeholder="Description" value="<?php echo $row['product_desc']; ?>">
      </div>
     <div class="form-group">
        <label>Quantity</label>
        <input type="text" id="qt" class="form-control" name="product_quantity
        
        " onkeyup="sum()" placeholder="">
      </div>
    <div class="form-group">
    
        <label>Total Amount</label>
        <input type="text" class="form-control" name="tamount" placeholder="" id="txtResult" readonly="readonly">
      </div>
    <div class="form-group">
        <label>Customer Name</label>
        <input type="text" class="form-control" name="cname" placeholder="Description">
      </div>
    
      <div class="form-group">
        <label>Phone Number</label>
        <input type="text" class="form-control" name="phone" placeholder="Description">
      </div>
      <div class="form-group">
        <label>Delivery Address</label>
        <input type="text" class="form-control" name="address" placeholder="Delivery Address">
      </div>
        <div class="form-group">
        <label>Payment Mode</label>
      <select name="pay" class="form-control">
          <option>Select Your Payment Mode?</option>
          <option>On Delivery</option>
          <option>Transfer</option>
      </select>
      </div>
        <div class="form-group">
        <label>Product/Order Id</label>
        <input type="text" readonly="readonly" class="form-control" name="pid" placeholder="" value="<?php echo $row['productid']; ?>"> <small id="emailHelp" class="form-text text-muted">Pls Take Note of Your Order/Product ID. !!! Chat or Email Us For quick processing</small>
      </div>
     <input type="submit" class="btn btn-success" name="btn-signup" value="Proceed>>>"> 
    </form> 
                                    </div>
                        </div>
                    </div>
                </div>
    
    
     </section>
    