<?php

use PHPMailer\PHPMailer\SMTP;

require '../phpmailer/Index.php';
// Connection to a Database

$servername = "localhost:3306";
$username = "root";
$password = "";
$database = "appointments";

// Create a connection

$conn = mysqli_connect($servername, $username, $password, $database);

// Die if connection was not successfull

if(!$conn){
    die("Sorry we failed to connect:".mysqli_connect_error());
}

// Declaration the variable 

if ($_SERVER["REQUEST_METHOD"] == "POST"){
    $Name = $_POST['name'];
    $Email_Id = $_POST['email'];
    $Phone = $_POST['phone'];
    $Doapp = date('Y-m-d', strtotime($_POST['apn-date']));
    $Department = $_POST['department'];
    $Doctor = $_POST['doctor'];
    $Message = $_POST['message'];
  
  // sql query to be executed for insert data in a table
  
  $sql = "INSERT INTO `patient_appointment` (`Name`, `Email_Id`, `Phone`, `App_Date`, `Department`, `Doctor`, `Message`, `DT`) VALUES ('$Name', '$Email_Id', '$Phone', '$Doapp', '$Department', '$Doctor', '$Message', current_timestamp())";
  $result = mysqli_query($conn, $sql);

  $html='Success! Dear ' . $Name .' your appointemnt has been successfully registered on '. $Doapp  . ', kindly visit on time that day for your health check-up . Thank You...';

      if($result){
        echo'<div class="alert alert-success alert-dismissible fade show" role="alert">
        <strong>Success!</strong> The appointemnt has been successfully registered ' . $Name .' on Date '. $Doapp . ' .
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>';
        echo smtp_mailer($Email_Id,'Appointment Booked',$html);
        
      }
      else{
        echo"The appointment was not insert sucessfully because of this error --->".mysqli_error($conn);
      }
    }
?>

