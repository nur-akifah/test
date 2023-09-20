<?php
error_reporting(0);
//koneksi ke database
$serverName = "YY300596\SQLEXPRESS";
$connectionInfo = array("Database" => "Guard_Line_Database");
$conn = sqlsrv_connect($serverName, $connectionInfo);

if (!$conn) {
    echo "Connection could not be established.<br />";
    die(print_r(sqlsrv_errors(), true));
}

// Retrieve the date string from the database (change table and column names accordingly)
// $query = "SELECT datetimein FROM dbo.Table_1";
// $result = sqlsrv_query($conn, $query);
$result = sqlsrv_query($conn, "SELECT datetimein FROM dbo.Table_2");

if ($result === false) {
    die("Query failed: " . sqlsrv_errors());
}

$row = sqlsrv_fetch_array($result, SQLSRV_FETCH_ASSOC);
$dateString = $row['datetimeiout'];

// Convert the date string to a Unix timestamp
$timestamp = strtotime($dateString);

if ($timestamp === false) {
    die("Invalid date format");
}

// Convert the Unix timestamp to a SQL Server datetime format
$dateTime = date('Y-m-d H:i:s', $timestamp);

// Now, $dateTime contains the datetime in SQL Server format
echo $dateTime;

// Close the database connection
sqlsrv_close($conn);
