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
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <table class="table" border="1" cellpading="10" cellspacing="0">
        <thead>
            <tr>
                <th>Date_Out</th>
            </tr>
        </thead>
        <?php
        $result = sqlsrv_query($conn, "SELECT datetimeout FROM dbo.Table_4");
        while ($table = sqlsrv_fetch_array($result)) {
            $date = date('Y-M-d H:i:s', strtotime(($table['datetimout'])));
            echo "<tr>
        <td>
            " . $date . "
        </td>
        </tr>";
        }
        ?>
    </table>
</body>

</html>