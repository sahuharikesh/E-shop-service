
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" >
    <!-- custom CSS -->
    <link rel="stylesheet" href="../css/portalStyle.css">
    <!-- Font Awesome CSS -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- Google Font -->
    
    <link href="https://fonts.googleapis.com/css?family=Josefin+Sans&display=swap" rel="stylesheet">
    <title><?php echo TITLE ?></title>

</head>
<body>
<!-- Navigation bar -->
<nav class="navbar navbar-expand-lg navbar-dark ">
  <a class="navbar-brand" href="#"><img src="../images/white_logo_transparent.svg" class="logo1"></a><span class="navbar-text">&nbsp;&nbsp;Customer's Happiness is our aim..!</span>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
  </button>
  <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
            <div class="mr-auto"></div>
            <div class="navbar-nav">
                <a href="cart.php" class="nav-item nav-link active">
                    <h5 class="px-3 cart">
                         <?php
                            if(PAGE == 'myOrder'){
                                session_start();
                             echo'<i class="fas fa-shopping-cart"></i> Cart';
                            if (isset($_SESSION['cart'])){
                                $count = count($_SESSION['cart']);
                                echo "<span id=\"cart_count\" class=\"text-warning bg-light\">$count</span>";

                            }else{
                                echo "<span id=\"cart_count\" class=\"text-warning bg-light\">0</span>";
                            }
                        }
                        ?>
                    </h5>
                </a>
                
            </div>
        </div>
  </nav>
<!-- side bar -->
 
 <div class="container-fluid" >
 <div class="row">
    <nav class="col-sm-2 bg-light sidebar py-5  d-print-none">
        <div class="sidebar-sticky sidenav">
            <!-- 1 -->
            <ul class="nav flex-column">
            <li class="nav-item mt-2">
            <a href="profile.php" class="nav-link  <?php if(PAGE == 'profile'){echo 'active';} ?>"><i class="fa fa-user mr-2 "></i>Profile</a>
            </li>
            <li class="nav-item mt-2">
            <a href="myOrder.php" class="nav-link  <?php if(PAGE == 'myOrder'){echo 'active';} ?>"><i class="fab fa-accessible-icon mr-2 "></i>My Order</a>
            </li>
            <li class="nav-item mt-2">
            <a href="cart.php" class="nav-link  <?php if(PAGE == 'cart'){echo 'active';} ?>"><i class="fas fa-shopping-cart mr-2 "></i>My Cart</a>
            </li>
            <!-- 2 -->
            <li class="nav-item mt-2">
            <a href="submitReq.php" class="nav-link <?php if(PAGE == 'submitReq'){echo 'active';} ?>"><i  class="fa fa-send  mr-2"></i>Submit Request</a>
            </li>
            <!-- 3 -->
            <li class="nav-item mt-2">
            <a href="status.php" class="nav-link <?php if(PAGE == 'status'){echo 'active';} ?>"><i class="fa fa-align-center mr-2"></i>Service Status</a>
            </li>
            <!-- 4 -->
            <li class="nav-item mt-2">
            <a href="changePass.php" class="nav-link <?php if(PAGE == 'changePass'){echo 'active';} ?>"><i class="fa fa-key mr-2"></i>Change Passward</a>
            </li>
            <li class="nav-item mt-2">
            <a href="../logout.php" class="nav-link "><i class="fas fa-sign-out-alt mr-2"></i>Logout</a>
            </li>
            </ul>
        </div>
    </nav>
    <!-- end header -->