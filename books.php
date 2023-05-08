<?php
require_once 'dbcon.php';
session_start();



?>


<!DOCTYPE html>
<html lang="en">
   <head>
      <!-- basic -->
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <!-- mobile metas -->
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <meta name="viewport" content="initial-scale=1, maximum-scale=1">
      <!-- site metas -->
      <title>memorial books</title>
      <meta name="keywords" content="">
      <meta name="description" content="">
      <meta name="author" content="">
      <!-- bootstrap css -->
      <link rel="stylesheet" href="css/bootstrap.min.css">
      <!-- style css -->
      <link rel="stylesheet" href="css/books.css">
      <link rel="stylesheet" href="css/style.css">


      <!-- Responsive-->
      <link rel="stylesheet" href="css/responsive.css">
      <!-- fevicon -->
      <link rel="icon" href="images/fevicon.png" type="image/gif" />
      <!-- Scrollbar Custom CSS -->
      <link rel="stylesheet" href="css/jquery.mCustomScrollbar.min.css">
      <!-- Tweaks for older IEs-->
      <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script><![endif]-->
   </head>
   <!-- body -->
   <body class="main-layout Books-bg">
      <!-- loader  -->
      <div class="loader_bg">
         <div class="loader"><img src="images/loading.gif" alt="#" /></div>
      </div>
      <!-- end loader -->
      <!-- header -->
      <header>
         <!-- header inner -->
         <div class="header">
            <div class="container">
               <div class="row">
                  <div class="col-xl-3 col-lg-3 col-md-3 col-sm-3 col logo_section">
                     <div class="full">
                        <div class="center-desk">
                           <div class="logo"> <a href="index.php"><img src="images/logo.png" alt="#"></a> </div>
                        </div>
                     </div>
                  </div>
                  <div class="col-xl-9 col-lg-9 col-md-9 col-sm-9">
                     <div class="menu-area">
                        <div class="limit-box">
                           <nav class="main-menu">
                              <ul class="menu-area-main">
                                 <li > <a href="index.php">Home</a> </li>
                                 <li> <a href="about.html">About us</a> </li>
                                 <li class="active"><a href="books.html">Our Books</a></li>
                                 <li><a href="library.html">library</a></li>
                                 <li><a href="contact.html">Contact us</a></li>
                                 <li class="mean-last"> <a href="#"><img src="images/search_icon.png" alt="#" /></a> </li>
                                 <li class="mean-last"> <a href="login.php"><img src="images/top-icon.png" alt="login.html" /></a> </li>
                              </ul>
                           </nav>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
         </div>
         <!-- end header inner -->
      </header>
      <!-- end header -->
      <div class="about-bg">
         <div class="container">
            <div class="row">
               <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
                  <div class="abouttitle">
                     <h2>Our Books</h2>
                  </div>
               </div>
            </div>
         </div>
      </div>
                   <?php
                        $sql="select * from books";
                        $result=mysqli_query($conn,$sql);
                        $count=mysqli_num_rows($result);

                        $temp=array();
                        $_SESSION['articles']=$temp;

                        if ($count > 0) {
                            while($row=mysqli_fetch_assoc($result)) {
                                $_SESSION['b_id']=$row['bookId'];
                                $_SESSION['title']=$row['title'];
                                $_SESSION['series']=$row['series'];
                                $_SESSION['author']=$row['author'];
                                $_SESSION['rating']=$row['rating'];
                                $_SESSION['desc']=$row['description'];
                                $_SESSION['lang']=$row['language'];
                                $_SESSION['isbn']=@$row['isbn'];
                                $_SESSION['genre']=@$row['genres'];
                                $_SESSION['chars']=@$row['characters'];
                                $_SESSION['format']=@$row['bookFormat'];
                                $_SESSION['edition']=@$row['edition'];
                                $_SESSION['pages']=@$row['pages'];
                                $_SESSION['publisher']=@$row['publisher'];
                                $_SESSION['pubdate']=@$row['publishDate'];
                                $_SESSION['awards']=@$row['awards'];
                                $_SESSION['numrating']=@$row['numRatings'];
                                $_SESSION['rstars']=@$row['ratingsByStars'];
                                $_SESSION['likerate']=@$row['likedPercent'];
                                $_SESSION['setting']=@$row['setting'];
                                $_SESSION['coverImg']=@$row['coverImg'];
                                $_SESSION['bbeScore']=@$row['bbeScore'];
                                $_SESSION['price']=@$row['price'];?>
      <div class="container d-flex justify-content-center mt-50 mb-50">

          <div class="row">
              <div class="col-md-10">

                  <div class="card card-body">
                      <div class="media align-items-center align-items-lg-start text-center text-lg-left flex-column flex-lg-row">
                          <div class="mr-2 mb-3 mb-lg-0">

                              <img src="<?php echo $_SESSION['coverImg'];?>" width="150" height="150" alt="">

                          </div>

                          <div class="media-body">
                              <h6 class="media-title font-weight-semibold">
                                  <a href="#" data-abc="true"><?php echo $_SESSION['title']?></a>
                              </h6>

                              <ul class="list-inline list-inline-dotted mb-3 mb-lg-2">
                                  <li class="list-inline-item"><a href="#" class="text-muted" data-abc="true">by <?php echo $_SESSION['author'];?></a></li>
                                  <li class="list-inline-item"><a href="#" class="text-muted" data-abc="true">Mobiles</a></li>
                              </ul>

                              <p class="mb-3"><?php echo $_SESSION['desc'];?></p>

                              <ul class="list-inline list-inline-dotted mb-0">
                                  <li class="list-inline-item">All items from <a href="#" data-abc="true">Mobile point</a></li>
                                  <li class="list-inline-item">Add to <a href="#" data-abc="true">wishlist</a></li>
                              </ul>
                          </div>

                          <div class="mt-3 mt-lg-0 ml-lg-3 text-center">
                              <h3 class="mb-0 font-weight-semibold">$<?php echo $_SESSION['price'];?></h3>

                              <div>
                                  <i class="fa fa-star"></i>
                                  <i class="fa fa-star"></i>
                                  <i class="fa fa-star"></i>
                                  <i class="fa fa-star"></i>

                              </div>

                              <div class="text-muted">1985 reviews</div>

                              <button type="button" class="btn btn-warning mt-4 text-white"><i class="icon-cart-add mr-2"></i> Add to cart</button>
                          </div>
                      </div>
                  </div>
              </div>



          </div>
      </div>
      </div>

                            <?php }}?>

      <!-- footer -->
      <footer>
         <div class="footer">
            <div class="container">
               <div class="row pdn-top-30">
                  <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12">
                     <div class="Follow">
                        <h3>Follow Us</h3>
                     </div>
                     <ul class="location_icon">
                        <li> <a href="#"><img src="icon/facebook.png"></a></li>
                        <li> <a href="#"><img src="icon/Twitter.png"></a></li>
                        <li> <a href="#"><img src="icon/linkedin.png"></a></li>
                        <li> <a href="#"><img src="icon/instagram.png"></a></li>
                     </ul>
                  </div>
                  <div class="col-xl-8 col-lg-8 col-md-8 col-sm-12">
                     <div class="Follow">
                        <h3>Newsletter</h3>
                     </div>
                     <input class="Newsletter" placeholder="Enter your email" type="Enter your email">
                     <button class="Subscribe">Subscribe</button>
                  </div>
               </div>
            </div>
         </div>
         <div class="copyright">
            <div class="container">
               <p>Copyright 2019 All Right Reserved By <a href="https://html.design/">Free html Templates</a></p>
            </div>
         </div>
      </footer>
      <!-- end footer -->
      <!-- Javascript files-->
      <script src="js/jquery.min.js"></script>
      <script src="js/popper.min.js"></script>
      <script src="js/bootstrap.bundle.min.js"></script>
      <script src="js/jquery-3.0.0.min.js"></script>
      <script src="js/plugin.js"></script>
      <!-- sidebar -->
      <script src="js/jquery.mCustomScrollbar.concat.min.js"></script>
      <script src="js/custom.js"></script>
   </body>
</html>
COPY TO CLIPBOARD    SELECT ALL