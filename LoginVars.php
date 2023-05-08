<?php
session_start();
$_SESSION['email']=$_POST['email'];
$_SESSION['password']=$_POST['password'];
//--------------------------------------------------------
$_SESSION['lgdin'] = false;
//Database Connection :
require_once 'dbcon.php';

//Verifying if the inputs had been filled :
/*if(isset($_POST["email"]) and isset($_POST["password"])){
    //Preparing the SQL Query :
    $sql="select * from etudiant where email='".$_SESSION['email']."' and password='".$_SESSION['password']."' limit 1";
//     $sql="select * from etudiant a,admin b,bibliothécaire c where a.email='".$_SESSION['email']."' and a.password='".$_SESSION['password']."' OR b.email='".$_SESSION['email']."' and b.password='".$_SESSION['password']."' OR c.email='".$_SESSION['email']."' and c.password='".$_SESSION['password']."' limit 1";
    var_dump($sql);echo"________________";
    $result=mysqli_query($conn,$sql); echo"________________";
    var_dump($result);echo"________________";
    $count=mysqli_num_rows($result);echo"________________";
    var_dump($count);echo"________________";
    //Setting Session Variables Gathered from Database :
    $row=mysqli_fetch_assoc($result);

//  $_SESSION['email']=$row['email'];
//  $_SESSION['password']=$row['password'];
    $_SESSION['id']=$row['idEtd'];
    $_SESSION['lastname']=$row['nom'];
    $_SESSION['firstname']=$row['prenom'];
    $_SESSION['gender']=@$row['gender'];
    $_SESSION['img']=$row['profileimg'];
    }
//    $_SESSION['admin']=$row['administrator'];
    if(!isset($_SESSION['cart']))
    {
        $_SESSION['cart'] = array();
        $_SESSION['cart']['id'] = array();
        $_SESSION['cart']['name'] = array();
        $_SESSION['cart']['location'] = array();
        $_SESSION['cart']['price'] = array();
    }
    //Verifying Credentials :
    if($count==1){
        $_SESSION['lgdin'] = true;
        header('Location: http://localhost/memorial/index.php');
        echo "<script type='text/javascript'>alert('Login Credentials verified')</script>";
    }else{
        $_SESSION['lgdin'] = false;
        echo "<script type='text/javascript'>alert('Login Credentials incorrect')</script>";
    }*/

//admin
if(isset($_POST["email"]) and isset($_POST["password"])){
    //Preparing the SQL Query :
    $sql="select * from user where email='".$_SESSION['email']."' and password='".$_SESSION['password']."' limit 1";
//  $sql="select * from etudiant a,admin b,bibliothécaire c where a.email='".$_SESSION['email']."' and a.password='".$_SESSION['password']."' OR b.email='".$_SESSION['email']."' and b.password='".$_SESSION['password']."' OR c.email='".$_SESSION['email']."' and c.password='".$_SESSION['password']."' limit 1";
//    var_dump($sql);echo"________________";
    $result=mysqli_query($conn,$sql);
    var_dump($result);
    $count=mysqli_num_rows($result);
//    var_dump($count);echo"________________";
    //Setting Session Variables Gathered from Database :
    $row=mysqli_fetch_assoc($result);

    $_SESSION['id']=$row['idUser'];
    $_SESSION['lastname']=$row['nom'];
    $_SESSION['firstname']=$row['prenom'];
    $_SESSION['role']=@$row['role'];
    $_SESSION['email']=$row['email'];
    $_SESSION['password']=$row['password'];
    $_SESSION['gender']=@$row['gender'];
    $_SESSION['number']=$row['number'];
    $_SESSION['img']=$row['profileImg'];

}
//    $_SESSION['admin']=$row['administrator'];

//Verifying Credentials :
if($count==1){
    $_SESSION['lgdin'] = true;
    if ($_SESSION['role']=="Admin"){
        header('Location: http://localhost/memorial/adminpanel.php');
    }elseif ($_SESSION['role']=="Bibliothecaire"){
        header('Location: http://localhost/memorial/biblio.php');
    }else{
        header('Location: http://localhost/memorial/index.php');
    }
    echo "<script type='text/javascript'>alert('Login Credentials verified')</script>";
}else{
    $_SESSION['lgdin'] = false;
    echo "<script type='text/javascript'>alert('Login Credentials incorrect')</script>";
}
