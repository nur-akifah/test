<?php
$serverName = "YY300596\SQLEXPRESS";
$connectionInfo = array("Database" => "Database_GL6");
$conn = sqlsrv_connect($serverName, $connectionInfo);

if (!$conn) {
    echo "Connection could not be established.<br />";
    die(print_r(sqlsrv_errors(), true));
}

//ambil data  dari tabel GL6
$result = sqlsrv_query($conn, "SELECT * FROM dbo.TB_GL6");
if (!$result) {
    echo sqlsrv_errors($conn);
}
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Guard Line 5</title>
    <link href="./Images/aja.png" rel="icon" sizes="32x32">
    <link href="./css/ruang-admin.css" rel="stylesheet">
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <script type="text/javascript" src="js/jquery-3.5.1.min.js"></script>
    <link href="./vendor/bootstrap/css/bootstrap.css" rel="stylesheet" type="text/css">
    <link href="./vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css">

</head>

<body id="page-top">
    <!-- Start Page Loading -->
    <div id="loader-wrapper">
        <div id="loader"></div>
        <div class="loader-section section-left"></div>
        <div class="loader-section section-right"></div>
    </div>
    <!-- End Page Loading -->
    <div id="wrapper" class="">

        <!-- Sidebar -->
        <ul class="navbar-nav sidebar sidebar-light accordion" id="accordionSidebar">

            <a class="sidebar-brand d-flex align-items-center justify-content-center " href="index.php">
                <div class="sidebar-brand-icon ">
                    <img src="../GL6-UI-Database/Images/PhilipsLogo.png">
                </div>
            </a>

            <hr class="sidebar-divider my-0">

            <li class="nav-item active">
                <a class="nav-link">
                    <i class="fas fa-fw fa-house"></i>
                    <span> Production </span>
                </a>
            </li>

            <hr class="sidebar-divider">

            <div class="sidebar-heading">
                GL Database System
            </div>

            <li class="nav-item">
                <a class="nav-link" href="batch.php">
                    <i class="fa-solid fa-folder-open"></i>
                    <span>Batch</span>
                </a>
            </li>

            <li class="nav-item">
                <a class="nav-link" href="oee-trend.php">
                    <i class="fa-solid fa-square-poll-vertical"></i>
                    <span>OEE Trend</span>
                </a>
            </li>

            <li class="nav-item">
                <a class="nav-link" href="">
                    <i class="fa-solid fa-arrow-trend-down"></i>
                    <span>Pareto Report</span>
                </a>
            </li>

            <li class="nav-item">
                <a class="nav-link" href="part-data.php">
                    <i class="fa-solid fa-circle-info"></i>
                    <span>Process Data</span>
                </a>
            </li>

            <!-- <li class="nav-item">
                <a class="nav-link" href="FOR.php">
                    <i class="fa-regular fa-circle-xmark"></i>
                    <span>FOR</span>
                </a>
            </li> -->

            <li class="nav-item">
                <a class="nav-link" href="breakdowns.php">
                    <i class="fa fa-list-ul"></i>
                    <span>Breakdowns</span>
                </a>
            </li>

            <li class="nav-item">
                <a class="nav-link" href="raw_measurements.php">
                    <i class="fa-solid fa-chart-line"></i>
                    <span>Raw Measure</span>
                </a>
            </li>

            <li class="nav-item"> <!--Sub Menu Hide - Show -->
                <!-- <div class="parent-menu"> -->
                <a class="nav-link" href="product-ident.php">
                    <i class="fa-solid fa-magnifying-glass"></i>
                    <span>Product Identification</span>
                </a>
                <!-- <ul class="submenu-container hidden">
					<li><a href="#">RA100</a></li>
					<li><a href="#">RA101</a></li>
					<li><a href="#">RA102</a></li>
					<li><a href="#">RA103</a></li>
					<li><a href="#">RA104</a></li>
					<li><a href="#">RA105</a></li>
					<li><a href="#">RA106</a></li>
					<li><a href="#">RA108</a></li>
				</ul> -->
            </li>

            <li class="nav-item">
                <a class="nav-link" href="search.php">
                    <i class="fa-solid fa-magnifying-glass"></i>
                    <span>Search</span>
                </a>
            </li>

            <hr class="sidebar-divider">

        </ul>

        <!-- Sidebar -->
        <div id="content-wrapper" class="d-flex flex-column ">
            <div id="content">
                <!-- TopBar -->
                <nav class="navbar navbar-expand navbar-light bg-dark topbar mb-4 sticky-navbar ">

                    <button id="sidebarToggleTop" class="btn btn-link rounded-circle mr-3">
                        <i class="fa fa-bars"></i>
                    </button>

                    <h1 class="h3 mb-0  text-light">
                        <div class="header_time" id="timeshow"> </div>
                    </h1>
                    <ul class="navbar-nav ml-auto">

                        <div class="topbar-divider d-none d-sm-block"></div>
                        <li class="nav-item dropdown no-arrow">
                            <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <img class="img-profile rounded-circle" src="images/boy.png" style="max-width: 60px">
                                <span class="ml-3 d-none d-lg-inline text-white large">Jihan Nur Akifah</span>
                            </a>
                            <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="javascript:void(0);" data-toggle="modal" data-target="#logoutModal">
                                    <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Logout
                                </a>
                            </div>
                        </li>
                    </ul>
                </nav>
                <!-- Topbar -->

                <!-- Container Fluid-->
                <div class="container-fluid position-sticky" id="container-wrapper">
                    <div class="d-sm-flex align-items-center justify-content-between mb-4">
                        <h1 class="h3 mb-0 text-gray-800"></h1>
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="#">Equipment Information System</a></li>
                            <li class="breadcrumb-item">Guard Line 5</li>
                        </ol>
                    </div>

                    <div class="row">
                        <div class="col-lg-12 mb-4">
                            <!-- Simple Tables -->
                            <div class="card">
                                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                                    <br>
                                    <h5 class="m-0 font-weight-bold text-primary">Guard Line 5</h5><br><br>
                                </div>
                                <br>
                                <!-- === Fitur === -->

                                <div class="container text-center">
                                    <div class="row row-cols-auto">
                                        <div class="col">
                                            <div class="btn-group me-2" role="group" aria-label="First group">
                                                <button type="button" class="btn btn-secondary">Current Hour</button>
                                            </div>
                                        </div>
                                        <div class="col">
                                            <div class="btn-group me-2" role="group" aria-label="First group">
                                                <button type="button" class="btn btn-secondary">Current Shift</button>
                                            </div>
                                        </div>
                                        <div class="col">
                                            <div class="input-group">
                                                <input type="datetime-local" class="form-control" placeholder="" aria-label="Input group example" aria-describedby="btnGroupAddon">
                                            </div>
                                        </div>
                                        <div class="col">
                                            <div class="input-group">
                                                <input type="datetime-local" class="form-control" placeholder="Input group example" aria-label="Input group example" aria-describedby="btnGroupAddon">
                                            </div>
                                        </div>
                                        <div class="col">
                                            <select class="form-control" aria-label="Default select example">
                                                <option selected="">Select Cell</option>
                                                <option value="1">RA90</option>
                                                <option value="2">RA91</option>
                                                <option value="3">RA92</option>
                                                <option value="3">RA93</option>
                                                <option value="3">RA94</option>
                                                <option value="3">RA95</option>
                                                <option value="3">RA96</option>
                                                <option value="3">RA98</option>
                                            </select>

                                            <!-- <br>
                                                <center><button class="btn btn-primary" name="filter">Submit</button></center> -->
                                            </form>
                                        </div>


                                        <br>
                                        <form id="formValidate" method="post" action="" novalidate="novalidate">
                                            <!-- <input type="text" class="form-control col-2 border-dark font-weight-bold" name="po" id="po" style="text-align-last:center;" placeholder="DMC product" required> -->
                                            <center><button class="btn btn-primary" name="filter">Search</button></center>
                                        </form>
                                    </div>
                                    <br>
                                    <center>
                                        <table class="table align-items-center table-flush table-hover table-striped">
                                            <thead class="thead-dark">
                                                <tr align="center" id="table">
                                                    <th>Date_In</th>
                                                    <th>Date_Out</th>
                                                    <th>Carrier_ID</th>
                                                    <th>Carrier_Pos</th>
                                                    <th>DMC</th>
                                                    <th>Result</th>
                                                    <th>Fail_Code</th>
                                                </tr>
                                            </thead>
                                            <?php
                                            while ($table = sqlsrv_fetch_array($result)) {
                                            ?>
                                                <tbody>
                                                    <tr align="center" id="table">
                                                        <td><?= $table['Date_In'] ?></td>
                                                        <td><?= $table['Date_Out'] ?></td>
                                                        <td><?= $table['Carrier_ID'] ?></td>
                                                        <td> <?= $table['Carrier_Pos'] ?></td>
                                                        <th class="text-primary"><?= $table['DMC'] ?></th>
                                                        <td> <?= $table['Result'] ?></td>
                                                        <td> <?= $table['Fail_Code'] ?></td>
                                                    </tr>
                                                <?php
                                            }
                                                ?>
                                                </tbody>
                                        </table>
                                    </center>

                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Modal Logout -->
                    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabelLogout" aria-hidden="true">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabelLogout"></h5>

                                </div>
                                <div class="modal-body">
                                    <p>Are you sure you want to logout?</p>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-outline-primary" data-dismiss="modal">Cancel</button>
                                    <a href="routers/logout.php" class="btn btn-danger">Yes</a>
                                </div>
                            </div>
                        </div>

                    </div>
                    <!---Container Fluid-->
                </div>
                <!-- Footer
                <footer class="sticky-footer bg-dark">
                    <div class="container my-auto ">
                        <div class="copyright text-center my-auto text-white">
                            <span>Equipment Information System 23.02
                                - MG Equipment Team </span>
                        </div>
                    </div>
                </footer>
                 Footer -->
            </div>
        </div>

        <!-- Scroll to top -->
        <a class="scroll-to-top rounded" href="#page-top">
            <i class="fas fa-angle-up"></i>
        </a>

        <script>
            $(document).ready(function() {
                $('#line-dropdown').on('change', function() {
                    var line_id = this.value;
                    $.ajax({
                        url: "output-by-line.php",
                        type: "POST",
                        data: {
                            line_id: line_id
                        },
                        cache: false,
                        success: function(result) {
                            $("#output-dropdown").html(result);
                        }
                    });
                });
            });
        </script>

        <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
        <script src="vendor/jquery-easing/jquery.easing.min.js"></script>
        <script src="js/ruang-admin.min.js"></script>

        <script src="js/jquery-3.1.0.min.js" type="text/javascript"></script>


        <link rel="stylesheet" href="vendor/bootstrap/css/bootstrap-select.min.css">

        <script src="vendor/bootstrap/js/bootstrap-select.min.js" type="text/javascript"></script>


        <!-- jQuery Library -->
        <script type="text/javascript" src="js/plugins/jquery-1.11.2.min.js"></script>
        <!--plugins.js - Some Specific JS codes for Plugin Settings-->
        <script type="text/javascript" src="js/plugins.min.js"></script>

        <!-- --------------------------------------------------------- -->
        <script type='text/javascript'>
            //================== JS for Timer ==================//
            var myVar = setInterval(myTimer, 400);
            var number = 1;
            var reload_counter = 1;
            var days = ['Sun', 'Mon', 'Tue', 'Wed', 'Thu', 'Fri', 'Sat'];
            var months = ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec'];
            var datetime = new Date();
            initial_hour = datetime.getHours();
            var data_output = ' ';

            if (initial_hour < 10) {
                initial_hour = '0' + initial_hour
            };

            function myTimer() {
                var d = new Date();
                var day = days[d.getDay()];
                var date = d.getDate();
                var month = months[d.getMonth()];
                hour = d.getHours();
                minute = d.getMinutes();
                seconds = d.getSeconds();

                if (day < 10) {
                    day = '0' + day
                }
                if (hour < 10) {
                    hour = '0' + hour
                }
                if (minute < 10) {
                    minute = '0' + minute
                }
                if (seconds < 10) {
                    seconds = '0' + seconds
                }

                var timeshow = hour + ':' + minute + ':' + seconds;
                dateshow = day + ', ' + date + ' ' + ' ' + month + ' '; //+ d.getFullYear();

                document.getElementById('timeshow').innerHTML = dateshow + ' ' + timeshow + ' ' + data_output;

                number++;
                reload_counter++;

                if (hour != initial_hour) {
                    //location.reload();
                } else if (reload_counter > 100) {
                    //location.reload();
                }

            }
        </script>

        <script type="text/javascript">
            /* This method will delete a row */
            function deleteRow(ele) {
                var table = document.getElementById('materials');
                var rowCount = table.rows.length;
                if (rowCount <= 1) {
                    alert("There is no row available to delete!");
                    return;
                }
                if (ele) {
                    //delete specific row
                    ele.parentNode.parentNode.remove();
                } else {
                    //delete last row
                    table.deleteRow(rowCount - 1);
                }
            }
        </script>

</body>

</html>