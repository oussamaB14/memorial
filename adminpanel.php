<?php
require_once "dbcon.php";
session_start();
function deluser($uid){
    $stmt=$conn->prepare("delete from user where idUser='".$uid."'");
    $stmt->execute();
    $stmt->close();
}
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
    <link rel="stylesheet" href="css/style.css">
    <!-- Responsive-->
    <link rel="stylesheet" href="css/responsive.css">
    <!-- fevicon -->
    <link rel="icon" href="images/fevicon.png" type="image/gif" />
    <!-- Scrollbar Custom CSS -->
    <link rel="stylesheet" href="css/jquery.mCustomScrollbar.min.css">
    <link rel="stylesheet" href="css/admin.css">
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet">
    <!-- Tweaks for older IEs-->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script><![endif]-->
</head>
<!-- body -->
<body class="main-layout contact-page">
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
                            <div class="logo"> <a href="adminpanel.php"><img src="images/logo.png" alt="#"></a> </div>
                        </div>
                    </div>
                </div>
                <d
                <div class="col-xl-9 col-lg-9 col-md-9 col-sm-9">
                    <div class="menu-area">
                        <div class="limit-box">
                            <nav class="main-menu">
                                <ul class="menu-area-main">
                                    <!--<li > <a href="index.php">Home</a> </li>
                                    <li> <a href="about.html">About us</a> </li>
                                    <li><a href="books.html">Our Books</a></li>
                                    <li><a href="library.html">library</a></li>
                                    <li class="active"><a href="contact.html">Contact us</a></li>
                                    <li class="mean-last"> <a href="#"><img src="images/search_icon.png" alt="#" /></a> </li>
                                    <li class="mean-last"> <a href="login.php"><img src="images/top-icon.png" alt="login.html" /></a> </li>-->

                                    <li><a href="LogoutVars.php">Logout</a></li>
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
                    <h2>Admin Panel</h2>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Contact -->

<div class="container">
    <div class="row">
        <div class="col-lg-12">
            <div class="main-box clearfix">
                <div class="table-responsive">
                    <table class="table user-list">
                        <thead>
                        <tr>
                            <th><span>User</span></th>
                            <th><span>Role</span></th>
                            <th class="text-center"><span>Number</span></th>
                            <th><span>Email</span></th>
                            <th><span>Password</span></th>
                            <th>&nbsp;</th>
                        </tr>
                        </thead>
                        <tbody>
<!--                                <img src="https://bootdey.com/img/Content/avatar/avatar1.png" alt="">-->
<!--                                <a href="#" class="user-link">Mila Kunis</a>-->
<!--                                <span class="user-subhead">Admin</span>-->
                                <?php
                                $sql="select * from user";
                                $result=mysqli_query($conn,$sql);
                                $count=mysqli_num_rows($result);
                                $temp=array();
                                $_SESSION['users']=$temp;
                                if($_SESSION['role']=="Admin"){
                                        if ($count > 0) {
                                            while($row=mysqli_fetch_assoc($result)) {
                                                $_SESSION['u_id']=$row['idUser'];
                                                $_SESSION['u_firstname']=$row['nom'];
                                                $_SESSION['u_lastname']=$row['prenom'];
                                                $_SESSION['u_role']=$row['role'];
                                                $_SESSION['u_email']=$row['email'];
                                                $_SESSION['u_password']=$row['password'];
                                                $_SESSION['u_number']=$row['number'];
                                                $_SESSION['u_img']=@$row['profileImg'];
                                                ?>
                                                <div class="article">
                                                    <tr>
                                                        <td>
<!--                                                    <img id="profileimg"src='--><?php //echo "images/Account/".$_SESSION['u_img'].""?><!--'>-->
<!--                                                    <h1>--><?php //echo $_SESSION['u_id']?><!--</h1>-->
                                                            <h4><?php echo $_SESSION['u_firstname'];echo " ".$_SESSION['u_lastname']?></h4>
                                                        </td>
                                                        </td>
                                                        <td>
                                                            <h4><?php echo $_SESSION['u_role']?></h4>
                                                        </td>
                                                        <td class="text-center">
                                                            <span class="label label-default"><h4><?php echo $_SESSION['u_number']?></h4></span>
                                                        </td>
                                                        <td>
                                                            <a href="#"><h4><?php echo $_SESSION['u_email']?></h4></a>
                                                        </td>
                                                        <td>
                                                            <a href="#"><h4><?php echo $_SESSION['u_password']?></h4></a>
                                                        </td>
                                                        <td style="width: 20%;">
                                                            <form method="POST" action="upduser.php">
                                                                <button  type="submit" name="update" value="<?=$_SESSION['u_id']?>">
                                                                    <a href="#" class="table-link">
                                                                        <span class="fa-stack">
                                                                            <i class="fa fa-square fa-stack-2x"></i>
                                                                            <i class="fa fa-pencil fa-stack-1x fa-inverse"></i>
                                                                        </span>
                                                                    </a>
                                                                </button>
                                                            </form>
                                                            <form method="POST" action="deluser.php" >
                                                                <button  type="submit" name="delete" value="<?=$_SESSION['u_id']?>">
                                                                    <a class="table-link danger">
                                                                        <span class="fa-stack">
                                                                            <i class="fa fa-square fa-stack-2x"></i>
                                                                            <i class="fa fa-trash-o fa-stack-1x fa-inverse"></i>
                                                                        </span>
                                                                    </a>
                                                                </button>
                                                            </form>
                                                        </td>
                                                </div>
                                                <?php
                                            }
                                        }
                                    }?>
                        </tr>

                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- end Contact -->
<!-- footer -->
<footer>

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