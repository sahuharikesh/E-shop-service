<!-- header part -->
<?php 
define('TITLE','Cart');
define('PAGE','cart');
include('includes/header.php');
include('../connection.php');
session_start();
if($_SESSION['is_login']){
    $rEmail= $_SESSION['rEmail'];
}else{
    echo "<script> location.href='login.php'</script>";
   
}

$regmsg;
if (isset($_POST['remove'])){
  if ($_GET['action'] == 'remove'){
      foreach ($_SESSION['cart'] as $key => $value){
          if($value["product_id"] == $_GET['id']){
            $sql = "DELETE FROM `cart` WHERE pid = {$_GET['id']}";
            if($conn->query($sql) == TRUE){
              unset($_SESSION['cart'][$key]);
            echo'<div class="alert alert-warning mt-2" role="alert">Product Removed Successfully..</div>';
              echo "<script>window.location = 'cart.php'</script>";
          }
        }
      }
  }
}
if (isset($_POST['save'])){
    echo "<script>window.location = 'myOrder.php'</script>";
}
?>
<div class="container">
    <div class="row px-5">
        <div class="col-md-7">
            <div class="shopping-cart pt-3">
               <h5> My Cart</h5>
                <hr>
                <?php
                $qty=0;
                $total_p = 0; 
                $total = 0;
                $p_id = 0;
                $price = 0;
                if (isset($_SESSION['cart'])){
                $sql = "SELECT * FROM `assest`";
                $result= $conn->query($sql);
                if($result->num_rows > 0){
                    while($row = $result->fetch_assoc()){
                    foreach ($_SESSION['cart'] as $a){
                        if ($row['pid'] == $a['product_id']){
                            $p_id = $a['product_id'];
                            $price = $row["scost"];
                            $qty = $a['qty'];
                            $total_p =(int)$row["scost"]*$qty ;
                            echo '<form action="cart.php?action=remove&id='.$row["pid"].'" method="post" class="cart-items ">
                            <div class="border rounded  ">
                            <div class="row bg-muted">
                            <div class="col-md-3 pl-0">
                            <img src="'.$row["image"].'" alt="Image1" class="img-fluid">
                            </div>
                            <div class="col-md-5">
                            <h5 class="pt-2">'.$row["name"].'</h5>
                            
                            <h6 class=""><b>₹&nbsp;'.$price.'</b></h6>
                            <p class="">Qty:'.$qty.'</p>
                            </div>
                            <div class="col-md-4 pt-4">
                            <button type="submit" class="btn  btn-sm" name="save">Add More</button>
                            <button type="submit" class="btn btn1 btn-sm" name="remove">Remove</button>
                            <p class="pt-3"><b>Total:'.$total_p.'</b></p>

                            </div>
                            </div>
                            </div>
                            </form>';
                        $total = $total + (int)$row['scost']*$a['qty'];
                        }
                        }
                    }
                  }
            
                }else{
                    echo "<h5>Cart is Empty</h5>";
                }
           ?>
        </div>
        </div>
    <div class="col-md-4 offset-md-1 border rounded mt-5 bg-white h-25">
    <div class="pt-4">
    <h6>PRICE DETAILS</h6>
    <hr>
    <div class="row price-details">
        <div class="col-md-6">
            <?php
                if (isset($_SESSION['cart'])){
                    $count  = count($_SESSION['cart']);
                    echo "<h6>Price ($count items)</h6>";
                }else{
                    echo "<h6>Price (0 items)</h6>";
                }
            ?>
            <h6>Delivery Charges</h6>
            <hr>
            <h6>Amount Payable</h6>
        </div>
        <div class="col-md-6">
            <h6>$<?php echo $total; ?></h6>
            <h6 class="text-success">FREE</h6>
            <hr>
            <form action="checkout.php" method="post">
            <h6>$<?php echo $total; ?></h6>
                <input type="hidden" name="amount" value="<?php echo $total; ?>">
                <button type="submit" class="btn btn" name="addProd" >Checkout</button>
            </form><br>
        </div>
       </div>
   </div>
  </div>   
  </div>
 </div>

<!-- footer part -->
<?php include('includes/footer.php');?>