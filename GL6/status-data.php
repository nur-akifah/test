<?php
include 'connection.php';
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Status Data</title>
    <link href="./Images/aja.png" rel="icon" sizes="32x32">
    <link href="./css/ruang-admin.min.css" rel="stylesheet">
    <link href="./vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <script type="text/javascript" src="js/jquery-3.5.1.min.js"></script>
    <link href="./vendor/bootstrap/css/bootstrap.css" rel="stylesheet" type="text/css">
    <link href="./vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css">
    <link href="./css/loader.css" rel="stylesheet" type="text/css">
    <link href="./FOR.css" rel="stylesheet" type="text/css">


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
                    <img src="Images\PhilipsLogo.png">
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
                <a class="nav-link" href="oee.php">
                    <i class="fa-solid fa-square-poll-vertical"></i>
                    <span>OEE Trend</span>
                </a>
            </li>

            <li class="nav-item">
                <a class="nav-link" href="for.php">
                    <i class="fa-regular fa-circle-xmark"></i>
                    <span>FOR</span>
                </a>
            </li>

            <li class="nav-item">
                <a class="nav-link" href="downtime.php">
                    <i class="fa-solid fa-arrow-trend-down"></i>
                    <span>Downtime</span>
                </a>
            </li>

            <li class="nav-item">
                <a class="nav-link" href="part-data.php">
                    <i class="fa-solid fa-circle-info"></i>
                    <span>Part Data</span>
                </a>
            </li>

            <li class="nav-item active">
                <a class="nav-link" href="status-data.php">
                    <i class="fa-solid fa-signal"></i>
                    <span>Status Data</span>
                </a>
            </li>

            <li class="nav-item">
                <a class="nav-link" href="batch.php">
                    <i class="fa-solid fa-folder-open"></i>
                    <span>Batch Data</span>
                </a>
            </li>

            <li class="nav-item">
                <a class="nav-link" href="search.php">
                    <i class="fa-solid fa-magnifying-glass"></i>
                    <span>Search</span>
                </a>
            </li>

            <li class="nav-item">
                <a class="nav-link" href="gl6.php">
                    <i class="fa-solid fa-magnifying-glass"></i>
                    <span>Back (optional)</span>
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
                <!-- End of Topbar -->

                <!-- Container Fluid-->
                <div class="container-fluid position-sticky" id="container-wrapper">
                    <div class="d-sm-flex align-items-center justify-content-between mb-4">
                        <h1 class="h3 mb-0 text-gray-800"></h1>
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="#">Equipment Information System</a></li>
                            <li class="breadcrumb-item">Status Data</li>
                        </ol>
                    </div>
                    <div class="row">
                        <div class="col-lg-12 mb-4">
                            <!-- Simple Tables -->
                            <div class="card">
                                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                                    <br>
                                    <h5 class="m-0 font-weight-bold text-primary">Status Data</h5><br><br>
                                </div>
                                <br>
                                <!-- FORM SORTING PART DATA USING DATE RANGE AND SELECT CELL -->
                                <form id="redirectForm" action="#" method="POST">
                                    <Center>
                                        <div class="container">
                                            <div class="input-group">
                                                <button type="button" class="btn btn-secondary">Current Hour</button>
                                                <button type="button" class="btn btn-secondary ml-3">Current Shift</button>
                                                <label for="from" class="label ml-3" style="text-align:center;">From :</label>
                                                <input name="tgl_mulai" type="datetime-local" id="tgl_mulai" class="form-control mx-sm-2" placeholder="Input group example" aria-label="Input group example" aria-describedby="btnGroupAddon" required>
                                                <label for="from" class="label ml-3">Till :</label>
                                                <input name="tgl_selesai" type="datetime-local" id="tgl_selesai" class="form-control mx-sm-2" placeholder="Input group example" aria-label="Input group example" aria-describedby="btnGroupAddon" required>
                                                <!-- === Dropdown Checkbox === -->
                                                <div class="container-dropdown ml-3" id="cell" onchange="updateButtonName()" required>
                                                    <select name="country" multiple class="form-control">
                                                        <option value="status_ra100">RA100</option>
                                                        <option value="status_ra101">RA101</option>
                                                        <option value="status_ra102">RA102</option>
                                                        <option value="status_ra103">RA103</option>
                                                        <option value="status_ra104">RA104</option>
                                                        <option value="status_ra105">RA105</option>
                                                        <option value="status_ra106">RA106</option>
                                                        <option value="status_ra108">RA108</option>
                                                    </select>
                                                </div>
                                                <input type="submit" value="Search" id="submitButton" class="btn btn-primary ml-3" name="">
                                            </div>
                                        </div>
                                    </Center>
                                    <br>
                                </form>
                            </div>


                            <!-- === Table dan Pareto === -->
                            <div class="tab">
                                <button class="tablinks" onclick="openCity(event, 'pareto')">Pareto</button>
                                <button class="tablinks" onclick="openCity(event, 'table-list')">Table</button>
                            </div>

                            <div id="pareto" class="tabcontent">
                                <!-- === TOMBOL CLOSE BELUM BISA BERFUNGSI === -->
                                <span onclick="this.parentElement.style.display='none'" class="topright">&times</span>
                                <!-- === RESPONSIVE CHART === -->
                                <!-- <div class="chart-container" style="position: relative; height:50%; max-width:100%;">
                                    <canvas id="myChart"></canvas>
                                </div> -->
                                <div id="chartContainer" style="height: 370px; width: 100%;"></div>
                            </div>

                            <div id="table-list" class="tabcontent">
                                <span onclick="this.parentElement.style.display='none'" class="topright">&times</span>
                                <div class="table-responsive">
                                    <?php
                                    include 'Status-Data-GL6/filter-status-data.php'
                                    ?>
                                </div>
                                <!-- <table class="table align-items-center table-flush table-hover table-striped">
                                    <thead class="thead-dark">
                                        <tr align="center" id="table">
                                            <th>Cell</th>
                                            <th>Timestamp</th>
                                            <th>Status Code</th>
                                            <th>Description</th>
                                            <th>Duration</th>
                                        </tr>
                                    </thead>
                                     ==== Letakkan Code PHP While Disini ===

                                    <tbody>
                                        <tr align="center" id="table">
                                            <th class="text-primary"></th>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                        </tr>
                                    </tbody>

                                </table> -->

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
					
					 Footer -->
                </div>
            </div>
            <footer class="bg-dark">
                <div class="container my-auto ">
                    <div class="copyright text-center my-auto text-white">
                        <span>Equipment Information System 23.02
                            - MG Equipment Team </span>
                    </div>
                </div>
            </footer>
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
    <!-- Graphic source -->
    <script src="https://cdn.canvasjs.com/canvasjs.min.js"></script>
    <!-- Graphic source -->
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

        //Calendar
        $(function() {
            $('#datepicker').datepicker();
        });
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

    <!-- === Menampilkan Tab di Reject dan Downtime === -->
    <script>
        function openCity(evt, cityName) {
            var i, tabcontent, tablinks;
            tabcontent = document.getElementsByClassName("tabcontent");
            for (i = 0; i < tabcontent.length; i++) {
                tabcontent[i].style.display = "none";
            }
            tablinks = document.getElementsByClassName("tablinks");
            for (i = 0; i < tablinks.length; i++) {
                tablinks[i].className = tablinks[i].className.replace(" active", "");
            }
            document.getElementById(cityName).style.display = "block";
            evt.currentTarget.className += " active";
        }

        // Get the element with id="defaultOpen" and click on it
        document.getElementById("defaultOpen").click();
    </script>

    <!-- === Dropdown Checbox sudah bisa === -->
    <script>
        const selectBtn = document.querySelector(".select-btn"),
            items = document.querySelectorAll(".item");

        selectBtn.addEventListener("click", () => {
            selectBtn.classList.toggle("open");
        });

        items.forEach(item => {
            item.addEventListener("click", () => {
                item.classList.toggle("checked");

                let checked = document.querySelectorAll(".checked"),
                    btnText = document.querySelector(".btn-text");

                if (checked && checked.length > 0) {
                    btnText.innerText = `${checked.length} Selected`;
                } else {
                    btnText.innerText = "Select Cell";
                }
            });
        })
    </script>

    <!-- === Grafik === -->
    <script>
        window.onload = function() {

            var chart = new CanvasJS.Chart("chartContainer", {
                animationEnabled: true,

                title: {
                    text: "Fortune 500 Companies by Country"
                },
                axisX: {
                    interval: 1
                },
                axisY2: {
                    interlacedColor: "rgba(1,77,101,.2)",
                    gridColor: "rgba(1,77,101,.1)",
                    title: "Number of Companies"
                },
                data: [{
                    type: "bar",
                    name: "companies",
                    axisYType: "secondary",
                    color: "#014D65",
                    dataPoints: [{
                            y: 3,
                            label: "Cell"
                        },
                        {
                            y: 7,
                            label: "Taiwan"
                        },
                        {
                            y: 5,
                            label: "Russia"
                        },
                        {
                            y: 9,
                            label: "Spain"
                        },
                        {
                            y: 7,
                            label: "Brazil"
                        },
                        {
                            y: 7,
                            label: "India"
                        },
                        {
                            y: 9,
                            label: "Italy"
                        },
                        {
                            y: 8,
                            label: "Australia"
                        },
                        {
                            y: 11,
                            label: "Canada"
                        },
                        {
                            y: 15,
                            label: "South Korea"
                        },
                        {
                            y: 12,
                            label: "Netherlands"
                        },
                        {
                            y: 15,
                            label: "Switzerland"
                        },
                        {
                            y: 25,
                            label: "Britain"
                        },
                        {
                            y: 28,
                            label: "Germany"
                        },
                        {
                            y: 29,
                            label: "France"
                        },
                        {
                            y: 52,
                            label: "Japan"
                        },
                        {
                            y: 103,
                            label: "China"
                        },
                        {
                            y: 134,
                            label: "US"
                        }
                    ]
                }]
            });
            chart.render();

        }
    </script>


    <!-- === Pindah Page === -->
    <script type="text/javascript">
        function redirectToSelectedPage() {
            var dropdown = document.getElementById("destination");
            var selectedValue = dropdown.ul.li[dropdown.selectedIndex].value;
            if (selectedValue) {
                window.location = selectedValue;
            }
        }
    </script>
    <!-- Direct to Selected Page -->
    <script>
        function updateButtonName() {
            // Dapatkan nilai yang dipilih dari dropdown
            var selectedValue = document.getElementById("cell").value;

            // Dapatkan tombol berdasarkan ID
            var button = document.getElementById("submitButton");

            // Ubah atribut name pada tombol berdasarkan nilai dropdown yang dipilih
            button.name = selectedValue;
        }
    </script>


    <!-- === Dropdown baru === -->
    <style>
        * {
            box-sizing: border-box;
        }

        h1 {
            color: #58636a;
            font-weight: 500;
            font-size: 24px;
        }

        .row {
            position: relative;
            margin: 5px 0 5px;
            text-align: left;
        }

        select {
            width: 20em;
            height: auto;
        }

        .multiselect-dropdown {
            display: inline-block;
            border-radius: 2px;
            border: 1px solid #ced4da;
            background-color: white;
            font-size: 14px;
            padding: 5px 5px 5px 5px;
            background-image: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 16 16'%3e%3cpath fill='none' stroke='%23343a40' stroke-linecap='round' stroke-linejoin='round' stroke-width='2' d='M2 5l6 6 6-6'/%3e%3c/svg%3e");
            background-repeat: no-repeat;
            background-position: right 0.75rem center;
            background-size: 16px 12px;
        }

        .multiselect-dropdown span.optext,
        .multiselect-dropdown span.placeholder {
            margin-right: 0.5em;
            margin-bottom: 10px;
            border-radius: 3px;
            display: inline-block;
            padding-top: 5px;
        }

        .multiselect-dropdown span.optext {
            background-color: #5a5c69;
            padding: 5px 5px 0 5px;
            color: #ffffff;
            height: 30px;
        }

        .multiselect-dropdown-list-wrapper {
            box-shadow: gray 0 3px 8px;
            z-index: 100;
            padding: 2px;
            border-radius: 4px;
            border: 1px solid #ced4da;
            position: absolute;
            display: none;
            margin: -1px;
            top: 0;
            left: 0;
            right: 0;
            background: #ffffff;
        }

        .multiselect-dropdown-list {
            padding: 2px;
            height: 15rem;
            overflow-y: auto;
            overflow-x: hidden;
        }

        .multiselect-dropdown-search {
            margin-bottom: 5px;
        }

        .multiselect-dropdown-list::-webkit-scrollbar {
            width: 6px;
        }

        .multiselect-dropdown-list::-webkit-scrollbar-thumb {
            background-color: #bec4ca;
            border-radius: 3px;
        }

        .multiselect-dropdown-list div {
            padding: 5px;
        }

        .multiselect-dropdown-list input {
            height: 1.15em;
            width: 1.15em;
            margin-right: 0.35em;
        }

        .multiselect-dropdown-list div:hover {
            background-color: #ced4da;
        }

        .multiselect-dropdown span.maxselected {
            width: 100%;
            height: 30px;
        }

        .multiselect-dropdown-all-selector {
            border-bottom: solid 1px #999;
        }

        .multiselect-dropdown span.placeholder {
            color: #ced4da;
        }
    </style>
    <script>
        var style = document.createElement("style");
        style.setAttribute("id", "multiselect_dropdown_styles");
        style.innerHTML = `.multiselect-dropdown-list div.checked {}`;
        document.head.appendChild(style);

        function MultiselectDropdown(options) {
            var config = {
                search: true,
                height: "15rem",
                placeholder: "select",
                txtSelected: "selected",
                txtAll: "All",
                ...options,
            };

            function newEl(tag, attrs) {
                var e = document.createElement(tag);
                if (attrs !== undefined)
                    Object.keys(attrs).forEach((k) => {
                        if (k === "class") {
                            Array.isArray(attrs[k]) ?
                                attrs[k].forEach((o) => (o !== "" ? e.classList.add(o) : 0)) :
                                attrs[k] !== "" ?
                                e.classList.add(attrs[k]) :
                                0;
                        } else if (k === "style") {
                            Object.keys(attrs[k]).forEach((ks) => {
                                e.style[ks] = attrs[k][ks];
                            });
                        } else if (k === "text") {
                            attrs[k] === "" ?
                                (e.innerHTML = "&nbsp;") :
                                (e.innerText = attrs[k]);
                        } else e[k] = attrs[k];
                    });
                return e;
            }

            document.querySelectorAll("select[multiple]").forEach((el, k) => {
                var div = newEl("div", {
                    class: "multiselect-dropdown",
                    style: {
                        width: config.style?.width ?? el.clientWidth + "px",
                        padding: config.style?.padding ?? "",
                    },
                });
                el.style.display = "none";
                el.parentNode.insertBefore(div, el.nextSibling);
                var listWrap = newEl("div", {
                    class: "multiselect-dropdown-list-wrapper",
                });
                var list = newEl("div", {
                    class: "multiselect-dropdown-list",
                    style: {
                        height: config.height
                    },
                });
                var search = newEl("input", {
                    class: ["multiselect-dropdown-search"].concat([
                        config.searchInput?.class ?? "form-control",
                    ]),
                    style: {
                        width: "100%",
                        height: "35px",
                        padding: "10px",
                        display: el.attributes["multiselect-search"]?.value === "true" ?
                            "block" : "none",
                    },
                    placeholder: "search",
                });
                listWrap.appendChild(search);
                div.appendChild(listWrap);
                listWrap.appendChild(list);

                el.loadOptions = () => {
                    list.innerHTML = "";

                    if (el.attributes["multiselect-select-all"]?.value == "true") {
                        var op = newEl("div", {
                            class: "multiselect-dropdown-all-selector",
                        });
                        var ic = newEl("input", {
                            type: "checkbox"
                        });
                        op.appendChild(ic);
                        op.appendChild(newEl("label", {
                            text: config.txtAll
                        }));

                        op.addEventListener("click", () => {
                            op.classList.toggle("checked");
                            op.querySelector("input").checked = !op.querySelector("input").checked;

                            var ch = op.querySelector("input").checked;
                            list.querySelectorAll("input").forEach((i) => (i.checked = ch));
                            Array.from(el.options).map((x) => (x.selected = ch));

                            el.dispatchEvent(new Event("change"));
                        });
                        ic.addEventListener("click", (ev) => {
                            ic.checked = !ic.checked;
                        });

                        list.appendChild(op);
                    }

                    Array.from(el.options).map((o) => {
                        var op = newEl("div", {
                            class: o.selected ? "checked" : "",
                            optEl: o,
                        });
                        var ic = newEl("input", {
                            type: "checkbox",
                            checked: o.selected,
                        });
                        op.appendChild(ic);
                        op.appendChild(newEl("label", {
                            text: o.text
                        }));

                        op.addEventListener("click", () => {
                            op.classList.toggle("checked");
                            op.querySelector("input").checked = !op.querySelector("input").checked;
                            op.optEl.selected = !!!op.optEl.selected;
                            el.dispatchEvent(new Event("change"));
                        });
                        ic.addEventListener("click", (ev) => {
                            ic.checked = !ic.checked;
                        });

                        list.appendChild(op);
                    });
                    div.listEl = listWrap;

                    div.refresh = () => {
                        div
                            .querySelectorAll("span.optext, span.placeholder")
                            .forEach((t) => div.removeChild(t));
                        var sels = Array.from(el.selectedOptions);
                        if (
                            sels.length >
                            (el.attributes["multiselect-max-items"]?.value ?? 5)
                        ) {
                            div.appendChild(
                                newEl("span", {
                                    class: ["optext", "maxselected"],
                                    text: sels.length + " " + config.txtSelected,
                                })
                            );
                        } else {
                            sels.map((x) => {
                                var c = newEl("span", {
                                    class: "optext",
                                    text: x.text
                                });
                                div.appendChild(c);
                            });
                        }
                        if (0 == el.selectedOptions.length)
                            div.appendChild(
                                newEl("span", {
                                    class: "placeholder",
                                    text: el.attributes["placeholder"]?.value ?? config.placeholder,
                                })
                            );
                    };
                    div.refresh();
                };
                el.loadOptions();

                search.addEventListener("input", () => {
                    list.querySelectorAll("div").forEach((d) => {
                        var txt = d.querySelector("label").innerText.toUpperCase();
                        d.style.display = txt.includes(search.value.toUpperCase()) ?
                            "block" :
                            "none";
                    });
                });

                div.addEventListener("click", () => {
                    div.listEl.style.display = "block";
                    search.focus();
                    search.select();
                });

                document.addEventListener("click", function(event) {
                    if (!div.contains(event.target)) {
                        listWrap.style.display = "none";
                        div.refresh();
                    }
                });
            });
        }

        window.addEventListener("load", () => {
            MultiselectDropdown(window.MultiselectDropdownOptions);
        });
    </script>

    <!-- Direct to Selected Page -->
    <script>
        function updateButtonName() {
            // Dapatkan nilai yang dipilih dari dropdown
            var selectedValue = document.getElementById("cell").value;

            // Dapatkan tombol berdasarkan ID
            var button = document.getElementById("submitButton");

            // Ubah atribut name pada tombol berdasarkan nilai dropdown yang dipilih
            button.name = selectedValue;
        }
    </script>
</body>

</html>