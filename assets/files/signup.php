<?php
include("db_connect.php");
$showAlert = false;
$showError = false;

if ($_SERVER["REQUEST_METHOD"] == "POST"){
    $Username = $_POST["Username"];
    $Emailid = $_POST["Emailid"];
    $Phone = $_POST["Phone"];
    $password = $_POST["password"];
    $confirm_password = $_POST["confirm_password"];
    // $exists = false;

    // Check Whether this username Exists
    $existSql = "SELECT * FROM `admin-login` WHERE `Email-id` = '$Emailid'";
    $result = mysqli_query($conn, $existSql);
    $numExitsRows = mysqli_num_rows($result);
    if($numExitsRows > 0){
        $showError= "Username Already Exists";
    }
    else{
        if (($password == $confirm_password)){
            $hash = password_hash($password, PASSWORD_DEFAULT);
            
            $sql = "INSERT INTO `admin-login` (`Username`, `Email-id`, `Phone_no`, `password`, `dt`) VALUES ('$Username', '$Emailid', '$Phone', '$hash', current_timestamp())";
            $result = mysqli_query($conn, $sql);
            if ($result) {
                $showAlert = true;
                // echo"data inserted successully";
            }
        }
            else {
                $showError= "Passwords do not match";
                // echo"The appointment was not insert sucessfully because of this error --->".mysqli_error($conn);
                // echo"data has not inserted due to --->".mysqli_error($conn);
            }
     
   }   
}    
?>

<!DOCTYPE html>
<html lang="en"> 
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign up | JP Diagnostics</title>
    <link href="style.css" rel="stylesheet">
    
 
</head> 

<body>
    <?php
    if ($showAlert) {
        echo "        <strong>Success!</strong> Your account is now created and you can login";
        header('Location: /Admin_partials/_Login_credentails/login.php');
    }
    if ($showError) {
        echo "$showError";
    }
    ?>
    <div class="hero">
        <div class="form-box">
            <div class="button-box">
                <div id="btn"></div>
                <button type="button" class="toggle-btn" onclick="login()">Log In</button>
                <button type="button" class="toggle-btn" onclick="signup()">Sign Up</button>
            </div>
            <div class="social-icons">
                <img src="fb.jpg"></img>
                <img src="tw.png"></img>
                <img src="g.png"></img>
            </div>
            <!-- Login section -->
            <form id="login" class="input-group">
                <input type="text" class="input-field" name="Username" placeholder="User Id" required>
                <input type="password" minlength="8" maxlength="16" class="input-field" name="password" placeholder="Enter Password" required>
                <input type="checkbox" class="check-box"><span>Remember Password</span>
                <button type="submit" class="submit-btn">Log in</button>
            </form>

            <!-- end login section  -->

            <!-- Signup Section  -->
            <form action="/Admin_partials/_Login_credentails/signup.php" method="POST" id="signup" class="input-group">
                <input type="text" class="input-field" name="Username" placeholder="Full Name" required>
                <input type="email" class="input-field" name="Emailid" placeholder="Email-id" required>
                <input type="numeric" maxlength="10" class=" input-field" name="Phone" placeholder="Phone No." required>
                <input type="password" minlength="8" maxlength="16" class="input-field" name="password" placeholder="Enter Password" required>
                <input type="password" minlength="8" maxlength="16" class="input-field" name="confirm_password" placeholder="Enter Confirm Password" required>
                <input type="checkbox" name="check-box" class="check-box"><span>I agree to the terms & conditions</span>
                <button type="submit" class="submit-btn">Sign Up</button>
            </form>

            <!-- end signup section -->
        </div>
    </div>

    <script>
        var x = document.getElementById("login");
        var y = document.getElementById("signup");
        var z = document.getElementById("btn");

        function signup() {
            x.style.left = "-400px";
            y.style.left = "50px";
            z.style.left = "110px";
            // location.href = "/Admin_partials/_Login_credentails/signup.php";
        }

        function login() {
            x.style.left = "50px";
            y.style.left = "450px";
            z.style.left = "0px";
            location.href = "/Admin_partials/_Login_credentails/login.php";
        }
    </script>
        <!-- Option 1: Bootstrap Bundle with Popper -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-p34f1UUtsS3wqzfto5wAAmdvj+osOnFyQFpp4Ua3gs/ZVWx6oOypYoCJhGGScy+8" crossorigin="anonymous"></script>

</body>
</html>