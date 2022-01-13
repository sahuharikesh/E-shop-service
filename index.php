<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>E-Shop & Service</title>
    <!--Font awesome CDN-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.min.css">
    <!--Scroll reveal CDN-->
    <script src="https://unpkg.com/scrollreveal"></script>
    <link rel="stylesheet" href="css/indexStyles.css">
</head>
<body >
<header>
    <div class="container">
        <nav class="nav">
            <div class="menu-toggle">
                <i class="fas fa-bars"></i>
                <i class="fas fa-times"></i>
            </div>
            <a href="index.php" class="logo"><img src="images/white_logo_transparent.svg" alt="" srcset="" class="logo1"></a>
            <ul class="nav-list">
                <li  class="nav-item">
                   <a href="index.php" class="nav-link active">Home</a> 
                </li>
                <li  class="nav-item">
                    <a href="#about" class="nav-link">About</a> 
                 </li>
                 <li  class="nav-item">
                    <a href="#product" class="nav-link">Products</a> 
                 </li>
                 <li  class="nav-item">
                    <a href="#service" class="nav-link">Services</a> 
                 </li>
                 <li  class="nav-item">
                    <a href="#contact" class="nav-link">Contact</a> 
                 </li>
            </ul>
        </nav>
    </div>
</header>
<!-- header end -->
<section class="hero" id="hero">
    <div class="container">
        <h2 class="sub-headline">
            <span class="first-letter">W</span>elcome
        </h2>
        <h1 class="headline">&nbsp;E-Shop & Service</h1>
        <div class="headline-discription">
            <div class="separator">
                <div class="line line-left"></div>
                <div class="asterisk"><i class="fas fa-asterisk"></i></div>
                <div class="line line-right"></div>
            </div>
            <div class="single animation">
                <h5 >Ready to be opened</h5>
                <a href="Requester/login.php" class="btn cta-btn">Login</a>&nbsp;
                <a href="Requester/signUp.php" class="btn cta-btn">SignUp</a>
            </div>
        </div>
    </div>
</section>
<!-- hero end -->
<section class="discover-our-story" id="about">
    <div class="container">
        <div class="restaurant-info">
            <div class="restaurant-discription padding-right animate-left">
                <div class="global-headline">
                    <h2 class="sub-headline">
                        <span class="first-letter">D</span>iscover
                    </h2>
                    <h1 class="headline headline-dark" >Our Story</h1>
                    <div class="asterisk"><i class="fas fa-asterisk"></i></div>
                </div>
                <p>If you are looking for a gadgets, appliance, electronics support center
                     nearby to solve all your device problems, then we have you sorted with
                      this best service center in Navi Mumbai. E-Shop & Service is one of the well-known
                       service centers you can visit for all your device related damages be it – tv,
                        refrigerators, microwave ovens, washing machines, air conditioners. We here have updated address, contact 
                         number and direction for you to conveniently reach them. E-Shop & Service is open on all weekdays Monday to Sunday from
                           09:00 AM to 06:00 PM so you choose to call up take an appointment or 
                           just simply drive to the service center using our directions for quick
                            service support for all your gadgets, appliance, electronics. </p><br>
                <a href="#" class="btn body-btn">About us</a>

            </div>
        
        <div class="restaurant-info-img animate-right">
            <img src="images/s1.jpg" alt="" srcset="" class="zoom">
    </div>
</section>
<!-- discover-our-story ends -->

<section class="perfect-blend between" >
    <div class="container">
        <div class="global-headline">
            <div class="animate-top">
                <h2 class="sub-headline">
                    <span class="first-letter">P</span>roduct
                </h2>
            </div>
            <div class="animate-bottom">
                 <h1 class="headline txt">Our Product</h1>
            </div>
        </div> 
    </div>
</section>
<!-- perfect-blend ends -->
<section class="culinary-delight" id="product">
    <div class="container">
    <div class="grid-container animate-bottom">
    <?php
          include('connection.php');
          $sql = "SELECT * FROM `assest` ORDER BY name LIMIT 8";
          $result= $conn->query($sql);
          if($result->num_rows > 0){
              while($row = $result->fetch_assoc()){
              echo '<div class="grid-item zoom ">
                    <form action="" method="post">
                    <div class="card ">
                    <div>
                    <img src="images/'.$row["image"].'" alt="Image1" class="">
                    </div>
                    <div class="card-content">
                    <h6 class="card-header">'.$row["name"].'</h6>
                    <p>₹&nbsp;'.$row["scost"].'</p> 
                    <a href="Requester\myOrder.php" class="btn cta-btn cbtn" >Purchase</a>
                    </div>
                    </div>
                    </form>
                </div> ';
              }
          }
      ?>
    </div>
 </div> 
</section>

<!-- culinary-delight ends -->
<section class="tasteful-recipes between" >
    <div class="container">
        <div class="global-headline">
            <div class="animate-top">
                <h2 class="sub-headline">
                    <span class="first-letter">S</span>ervice
                </h2>
            </div>
            <div class="animate-bottom" id="service">
                 <h1 class="headline txt">Our Services</h1>
            </div>
        </div> 
    </div>
