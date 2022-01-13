<?php 
define('TITLE','Requester Order');
define('PAGE','myOrder');
include('includes/header.php');
include('../connection.php');
// session_start();
if($_SESSION['is_login']){
    $rEmail=$_SESSION['rEmail'];
}else{
    echo "<script> location.href='login.php'</script>";
}
// for cart
if (isset($_POST['add'])){
    if(isset($_SESSION['cart'])){

        $item_array_id = array_column($_SESSION['cart'], "product_id");

        if(in_array($_POST['product_id'], $item_array_id)){
            echo "<script>alert('Product is already added in the cart..!')</script>";
            echo "<script>window.location = 'myOrder.php'</script>";
        }else{

            $count = count($_SESSION['cart']);
            $item_array = array(
                'product_id' => $_POST['product_id'],
                'qty'=>$_POST['qty']
            );
            $_SESSION['cart'][$count] = $item_array;

        }
    }else{
        $item_array = array(
            'product_id' => $_POST['product_id'],
            'qty'=>$_POST['qty']
        );

        // Create new session variable
        $_SESSION['cart'][0] = $item_array;
    }
}
?>
<!-- product section -->
<div class="container">
<div class="row text-center py-2">
    <?php
        $sql = "SELECT * FROM `assest`";
        $result= $conn->query($sql);
        if($result->num_rows > 0){
            while($row = $result->fetch_assoc()){
        echo '<div class="col-md-3 col-sm-6 my-3 my-md-0 ">
            <form action="" method="post">
            <div class="card shadow mt-3">
                <div>
                    <img src="'.$row["image"].'" alt="Image1" class="img-fluid card-img-top">
                </div>
                <div class="card-body">
                    <h5 class="">'.$row["name"].'</h5>
                    <input type="hidden" name="name" value='.$row["name"].'>
                    <h6 class="row container ">
                    <div class="text-center">
                    Qty:
                    <input type="number" name="qty" value="1" min="1" style="width: 25%;">
                    </div>
                    </h6>
                   
                    <span class="price">₹&nbsp;'.$row["scost"].'</span>
                    <input type="hidden" name="price" value='.$row["scost"].'><br>

                    <button type="submit" class="btn btn-sm  " name="add">Add to Cart <i class="fas fa-shopping-cart"></i></button>
                        <input type="hidden" name="product_id" value="'.$row["pid"].'">
                        
                </div>
            </div>
            </form>
        </div> ';
            }
        }
    ?>
    <?php 
    if (isset($_POST['add'])){
        $name = $_REQUEST['name'];
        $price = $_REQUEST['price'];
        $qty = $_REQUEST['qty'];
        $pid = $_REQUEST["product_id"];
        $user =$rEmail;
            $sql ="INSERT INTO `cart`(`name`, `price`, `qty`, `user`, `pid`, `date`) VALUES ('$name','$price','$qty','$user','$pid', NOW())";
            if($conn->query($sql) == TRUE){
                $regmsg = '<div class="alert alert-success mt-2" role="alert">Added Successfully..</div>';
            }else{
                $regmsg = '<div class="alert alert-warning mt-2" role="alert">Unable to Add..</div>';
            }
    }
    ?>
</div>
</div>
<!-- footer part -->
<?php include('includes/footer.php');?>