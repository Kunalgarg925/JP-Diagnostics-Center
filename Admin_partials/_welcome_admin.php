<?php
session_start();
if (!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] != true) {
  $url = '/Admin_partials/_Login_credentails/login.php';
  header("location :" . $url);
  exit();
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width,initial-scale=1,maximum-scale=1">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!-- Favicons -->
  <link href="../JP Diagnostic pics/jplg.png" rel="icon">
  <title>JP DIAGNOSTICS | ADMIN</title>
  <!-- Line awesome -->
  <link rel="stylesheet" href="https://maxst.icons8.com/vue-static/landings/line-awesome/line-awesome/1.3.0/css/line-awesome.min.css">
  <link href="_styleAdmin.css" rel="stylesheet">

</head>

<body>
  <input type="checkbox" id="nav-toggle">
  <!-- Navigation header toolbar or side bar  Started -->
  <div class="sidebar">
    <div class="sidebar-brand">
      <h2><span class="lab la-gripfire"></span> <span>JP Diagnostic</span></h2>
    </div>
    <div class="sidebar-menu">
      <ul>
        <li>
          <a href="/Admin_partials/_welcome_admin.php" class="active"><span class="las la-igloo"></span><span>Dashboard</span></a>
          <!-- <ul>
            <li>
              <a href=""><span class="las la-igloo"></span><span>Hospital Performance</span></a>
            </li>
            <li>
              <a href=""><span class="las la-igloo"></span><span>Doctor Performance</span></a>
            </li>
            <li>
              <a href=""><span class="las la-igloo"></span><span>Doctor Dashboard</span></a>
            </li>
            <li>
              <a href=""><span class="las la-igloo"></span><span>Patient Dashboard</span></a>
            </li>
          </ul> -->
        </li>
        <li>
          <a href="/Admin_partials/Admin_assets/_Appointment.php"><span class="las la-clipboard-list"></span><span>Appointments</span></a>
        </li>
        <li>
          <a href="/Admin_partials/Admin_assets/_Contact.php"><span class="las la-igloo"></span><span>Contact_us</span></a>
        </li>
        <li>
          <a href="/Admin_partials/Admin_assets/_subscribe.php"><span class="las la-igloo"></span><span>Subscriber</span></a>
        </li>
        <li>
          <a href="/Admin_partials/Admin_assets/_Patient.php"><span class="las la-user-tie"></span><span>Patients</span></a>
        </li>
        <li>
          <a href=""><span class="las la-rupee-sign"></span><span>Payment</span></a>
        </li>
        <li>
          <a href=""><span class="las la-book"></span><span>Accounts</span></a>
        </li>

      </ul>
    </div>
  </div>
  <!--  Ending Navigation header toolbar or side bar -->

  <!-- Header Starting -->
  <div class="main-content">
    <header>
      <h2>
        <label for="nav-toggle">
          <span class="las la-bars"></span>
        </label>
        Dashboard
      </h2>
      <div class="search-wrapper">
        <span class="las la-search"></span>
        <input type="search" placeholder="search here" />
      </div>

      <div class="user-wrapper">
        <img src="/jplg.png" width="30px" height="40px" alt="">
        <div>
          <h4 class="userstyle"> <?php echo $_SESSION['Emailid'] ?> </h4>
          <small>Super Admin</small>
          <div class="logout"><small><a href="/Admin_partials/_Login_credentails/logout.php">Logout</a></small></div>
        </div>
      </div>
    </header>
    <!-- Header Ending -->

    <!-- Main Content Starting  -->
    <main>

      <div class="cards">
        <div class="card-single">
          <div>
            <?php
            $server = "localhost:3306";
            $username = "root";
            $password = "";
            $database = "appointments";

            $conn = mysqli_connect($server, $username, $password, $database);
            if (!$conn) {
              die("Error" . mysqli_connect_error());
            }

            $sql = "SELECT * FROM `patient_appointment`";
            $result = mysqli_query($conn, $sql);
            $num = mysqli_num_rows($result);
            ?>
            <h1><?php echo $num;?></h1>
            <span>Appointments</span>
          </div>
          <div>
            <span class="las la-users"></span>
          </div>
        </div>
        <div class="card-single">
          <div>
            <h1>150</h1>
            <span>New Patient</span>
          </div>
          <div><span class="las la-users"></span>
          </div>
        </div>
        <div class="card-single">
          <div>
            <h1>500</h1>
            <span>Prescription</span>
          </div>
          <div><span class="las la-users"></span>
          </div>
        </div>
        <div class="card-single">
          <div>
          <?php
            $server = "localhost:3306";
            $username = "root";
            $password = "";
            $database = "subscribe";

            $conn = mysqli_connect($server, $username, $password, $database);
            if (!$conn) {
              die("Error" . mysqli_connect_error());
            }

            $sql = "SELECT * FROM `subsciber_details`";
            $result = mysqli_query($conn, $sql);
            $num = mysqli_num_rows($result);
            ?>
            <h1><?php echo $num;?></h1>
            <span>Subscriber</span>
          </div>
          <div><span class="lab la-google-wallet"></span>
          </div>
        </div>
      </div>

      <div class="recent-grid">
        <div class="projects">
          <div class="card">
            <div class="card-header">
              <h3>Recent Projects</h3>

              <button>See all <span class="las la-arrow-right">
                </span></button>
            </div>
            <div class="card-body">
              <div class="table-responsive">
                <table width="100%">
                  <thead>
                    <tr>
                      <td style="font-size: 1.3rem;"><b>Patients</b></td>
                      <td style="font-size: 1.3rem;"><b>Departments</b></td>
                      <td style="font-size: 1.3rem;"><b>Status</b></td>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td>Vishnu</td>
                      <td>x-ray/radiology</td>
                      <td>
                        <span class="status purple"></span>
                        review
                      </td>
                    </tr>
                    <tr>
                      <td>Rajesh</td>
                      <td>CT-Scan/radiology</td>
                      <td>
                        <span class="status pink"></span>
                        Progress
                      </td>
                    </tr>
                    <tr>
                      <td>Prashant</td>
                      <td>MRI/radiology</td>
                      <td>
                        <span class="status orange"></span>
                        Pending
                      </td>
                    </tr>
                    <tr>
                      <td>Vishnu</td>
                      <td>x-ray/radiology</td>
                      <td>
                        <span class="status purple"></span>
                        review
                      </td>
                    </tr>
                    <tr>
                      <td>Rajesh</td>
                      <td>CT-Scan/radiology</td>
                      <td>
                        <span class="status pink"></span>
                        Progress
                      </td>
                    </tr>
                    <tr>
                      <td>Prashant</td>
                      <td>MRI/radiology</td>
                      <td>
                        <span class="status orange"></span>
                        Pending
                      </td>
                    </tr>
                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>

        <div class="customers">
          <div class="card">
            <div class="card-header">
              <h3>New customers</h3>

              <button>See all <span class="las la-arrow-right">
                </span></button>
            </div>

            <div class="card-body">
              <div class="customer">
                <div class="info">
                  <img src="/jplg.png" width="40px" height="40px" alt="">
                  <div>
                    <h4>Raju</h4>
                    <small>Mathura</small>
                  </div>
                </div>
                <div class="contact">
                  <span class="las la-user-circle"></span>
                  <span class="las la-comment"></span>
                  <span class="las la-phone"></span>
                </div>
              </div>
              <div class="customer">
                <div class="info">
                  <img src="/jplg.png" width="40px" height="40px" alt="">
                  <div>
                    <h4>Shyam</h4>
                    <small>Kosi Kalan</small>
                  </div>
                </div>
                <div class="contact">
                  <span class="las la-user-circle"></span>
                  <span class="las la-comment"></span>
                  <span class="las la-phone"></span>
                </div>
              </div>
              <div class="customer">
                <div class="info">
                  <img src="/jplg.png" width="40px" height="40px" alt="">
                  <div>
                    <h4>Rajesh</h4>
                    <small>Faridabad</small>
                  </div>
                </div>
                <div class="contact">
                  <span class="las la-user-circle"></span>
                  <span class="las la-comment"></span>
                  <span class="las la-phone"></span>
                </div>
              </div>
              <div class="customer">
                <div class="info">
                  <img src="/jplg.png" width="40px" height="40px" alt="">
                  <div>
                    <h4>Mukesh</h4>
                    <small>Hodal</small>
                  </div>
                </div>
                <div class="contact">
                  <span class="las la-user-circle"></span>
                  <span class="las la-comment"></span>
                  <span class="las la-phone"></span>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
  </div>
  </main>
  <!-- Main Content Ending  -->

</body>

</html>