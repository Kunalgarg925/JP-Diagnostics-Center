<?php
session_start();
if (!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] != true) {
    $url = '/Admin_partials/_Login_credentails/login.php';
    header("location :" . $url);
    exit();
}

?>
<!DOCTYPE html>
<html lang="en" style="width:100%">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width,initial-scale=1,maximum-scale=1">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Favicons -->
    <link href="/JPLOGO.jpg" rel="icon">
    <title>JP DIAGNOSTICS | ADMIN</title>
    <!-- Line awesome -->
    <link rel="stylesheet" href="https://maxst.icons8.com/vue-static/landings/line-awesome/line-awesome/1.3.0/css/line-awesome.min.css">
    <link href="/Admin_partials/_styleAdmin.css" rel="stylesheet">

    <!-- Bootstrap CSS -->
    <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous"> -->
    <link rel="stylesheet" type="text/css" href="/assets/DataTables/datatables.css">
    <link rel="stylesheet" href="//cdn.datatables.net/1.10.20/css/jquery.dataTables.min.css">

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
                    <a href="/Admin_partials/_welcome_admin.php"><span class="las la-igloo"></span><span>Dashboard</span></a>
                   
                </li>
                <li>
                    <a href="/Admin_partials/Admin_assets/_Appointment.php" ><span class="las la-clipboard-list "></span><span>Appointments</span></a>
                </li>
                <li>
                    <a href="/Admin_partials/Admin_assets/_Contact.php"><span class="las la-igloo"></span><span>Contact_us</span></a>
                </li>
                <li>
                    <a href="/Admin_partials/Admin_assets/_subscribe.php" class="active"><span class="las la-igloo"></span><span>Subscriber</span></a>
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
            <div id="myTable_filter" class="search-wrapper dataTables_figure">
                <span class="las la-search"></span>
                <input type="search" class placeholder aria-controls="myTable" />
                <!-- <input type="search" placeholder="search here" /> -->
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

        <!-- Main section starting -->
        <main>
        <div class="appointment-container">
                <?php
                $server = "localhost:3306";
                $username = "root";
                $password = "";
                $database = "subscribe";

                $conn = mysqli_connect($server, $username, $password, $database);
                if (!$conn) {
                    die("Error" . mysqli_connect_error());
                }
                ?>
                <div class="container">
                    <table id="myTable" class="table">
                        <thead>
                            <tr>
                                <th scope="col"> S.No. </th>
                                <th scope="col"> Email-ID </th>
                                <th scope="col"> Issue date </th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $sql = "SELECT * FROM `subsciber_details`";
                            $result = mysqli_query($conn, $sql);
                            $num = mysqli_num_rows($result);
                            $no = 0;
                            while ($row = mysqli_fetch_assoc($result)) {
                                $no = $no + 1;
                                echo "<tr>
                                <th scope='row'>" . $row['Subscriber_Serial'] . "</th>
                                        <td>" . $row['Subscriber_Email'] . "</td>
                                        <td>" . $row['Subscriber_Date'] . "</td>
                                    </tr>";
                            }
                            ?>
                        </tbody>
                    </table>
                </div>
            </div>

        </main>
        <!-- Main Content Ending  -->
        <script type="text/javascript" charset="utf8" src="/assets/DataTables/datatables.js"></script>
        <!-- <script src="https://code.jquery.com/jquery-3.5.1.js" integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc=" crossorigin="anonymous"></script> -->
        <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
        <script src="//cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js"></script>
        <script>
            $(document).ready(function() {
                $('#myTable').DataTable();
            });
        </script>
</body>

</html>