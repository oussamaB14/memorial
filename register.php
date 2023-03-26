<?php
//Datebase Connection :
require_once ' dbcon.php';

$showAlert = false;
$showError = false;
$exists=false;

if($_SERVER["REQUEST_METHOD"] == "POST") {



    $nom = $_POST["nom"];
    $prenom = $_POST["prenom"];
    $email = $_POST["email"];
    $password = $_POST["password"];
    $cpassword = $_POST["cpassword"];

    $conn=new mysqli('localhost','root','','memorial');
    $sql = "Select * from users where username='nom'";

    $result = mysqli_query($conn, $sql);

    $num = mysqli_num_rows($result);

    // This sql query is use to check if
    // the username is already present
    // or not in our Database
    if($num == 0) {
        if(($password == $cpassword) && $exists==false) {

            $hash = password_hash($password,
                PASSWORD_DEFAULT);

            // Password Hashing is used here.
            $sql = "INSERT INTO `etudiant` ( `nom`, `prenom`,`email`,`password`,
                `cpassword`) VALUES ('$nom', 
                '$hash', current_timestamp())";

            $result = mysqli_query($conn, $sql);

            if ($result) {
                $showAlert = true;
            }
        }
        else {
            $showError = "Passwords do not match";
        }
    }// end if

    if($num>0)
    {
        $exists="Username not available";
    }

}*///end if*/
?>
<!DOCTYPE html>
<!-- Created By CodingLab - www.codinglabweb.com -->
<html lang="en" dir="ltr">
<head>
    <meta charset="UTF-8">
    <!---<title> Responsive Registration Form | CodingLab </title>--->
    <link rel="stylesheet" href="css/register.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
<div class="container">
    <div class="title">Registration</div>
    <div class="content">
        <form action="http://localhost/memorial/RegisterVars.php" enctype="multipart/form-data">
            <div class="user-details">
                <div class="input-box">
                    <span class="details">First Name</span>
                    <input name="prenom" type="text" placeholder="Enter your first name" required>
                </div>
                <div class="input-box">
                    <span class="details">Username</span>
                    <input name="nom" type="text" placeholder="Enter your last name" required>
                </div>
                <div class="input-box">
                    <span class="details">Email</span>
                    <input name="mail" type="text" placeholder="Enter your email" required>
                </div>
                <div class="input-box">
                    <span class="details">Phone Number</span>
                    <input name="phone" type="text" placeholder="Enter your number" required>
                </div>
                <div class="input-box">
                    <span class="details">Password</span>
                    <input name="password" type="text" placeholder="Enter your password" required>
                </div>
                <div class="input-box">
                    <span class="details">Confirm Password</span>
                    <input type="text" placeholder="Confirm your password" required>
                </div>
            </div>
            <div class="gender-details">
                <input type="radio" name="gender" id="dot-1">
                <input type="radio" name="gender" id="dot-2">
                <input type="radio" name="gender" id="dot-3">
                <span class="gender-title">Gender</span>
                <div class="category">
                    <label for="dot-1">
                        <span class="dot one"></span>
                        <span class="gender">Male</span>
                    </label>
                    <label for="dot-2">
                        <span class="dot two"></span>
                        <span class="gender">Female</span>
                    </label>
                    <label for="dot-3">
                        <span class="dot three"></span>
                        <span class="gender">Prefer not to say</span>
                    </label>
                </div>
            </div>
            <div class="button">
                <input type="submit" value="Register">
            </div>
            <div class="signup-link">Already have an account? <a href="login.php">Signin now</a></div>
        </form>
    </div>
</div>

</body>
</html>