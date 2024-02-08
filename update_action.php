<?php
$con = new mysqli("localhost", "root", "", "nasadigital_database");
if (isset($_POST['update'])) {
    $product_id = $_POST['product_id'];
    $product_name = $_POST['product_name'];
    $product_unit_price = $_POST['product_unit_price'];
    $product_quantity = $_POST['product_quantity'];
?>
<?php
$id = $_POST['id'];    

$select = "SELECT * FROM product WHERE id = '$id'";
$sql = $con->query($select);

$up = "UPDATE product set product_id ='$product_id', product_name ='$product_name', product_unit_price ='$product_unit_price', product_quantity ='$product_quantity' where id='$id'";
$sql = $con->query($up);
if ($sql) {
    header("location:admindashboard.php?success=Updated Successfully");
} else {
    header("location:update_product.php?error=Failed" . $row->id);
}

 ?> <?php } ?>
