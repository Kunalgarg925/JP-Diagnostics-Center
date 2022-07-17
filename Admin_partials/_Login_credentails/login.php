<?php
$login = false;
$showError = false;
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    include("db_connect.php");
    $Emailid = $_POST["Emailid"];
    $password = $_POST["password"];

    $sql = "SELECT * from `admin-login` where `Email-id`='$Emailid'";
    $result = mysqli_query($conn, $sql);
    $num = mysqli_num_rows($result);
    if ($num == 1) {
        while($row=mysqli_fetch_assoc($result)){
            if(password_verify($password, $row['password'])){
            $login = true;
            session_start();
            $_SESSION['loggedin'] = true;
            $_SESSION['Emailid'] = $Emailid;
            header("location:/Admin_partials/_welcome_admin.php");
        }
        else{
            $showError = "Invalid Credentials";
        }
    }
}
    else {
       $showError = "Invalid Credentials";
   }
}

?>

<!DOCTYPE html>
<html lang="en"> 
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login | JP Diagnostics</title>
    <link href="style.css" rel="stylesheet">
 
</head> 

<body>
<?php
    if ($login) {
        echo "<strong>Success!</strong> You are logged in";
    }
    if ($showError) {
        echo"<strong>Error!</strong> ' . $showError . ";
    }
    ?>
    <div class="hero">
        <div class="form-box">
            <div class="button-box">
                <div id="btn"></div>
                <button type="button" class="toggle-btn" onclick="login()">Log In</button>
                <!-- <button type="button" class="toggle-btn" onclick="signup()">Sign Up </button> -->
            </div>
            <div class="social-icons">
                <img src="fb.jpg"></img>
                <img src="tw.png"></img>
                <img src="g.png"></img>
            </div>
            <!-- Login section --> 
            <form action="/Admin_partials/_Login_credentails/login.php" method="POST" id="login" class="input-group">
                <input type="text" id="Emailid" class="input-field" name="Emailid" placeholder="User Id" required>
                <input type="password" minlength="8" maxlength="16" class="input-field" name="password" placeholder="Enter Password" required>
                <input type="checkbox" class="check-box"><span>Remember Password</span>
                <button type="submit" class="submit-btn">Log in</button>
            </form>

            <!-- end login section  -->

            <!-- Signup Section  -->
             <!-- <form action="/Admin_partials/_Login_credentails/signup.php" method="POST" id="signup" class="input-group">
                <input type="text" class="input-field" name="Username" placeholder="Full Name" required>
                <input type="email" class="input-field" name="Emailid" placeholder="Email-id" required>
                <input type="numeric" maxlength="10" class=" input-field" name="Phone" placeholder="Phone No." required>
                <input type="password" minlength="8" maxlength="16" class="input-field" name="password" placeholder="Enter Password" required>
                <input type="password" minlength="8" maxlength="16" class="input-field" name="confirm_password" placeholder="Enter Confirm Password" required>
                <input type="checkbox" name="check-box" class="check-box"><span>I agree to the terms & conditions</span>
                <button type="submit" class="submit-btn">Sign Up</button>
            </form> -->

            <!-- end signup section -->
        </div>
    </div>

    <script>
        var x = document.getElementById("login");
        var y = document.getElementById("signup");
        var z = document.getElementById("btn");

        // function signup() {
        //     x.style.left = "-400px";
        //     y.style.left = "50px";
        //     z.style.left = "110px";
            // location.href = "/Admin_partials/_Login_credentails/signup.php";
        // }

        function login() {
            x.style.left = "50px";
            y.style.left = "450px";
            z.style.left = "0px";
            // location.href = "/Admin_partials/Login_credentails/_login.php";
        }
    </script>
        <!-- Option 1: Bootstrap Bundle with Popper -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-p34f1UUtsS3wqzfto5wAAmdvj+osOnFyQFpp4Ua3gs/ZVWx6oOypYoCJhGGScy+8" crossorigin="anonymous"></script>
</body>
</html>