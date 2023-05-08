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
      <link rel="stylesheet" href="css/books.scss">
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
      <!--Books -->
<!--      <div class="row mt-2 g-4">-->
<!--         <div class="col-md-3">-->
<!--            <div class="card p-1">-->
<!--               <div class="d-flex justify-content-between align-items-center p-2">-->
<!--                  <div class="flex-column lh-1 imagename"> <span>Mobile</span> <span>Phones</span> </div>-->
<!--                  <div> <img src="https://i.imgur.com/b9zkoz0.jpg" height="100" width="100" /> </div>-->
<!--               </div>-->
<!--            </div>-->
<!--         </div>-->
<!--         <div class="col-md-3">-->
<!--            <div class="card p-2">-->
<!--               <div class="d-flex justify-content-between align-items-center p-2">-->
<!--                  <div class="flex-column lh-1 imagename"> <span>Head</span> <span>Phones</span> </div>-->
<!--                  <div> <img src="https://i.imgur.com/SHWASPG.png" height="100" width="100" /> </div>-->
<!--               </div>-->
<!--            </div>-->
<!--         </div>-->
<!--         <div class="col-md-3">-->
<!--            <div class="card p-2">-->
<!--               <div class="d-flex justify-content-between align-items-center p-2">-->
<!--                  <div class="flex-column lh-1 imagename"> <span>Smart</span> <span>Watches</span> </div>-->
<!--                  <div> <img src=" https://i.imgur.com/Ya0OXCv.png" height="100" width="100" /> </div>-->
<!--               </div>-->
<!--            </div>-->
<!--         </div>-->
<!--         <div class="col-md-3">-->
<!--            <div class="card p-2">-->
<!--               <div class="d-flex justify-content-between align-items-center p-2">-->
<!--                  <div class="flex-column lh-1 imagename"> <span>Air</span> <span>Purifiers</span> </div>-->
<!--                  <div> <img src="https://i.imgur.com/2gvGwbh.png" height="100" width="100" /> </div>-->
<!--               </div>-->
<!--            </div>-->
<!--         </div>-->
<!--         <div class="col-md-3">-->
<!--            <div class="card p-2tr5">-->
<!--               <div class="d-flex justify-content-between align-items-center p-2">-->
<!--                  <div class="flex-column lh-1 imagename"> <span>Vacuum</span> <span>Cleaners</span> </div>-->
<!--                  <div> <img src="https://i.imgur.com/UMQJpSG.png" height="100" width="100" /> </div>-->
<!--               </div>-->
<!--            </div>-->
<!--         </div>-->
<!--         <div class="col-md-3">-->
<!--            <div class="card p-2">-->
<!--               <div class="d-flex justify-content-between align-items-center p-2">-->
<!--                  <div class="flex-column lh-1 imagename"> <span>Washing</span> <span>Machines</span> </div>-->
<!--                  <div> <img src="https://i.imgur.com/e9CyhXR.png" height="100" width="100" /> </div>-->
<!--               </div>-->
<!--            </div>-->
<!--         </div>-->
<!--         <div class="col-md-3">-->
<!--            <div class="card p-2">-->
<!--               <div class="d-flex justify-content-between align-items-center p-2">-->
<!--                  <div class="flex-column lh-1 imagename"> <span>Smart</span> <span>Televisions</span> </div>-->
<!--                  <div> <img src=" https://i.imgur.com/Zq8VigZ.png" height="100" width="100" /> </div>-->
<!--               </div>-->
<!--            </div>-->
<!--         </div>-->
<!--         <div class="col-md-3">-->
<!--            <div class="card p-2">-->
<!--               <div class="d-flex justify-content-between align-items-center p-2">-->
<!--                  <div class="flex-column lh-1 imagename"> <span>Laptops</span> </div>-->
<!--                  <div> <img src="https://i.imgur.com/6pK5oZl.jpg" height="100" width="100" /> </div>-->
<!--               </div>-->
<!--            </div>-->
<!--         </div>-->
<!--      </div>-->
      <div class="container bg-light rounded">
         <div class="h4 font-weight-bold text-center py-3">Explore more</div>
         <div class="row">
            <div class="col-lg-4 col-md-6 my-lg-0 my-3">
               <div class="box bg-white">
                  <div class="d-flex align-items-center">
                     <div
                             class="rounded-circle mx-3 text-center d-flex align-items-center justify-content-center blue">
                        <img src="https://freepngimg.com/thumb/microphone/11-microphone-png-image-thumb.png" alt="">
                     </div>
                     <div class="d-flex flex-column">
                        <b>Public Speech</b>
                        <a href="#">
                           <p class="text-muted">23 classes</p>
                        </a>
                     </div>
                  </div>
               </div>
            </div>
            <div class="col-lg-4 col-md-6 my-lg-0 my-3">
               <div class="box bg-white">
                  <div class="d-flex align-items-center">
                     <div class="rounded-circle mx-3  d-flex align-items-center justify-content-center pale-orange">
                        <img src="https://freepngimg.com/thumb/email_marketing/5-2-email-png-thumb.png" alt="">
                     </div>
                     <div class="d-flex flex-column">
                        <b>Write an email</b>
                        <a href="#">
                           <p class="text-muted">5 classes</p>
                        </a>
                     </div>
                  </div>
               </div>
            </div>
            <div class="col-lg-4 col-md-6 my-lg-0 my-3">
               <div class="box bg-white">
                  <div class="d-flex align-items-center">
                     <div class="rounded-circle mx-3  d-flex align-items-center justify-content-center pale-purple">
                        <img src="https://freepngimg.com/thumb/technology/40061-1-machining-robot-download-free-image-thumb.png"
                             alt="">
                     </div>
                     <div class="d-flex flex-column">
                        <b>Technology</b>
                        <a href="#">
                           <p class="text-muted">32 classes</p>
                        </a>
                     </div>
                  </div>
               </div>
            </div>
            <div class="col-lg-4 col-md-6 my-lg-3 my-3">
               <div class="box bg-white">
                  <div class="d-flex align-items-center">
                     <div class="rounded-circle mx-3  d-flex align-items-center justify-content-center pale-cyan">
                        <img src="https://freepngimg.com/thumb/brain/80003-learning-human-albert-play-scientist-behavior-einstein-thumb.png"
                             alt="">
                     </div>
                     <div class="d-flex flex-column">
                        <b>Professions</b>
                        <a href="#">
                           <p class="text-muted">5 classes</p>
                        </a>
                     </div>
                  </div>
               </div>
            </div>
            <div class="col-lg-4 col-md-6 my-lg-3 my-3">
               <div class="box bg-white">
                  <div class="d-flex align-items-center">
                     <div class="rounded-circle mx-3  d-flex align-items-center justify-content-center pale-pink">
                        <img src="https://freepngimg.com/thumb/google/66809-google-docs-drive-plus-android-document-thumb.png"
                             alt="">
                     </div>
                     <div class="d-flex flex-column">
                        <b>Documentation</b>
                        <a href="#">
                           <p class="text-muted">6 classes</p>
                        </a>
                     </div>
                  </div>
               </div>
            </div>
            <div class="col-lg-4 col-md-6 my-lg-3 my-3">
               <div class="box bg-white">
                  <div class="d-flex align-items-center">
                     <div class="rounded-circle mx-3  d-flex align-items-center justify-content-center pale-orange">
                        <img src="https://www.freepnglogos.com/uploads/plane-png/plane-png-fort-wayne-international-airport-2.png"
                             alt="">
                     </div>
                     <div class="d-flex flex-column">
                        <b>Business Trip</b>
                        <a href="#">
                           <p class="text-muted">28 classes</p>
                        </a>
                     </div>
                  </div>
               </div>
            </div>
            <div class="col-lg-4 col-md-6 my-lg-0 my-3">
               <div class="box bg-white">
                  <div class="d-flex align-items-center">
                     <div class="rounded-circle mx-3  d-flex align-items-center justify-content-center pale-orange">
                        <img src="https://www.freepnglogos.com/uploads/whatsapp-circle-message-messaging-messenger-round-icon--24.png"
                             alt="">
                     </div>
                     <div class="d-flex flex-column">
                        <b>On the Phone</b>
                        <a href="#">
                           <p class="text-muted">5 classes</p>
                        </a>
                     </div>
                  </div>
               </div>
            </div>
            <div class="col-lg-4 col-md-6 my-lg-0 my-3">
               <div class="box bg-white">
                  <div class="d-flex align-items-center">
                     <div class="rounded-circle mx-3  d-flex align-items-center justify-content-center pale-green">
                        <img src="https://freepngimg.com/thumb/technology/63219-bin-recycling-computer-recycle-electronics-waste-electronic-thumb.png" alt="">
                     </div>
                     <div class="d-flex flex-column">
                        <b>Electronics</b>
                        <a href="#">
                           <p class="text-muted">5 classes</p>
                        </a>
                     </div>
                  </div>
               </div>
            </div>
            <div class="col-lg-4 col-md-6 my-lg-0 my-3">
               <div class="box bg-white">
                  <div class="d-flex align-items-center">
                     <div class="rounded-circle mx-3  d-flex align-items-center justify-content-center pale-pista">
                        <img src="https://freepngimg.com/thumb/happy_person/4-2-happy-person-transparent-thumb.png"
                             alt="">
                     </div>
                     <div class="d-flex flex-column">
                        <b>Job Interview</b>
                        <a href="#">
                           <p class="text-muted">5 classes</p>
                        </a>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <div class="container mt-5 mb-5">
         <div class="d-flex justify-content-center row">
            <div class="col-md-10">
               <div class="row p-2 bg-white border rounded">
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
                    /////////// here /////////////////////////////////

                   <h1>TRY THIS</h1>
                   <div class="container mt-5 mb-5">
                       <div class="d-flex justify-content-center row">
                           <div class="col-md-10">
                               <div class="row p-2 bg-white border rounded">
                                   <div class="col-md-3 mt-1"><img class="img-fluid img-responsive rounded product-image" src="https://i.imgur.com/QpjAiHq.jpg"></div>
                                   <div class="col-md-6 mt-1">
                                       <h5>Quant olap shirts</h5>
                                       <div class="d-flex flex-row">
                                           <div class="ratings mr-2"><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i></div><span>310</span>
                                       </div>
                                       <div class="mt-1 mb-1 spec-1"><span>100% cotton</span><span class="dot"></span><span>Light weight</span><span class="dot"></span><span>Best finish<br></span></div>
                                       <div class="mt-1 mb-1 spec-1"><span>Unique design</span><span class="dot"></span><span>For men</span><span class="dot"></span><span>Casual<br></span></div>
                                       <p class="text-justify text-truncate para mb-0">There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable.<br><br></p>
                                   </div>
                                   <div class="align-items-center align-content-center col-md-3 border-left mt-1">
                                       <div class="d-flex flex-row align-items-center">
                                           <h4 class="mr-1">$13.99</h4><span class="strike-text">$20.99</span>
                                       </div>
                                       <h6 class="text-success">Free shipping</h6>
                                       <div class="d-flex flex-column mt-4"><button class="btn btn-primary btn-sm" type="button">Details</button><button class="btn btn-outline-primary btn-sm mt-2" type="button">Add to wishlist</button></div>
                                   </div>
                               </div>
                               /////////////////////////////////aaaaaaaaa//////////////////////////////////
                                <div class="col-md-3 mt-1"><img class="img-fluid img-responsive rounded product-image" src="<?php echo $_SESSION['coverImg'];?>"></div>
                                          <div class="col-md-6 mt-1">
                                             <h5><?php echo $_SESSION['title']?></h5>
                                             <div class="d-flex flex-row">
                                                <div class="ratings mr-2"><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i></div><span>310</span>
                                             </div>
                                             <div class="mt-1 mb-1 spec-1"><span><?php echo $_SESSION['rating'];?></span><span class="dot"></span><span><?php echo $_SESSION['genre']?></span><span class="dot"></span><span>Best finish<br></span></div>
                                             <div class="mt-1 mb-1 spec-1"><span><?php echo $_SESSION['author'];?></span><span class="dot"></span><span><?php echo $_SESSION['edition']?></span><span class="dot"></span><span>Casual<br></span></div>
                                             <p class="text-justify text-truncate para mb-0"><?php echo $_SESSION['desc'];?><br><br></p>
                                          </div>
                                          <div class="align-items-center align-content-center col-md-3 border-left mt-1">
                                             <div class="d-flex flex-row align-items-center">
                                                <h4 class="mr-1"><?php echo $_SESSION['price'];?></h4><span class="strike-text">$20.99</span>
                                             </div>
                                             <h6 class="text-success"><?php echo $_SESSION['setting'];?>></h6>
                                             <div class="d-flex flex-column mt-4"><button class="btn btn-primary btn-sm" type="button">Details</button><button class="btn btn-outline-primary btn-sm mt-2" type="button">Add to wishlist</button></div>
                                          </div>
                                       </div>

                                    </div>
                                 </div>
      </div>                <?php }}?>
