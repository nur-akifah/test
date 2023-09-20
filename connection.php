<?php
error_reporting(0);
//koneksi ke database
$serverName = "YY310001\GL_DATABASE";
$connectionInfo = array("Database" => "GL_Database");
$conn = sqlsrv_connect($serverName, $connectionInfo);

if ($conn) {
    echo "Connection established.<br />";
} else {
    echo "Connection could not be established.<br />";
    die(print_r(sqlsrv_errors(), true));
}

// //ambil data  dari tabel GL6
// $select = sqlsrv_query($conn, "SELECT * FROM dbo.Tb_PD_RA100");
// if (!$select) {
//     echo sqlsrv_errors($conn);
// }

?>

<!-- === PROGRAM PHP BELUM MUNCUL DI WEB, KONEKSI OK === -->

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h2>Process Data</h2>
    <form action="" method="POST">
        <div class="form-group">
            <label for="sel1">Select List</label>
            <select class="form-control" name="cell" id="">
                <option selected="">Select Cell</option>
                <!-- RA100 -->
                <?php
                include "connection.php";
                $query = sqlsrv_query($conn, "SELECT * FROM dbo.TB_PD_RA100");
                while ($data = sqlsrv_fetch_array($query)) {
                ?>
                <?php
                }
                ?>
                <!-- RA101 -->
                <?php
           
                $query = sqlsrv_query($conn, "SELECT * FROM dbo.TB_PD_RA101");
                while ($data = sqlsrv_fetch_array($query)) {
                ?>
                <?php
                }
                ?>
                <!-- RA101 -->
                <?php
             
                $query = sqlsrv_query($conn, "SELECT * FROM dbo.TB_PD_RA101");
                while ($data = sqlsrv_fetch_array($query)) {
                ?>
                <?php
                }
                ?>

               
            </select>
            <!-- <input type="text" name="query" placeholder="Cari Data"> -->
            <input type="button" name="hour" value="Current Hour">
            <input type="button" name="shift" value="Current Shift">
            <input name="tgl_mulai" type="datetime-local" id="from" class="form-control mx-sm-3" placeholder="Input group example" aria-label="Input group example" aria-describedby="btnGroupAddon">
            <input name="tgl_selesai" type="datetime-local" id="from" class="form-control mx-sm-3" placeholder="Input group example" aria-label="Input group example" aria-describedby="btnGroupAddon">
            <input type="submit" name="cari" value="Search">
        </div>

    </form>

    <table border="1" cellspacing="0">
        <tr style="font-weight:bold;">
            <th>Cell</th>
            <th>Timestamp</th>
            <th>Date Time In</th>
            <th>Date Time Out</th>
            <th>12NC</th>
            <th>Process Code</th>
            <th>Buffer Index</th>
            <th>Batch Reel</th>
            <th>Guard Counter</th>
        </tr>
        <?php
       while($data = sqlsrv_fetch_array($select)){
        ?>
            <tbody>
                <tr align="center" id="table">
                    <th class="text-primary"><?= $data['Cell']; ?></th>
                    <td><?= $data['Timestamp']; ?></td>
                    <td><?= $data['DateTimeIn']; ?></td>
                    <td><?= $data['DateTimeOut']; ?></td>
                    <td><?= $data['12NC']; ?></td>
                    <td><?= $data['ProcessCode']; ?></td>
                    <td><?= $data['BufferIndex']; ?></td>
                    <td><?= $data['BatchReel']; ?></td>
                    <td><?= $data['GuardCounter']; ?></td>
                </tr>
            </tbody>
            <!-- === Letakkan Kurung Tutup Kurawal PHP Disini === -->
        <?php
        }
        ?>
    </table>
</body>

</html>