</section>
<!-- tasteful-recipes end -->
<section class="discover-our-menu">
    <div class="container">
        <div class="restaurant-info">
            <div class="image-group padding-right animate-left">
                <img src="images/service3.jpg" alt="" srcset=""class="zoom">
                <img src="images/service1.jpg" alt="" srcset=""class="zoom">
                <img src="images/repair.jpg" alt="" srcset=""class="zoom">
                <img src="images/service.jpg" alt="" srcset=""class="zoom">
            </div>
            <div class="restaurant-description animate-right">
                <div class="global-headline">
                    <h2 class="sub-headline">
                        <span class="first-letter">G</span>adget
                    </h2>
                    <h1 class="headline headline-dark">Repaire</h1>
                    <div class="asterisk"><i class="fas fa-asterisk"></i></div>
                </div>
                <p>E-Shop & Service provide electronics gadget repairing services such as Laptop 
                    servicing and repairing, Air conditioners(AC) repairing, Refrigerator repairing,
                     Mobile repairing, washing machines, microwave ovens and Tv
                    or  any other electronics devices.
                </p>
                <a href="#" class="btn body-btn">View the full Details</a>
            </div>
        </div>
    </div>
</section>
<!-- discover-our-menu end -->
<section class="perfect-blend between" >
    <div class="container">
        <div class="global-headline">
            <div class="animate-top">
                <h2 class="sub-headline">
                    <span class="first-letter">C</span>ontact Us
                </h2>
            </div>
            <div class="animate-bottom">
                 <h1 class="headline txt"> Any Time..!</h1>
            </div>
        </div> 
    </div>
</section>
<section class="discover-our-story" id="contact">
    <div class="container">
        <div class="restaurant-info">
            <div class="restaurant-discription padding-right animate-bottom">
             <div class="wrapper">
                <h1 style="font-size: 25px;color: #252525;"><i class="fas fa-map-marker-alt" >&nbsp;Let's find the location</i>&nbsp;<i class="fas fa-walking"></i></h1><br>
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3700.186382836402!2d72.99676031485258!3d19.15628698704184!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3be7bf4dd74832af%3A0xb549b71cfe00386b!2sAiroli!5e1!3m2!1sen!2sin!4v1626172213134!5m2!1sen!2sin" width="100%" height="400" style="border: 0px;" allowfullscreen frameborder="1" loading="lazy"></iframe>
             </div>
            </div><br>
        
            <div class="restaurant-info-img animate-top">
 
                <div  style="max-width: 560px; margin: 0 auto;">
                <div class="form-mid">
                <h1 style="font-size: 12px;color:#fff;padding-bottom:8px" ><i>We're here to help & answer any question you might have. We look forward to hearing from you</i>
                    <i class="fas fa-smile text-warning fa-2x" style="color:#d4a45d;"></i></h1>
                    <form action="javascript:sendmail()" method="post">
                    <div class="field">
                        <input type="text" class="form-control" name="Name" id="Name" placeholder="Enter your name" required="">
                    </div>
                    <div class="field">
                        <input type="email" class="form-control" name="Sender" id="Sender" placeholder="Enter your email"
                        required="">
                    </div>
                    <div class="field">
                        <input type="text" class="form-control" name="Subject" id="Subject" placeholder="Enter subject"
                        required="">
                    </div>
                    <textarea name="Message" class="form-control" id="Message" placeholder="How can we help you ?"
                        required=""></textarea>
                    <button type="submit" class="btn btn-contact"><i class='fas fa-location-arrow'></i>&nbsp;<i>Send Message</i></button>
                    </form>
                </div>
                </div>
            </div>
            </div>
            </div>
</section>
<footer>
    <div class="container">
        <div class="back-to-top">
            <a href="#hero"><i class="fas fa-chevron-up"></i></a>
        </div>
        <div class="footer-content">
            <div class="footer-content-about animate-top">
                <h2> E-Shop & Service</h2>
                <div class="asterisk"><i class="fas fa-asterisk"></i></div>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. 
                    Ullam asperiores at autem eum quo eligendi eius excepturi 
                    necessitatibus, suscipit a adipisci cumque nulla nesciunt 
                    esse consequuntur, illum sequi voluptate alias!</p>
            </div>
            <div class="footer-content-divider animate-bottom">
                <div class="social-media">
                    <h2>Follow along</h2>
                    <ul class="social-icons">
                        <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                        <li><a href="#"><i class="fab fa-facebook"></i></a></li>
                        <li><a href="#"><i class="fab fa-pinterest"></i></a></li>
                        <li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
                        <li><a href="#"><i class="fab fa-tripadvisor"></i></a></li>
                    </ul>
                </div>
                <div class="newsletter-container">
                <h1>Let's get in touch</h1><br>
                    <h3><i class="fas fa-phone "></i>&nbsp;+91&nbsp;&nbsp;8422053851</h3>
                    <h3><i class="fas fa-envelope"></i>&nbsp;Sahuharikesh0@gmail.com </h3>
                </div>
            </div>
        </div>
    </div>
</footer>
<script
  src="https://code.jquery.com/jquery-2.2.4.min.js"
  integrity="sha256-BbhdlvQf/xTY9gja0Dq3HiwQF8LaCRTXxZKRutelT44="
  crossorigin="anonymous"></script>
<script src="https://smtpjs.com/v3/smtp.js"></script>
<script src="main.js"></script>

</body>
</html>