<!--      <div class="Books">-->
<!--         <div class="container">-->
<!--            <div class="row">-->
<!--               <div class="col-md-10 offset-md-1">-->
<!--                  <div class="titlepage">-->
<!--                     <span>adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris</span> -->
<!--                  </div>-->
<!--               </div>-->
<!--            </div>-->
<!--            <div class="row box">-->
<!--               <div class="col-xl-3 col-lg-3 col-md-3 col-sm-12">-->
<!--                  <div class="book-box">-->
<!--                     <figure><img src="images/book-1.jpg" alt="img"/></figure>-->
<!--                  </div>-->
<!--               </div>-->
<!--               <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">-->
<!--                  <div class="book-box">-->
<!--                     <figure><img src="images/book-2.jpg" alt="img"/></figure>-->
<!--                  </div>-->
<!--               </div>-->
<!--               <div class="col-xl-3 col-lg-3 col-md-3 col-sm-12">-->
<!--                  <div class="book-box">-->
<!--                     <figure><img src="images/book-1.jpg" alt="img"/></figure>-->
<!--                  </div>-->
<!--               </div>-->
<!--               <div class="col-md-6 offset-md-3">-->
<!--                  <p>magna aliqua. Ut enim ad minim veniam,quis nostrud exercitation ullamco laboris</p>-->
<!--               </div>-->
<!--            </div>-->
<!--            <div class="container">-->
<!--               <div class="row">-->
<!--                  <div class="col-md-12">-->
<!--                     <div class="read-more">-->
<!--                        <a href="#">Read More</a>-->
<!--                     </div>-->
<!--                  </div>-->
<!--               </div>-->
<!--            </div>-->
<!--         </div>-->
<!--      </div>-->
      <!-- end Books -->
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