<?php

// Connection to a Database

$servername = "localhost:3306";
$username = "root";
$password = "";
$database = "contact_us";

// Create a connection

$conn = mysqli_connect($servername, $username, $password, $database);

// Die if connection was not successfull

if(!$conn){
    die("Sorry we failed to connect:".mysqli_connect_error());
}
// Declaration the variable 

if ($_SERVER["REQUEST_METHOD"] == "POST"){
    $Contact_Name = $_POST['name'];
    $Contact_Email = $_POST['email'];
    $Contact_Subject = $_POST['subject'];
    $Contact_Message = $_POST['message'];
  
  // sql query to be executed for insert data in a table
  
  $sql = "INSERT INTO `contact_us` (`Contact_Name`, `Contact_Email`, `Contact_Subject`, `Contact_Message`, `Contact_Date`) VALUES ('$Contact_Name', '$Contact_Email', '$Contact_Subject', '$Contact_Message', current_timestamp())";
  $result = mysqli_query($conn, $sql);
  
      if($result){
        echo'<div class="alert alert-success alert-dismissible fade show" role="alert">
        <strong>Success!</strong> The Contact request successfully sent. We trying to contact you soon. ' . $Contact_Name .'  
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>';
      }
      else{
        echo"The contact us request was not insert sucessfully because of this error --->".mysqli_error($conn);
      }
    }
?>

