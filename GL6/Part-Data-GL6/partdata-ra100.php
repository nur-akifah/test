<?php
if (isset($_POST['filter_ra100'])) {
    $tgl_mulai = new DateTime($_POST['tgl_mulai']);
    $tgl_selesai = new DateTime($_POST['tgl_selesai']);

    // Format objek DateTime ke dalam format "Y-m-d H:i:s"
    $start = $tgl_mulai->format("Y-m-d H:i:s");
    $end = $tgl_selesai->format("Y-m-d H:i:s");
?>
<?php
}
?>
<span class="font-weight-bold"> Start : </span><?php echo $start; ?>
<span class="font-weight-bold"> End : </span><?php echo $end; ?>
<table class="table align-items-center table-flush table-hover table-striped">
    <thead class="thead-dark">
        <tr align="center" id="table">
            <th>Cell</th>
            <th>Timestamp</th>
            <th>Date Time In</th>
            <th>Date Time Out</th>
            <th>12NC</th>
            <th>Process Code</th>
            <th>Buffer Index</th>
            <th>Guard Counter</th>
            <th>Batch Reel</th>
        </tr>
    </thead>
    <!-- ==== Letakkan Code PHP While Disini === -->
    <?php
    $query = sqlsrv_query($conn, "SELECT * FROM PartDataRA100 WHERE DateTimeOut >= '$start' AND DateTimeOut <= '$end' ");
    while ($row = sqlsrv_fetch_array($query)) {
    ?>
        <!-- Filter DateTime Only -->

        <tbody>
            <tr align="center" id="table">
                <th class="text-primary"><?php echo $row['Cell'] ?></th>
                <td><?php echo $row['TimeStamp']->format('Y-m-d H:i:s') ?></td>
                <td><?php echo $row['DateTimeIn']->format('Y-m-d H:i:s') ?></td>
                <td><?php echo $row['DateTimeOut']->format('Y-m-d H:i:s') ?></td>
                <td><?php echo $row['12NC'] ?></td>
                <td><?php echo $row['ProcessCode'] ?></td>
                <td><?php echo $row['BufferIndex'] ?></td>
                <td><?php echo $row['GuardCounter'] ?></td>
                <td><?php echo $row['Batch_Reel'] ?></td>
            </tr>
        </tbody>
        <!-- === Letakkan Kurung Tutup Kurawal PHP Disini === -->
    <?php } ?>
</table>
<?php
// }
?>

<!-- RA101 -->
<?php
if (isset($_POST['filter_ra101'])) {
    $tgl_mulai = new DateTime($_POST['tgl_mulai']);
    $tgl_selesai = new DateTime($_POST['tgl_selesai']);

    // Format objek DateTime ke dalam format "Y-m-d H:i:s"
    $start = $tgl_mulai->format("Y-m-d H:i:s");
    $end = $tgl_selesai->format("Y-m-d H:i:s");
?>
<?php
}
?>
<span class="font-weight-bold"> Start : </span><?php echo $start; ?>
<span class="font-weight-bold"> End : </span><?php echo $end; ?>
<table class="table align-items-center table-flush table-hover table-striped">
    <thead class="thead-dark">
        <tr align="center" id="table">
            <th>Cell</th>
            <th>Timestamp</th>
            <th>Date Time In</th>
            <th>Date Time Out</th>
            <th>Carrier1 No</th>
            <th>Carrier1 Pos</th>
            <th>12NC</th>
            <th>DMC</th>
            <th>Process Code</th>
            <th>Buffer Index</th>
            <th>Guard Counter</th>
            <th>Batch Reel</th>
            <th>Batch Plastic</th>
        </tr>
    </thead>
    <!-- ==== Letakkan Code PHP While Disini === -->
    <?php
    $query = sqlsrv_query($conn, "SELECT * FROM PartDataRA101 WHERE DateTimeOut >= '$start' AND DateTimeOut <= '$end' ");
    while ($row = sqlsrv_fetch_array($query)) {
    ?>
        <tbody>
            <tr align="center" id="table">
                <th class="text-primary"><?php echo $data['Cell'] ?></th>
                <td><?php echo $data['TimeStamp'] ?></td>
                <td><?php echo $data['DateTimeIn'] ?></td>
                <td><?php echo $data['DateTimeOut'] ?></td>
                <td><?php echo $data['Carrier1_No'] ?></td>
                <td><?php echo $data['Carrier1_Pos'] ?></td>
                <td><?php echo $data['12NC'] ?></td>
                <td><?php echo $data['DMC'] ?></td>
                <td><?php echo $data['ProcessCode'] ?></td>
                <td><?php echo $data['BufferIndex'] ?></td>
                <td><?php echo $data['GuardCounter'] ?></td>
                <td><?php echo $data['Batch_Reel'] ?></td>
                <td><?php echo $data['Batch_Plastic'] ?></td>
            </tr>
        </tbody>
        <!-- === Letakkan Kurung Tutup Kurawal PHP Disini === -->
    <?php } ?>
</table>
<?php
// }
?>

<!-- RA102 -->
<?php
if (isset($_POST['filter_ra102'])) {
    $tgl_mulai = new DateTime($_POST['tgl_mulai']);
    $tgl_selesai = new DateTime($_POST['tgl_selesai']);

    // Format objek DateTime ke dalam format "Y-m-d H:i:s"
    $start = $tgl_mulai->format("Y-m-d H:i:s");
    $end = $tgl_selesai->format("Y-m-d H:i:s");
?>
<?php
}
?>
<span class="font-weight-bold"> Start : </span><?php echo $start; ?>
<span class="font-weight-bold"> End : </span><?php echo $end; ?>
<table class="table align-items-center table-flush table-hover table-striped">
    <thead class="thead-dark">
        <tr align="center" id="table">
            <th>Cell</th>
            <th>Timestamp</th>
            <th>Date Time In</th>
            <th>Date Time Out</th>
            <th>Carrier1 No</th>
            <th>Carrier1 Pos</th>
            <th>Carrier2 No</th>
            <th>Carrier2 Pos</th>
            <th>12NC</th>
            <th>DMC</th>
            <th>Process Code</th>
            <th>Buffer Index</th>
            <th>Buffer Type</th>
            <th>Vision Result</th>
            <th>Open Anchor</th>
            <th>Over Flow</th>
            <th>Total Mean Slot Width</th>
            <th>Mean Slot Distance Top</th>
            <th>Mean Slot Distance Bottom</th>
            <th>Total Deviation Slot Width</th>
            <th>Number Blocked Top Slot</th>
            <th>Number Blocked Bottom Slot</th>
        </tr>
    </thead>
    <!-- ==== Letakkan Code PHP While Disini === -->
    <?php
    $query = sqlsrv_query($conn, "SELECT * FROM PartDataRA102 WHERE DateTimeOut >= '$start' AND DateTimeOut <= '$end' ");
    while ($row = sqlsrv_fetch_array($query)) {
    ?>
        <tbody>
            <tr align="center" id="table">
                <th class="text-primary"><?php echo $data['Cell']; ?></th>
                <td><?php echo $data['TimeStamp']; ?></td>
                <td><?php echo $data['DateTimeIn']; ?></td>
                <td><?php echo $data['DateTimeOut']; ?></td>
                <td><?php echo $data['Carrier1_No']; ?></td>
                <td><?php echo $data['Carrier1_Pos']; ?></td>
                <td><?php echo $data['Carrier2_No']; ?></td>
                <td><?php echo $data['Carrier2_Pos']; ?></td>
                <td><?php echo $data['_12NC']; ?></td>
                <td><?php echo $data['DMC']; ?></td>
                <td><?php echo $data['ProcessCode']; ?></td>
                <td><?php echo $data['BufferIndex']; ?></td>
                <td><?php echo $data['BufferType']; ?></td>
                <td><?php echo $data['VisionResult']; ?></td>
                <td><?php echo $data['OpenAnchor']; ?></td>
                <td><?php echo $data['OverFlow']; ?></td>
                <td><?php echo $data['TotalMeanSlotWidth']; ?></td>
                <td><?php echo $data['MeanSlotDistanceTop']; ?></td>
                <td><?php echo $data['MeanSlotDistanceBottom']; ?></td>
                <td><?php echo $data['TotalDeviationSlotWidth']; ?></td>
                <td><?php echo $data['NumberBlockedTopSlot']; ?></td>
                <td><?php echo $data['NumberBlockedBottomSlot']; ?></td>
            </tr>
        </tbody>
        <!-- === Letakkan Kurung Tutup Kurawal PHP Disini === -->
    <?php } ?>
</table>

<!-- RA103 -->
<?php
if (isset($_POST['filter_ra101'])) {
    $tgl_mulai = new DateTime($_POST['tgl_mulai']);
    $tgl_selesai = new DateTime($_POST['tgl_selesai']);

    // Format objek DateTime ke dalam format "Y-m-d H:i:s"
    $start = $tgl_mulai->format("Y-m-d H:i:s");
    $end = $tgl_selesai->format("Y-m-d H:i:s");
?>
<?php
}
?>
<span class="font-weight-bold"> Start : </span><?php echo $start; ?>
<span class="font-weight-bold"> End : </span><?php echo $end; ?>
<table class="table align-items-center table-flush table-hover table-striped">
    <thead class="thead-dark">
        <tr align="center" id="table">
            <th>Cell</th>
            <th>Timestamp</th>
            <th>Date Time In</th>
            <th>Date Time Out</th>
            <th>Carrier2 No</th>
            <th>Carrier2 Pos</th>
            <th>12NC</th>
            <th>DMC</th>
            <th>Process Code</th>
            <th>Buffer Index</th>
            <th>EndDist_LL</th>
            <th>EndDist</th>
            <th>EndDist_UL</th>
            <th>EndForce_LL</th>
            <th>EndForce</th>
            <th>EndForce_UL</th>
            <th>MaxForce_LL</th>
            <th>MaxForce</th>
            <th>MaxForce_UL</th>
            <th>MaxForceDist_LL</th>
            <th>MaxForceDist</th>
            <th>MaxForceDist_UL</th>
            <th>Batch Cutter</th>
            <th>Batch Island</th>
            <th>Batch DB</th>
        </tr>
    </thead>
    <!-- ==== Letakkan Code PHP While Disini === -->
    <?php
    $query = sqlsrv_query($conn, "SELECT * FROM PartDataRA101 WHERE DateTimeOut >= '$start' AND DateTimeOut <= '$end' ");
    while ($row = sqlsrv_fetch_array($query)) {
    ?>
        <tbody>
            <tr align="center" id="table">
                <th class="text-primary"><?php echo $data['Cell'] ?></th>
                <td><?php echo $data['TimeStamp'] ?></td>
                <td><?php echo $data['DateTimeIn'] ?></td>
                <td><?php echo $data['DateTimeOut'] ?></td>
                <td><?php echo $data['Carrier2_No'] ?></td>
                <td><?php echo $data['Carrier2_Pos'] ?></td>
                <td><?php echo $data['12NC'] ?></td>
                <td><?php echo $data['DMC'] ?></td>
                <td><?php echo $data['ProcessCode'] ?></td>
                <td><?php echo $data['BufferIndex'] ?></td>
                <td><?php echo $data['EndDist_LL'] ?></td>
                <td><?php echo $data['EndDist'] ?></td>
                <td><?php echo $data['EndDist_UL'] ?></td>
                <td><?php echo $data['EndForce_LL'] ?></td>
                <td><?php echo $data['EndForce'] ?></td>
                <td><?php echo $data['EndForce_UL'] ?></td>
                <td><?php echo $data['MaxForce_LL'] ?></td>
                <td><?php echo $data['MaxForce'] ?></td>
                <td><?php echo $data['MaxForce_UL'] ?></td>
                <td><?php echo $data['MaxForceDist_LL'] ?></td>
                <td><?php echo $data['MaxForceDist'] ?></td>
                <td><?php echo $data['MaxForceDist_UL'] ?></td>
                <td><?php echo $data['Batch_Cutter'] ?></td>
                <td><?php echo $data['Batch_Island'] ?></td>
                <td><?php echo $data['Batch_DB'] ?></td>
            </tr>
        </tbody>
        <!-- === Letakkan Kurung Tutup Kurawal PHP Disini === -->
    <?php } ?>
</table>

<!-- RA104 -->
<?php
if (isset($_POST['filter_ra101'])) {
    $tgl_mulai = new DateTime($_POST['tgl_mulai']);
    $tgl_selesai = new DateTime($_POST['tgl_selesai']);

    // Format objek DateTime ke dalam format "Y-m-d H:i:s"
    $start = $tgl_mulai->format("Y-m-d H:i:s");
    $end = $tgl_selesai->format("Y-m-d H:i:s");
?>
<?php
}
?>
<span class="font-weight-bold"> Start : </span><?php echo $start; ?>
<span class="font-weight-bold"> End : </span><?php echo $end; ?>
<table class="table align-items-center table-flush table-hover table-striped">
    <thead class="thead-dark">
        <tr align="center" id="table">
            <th>Cell</th>
            <th>Timestamp</th>
            <th>Date Time In</th>
            <th>Date Time Out</th>
            <th>Carrier1 No</th>
            <th>Carrier1 Pos</th>
            <th>Carrier2 No</th>
            <th>Carrier2 Pos</th>
            <th>Carrier3 No</th>
            <th>Carrier3 Pos</th>
            <th>12NC</th>
            <th>DMC</th>
            <th>MVS1RL</th>
            <th>MVS1RR</th>
            <th>MVS1TL</th>
            <th>MVS1TR</th>
            <th>MVS3L</th>
            <th>MVS3R</th>
            <th>MVS71SL</th>
            <th>MVS71SR</th>
            <th>MVS71FL</th>
            <th>MVS71FR</th>
            <th>MVS3ECLUL</th>
            <th>MVS3ECLDL</th>
            <th>MVS3ECLUR</th>
            <th>MVS3ECLDR</th>
            <th>MVS3CUL</th>
            <th>MVS3CUR</th>
            <th>MVS3GUL</th>
            <th>MVS3GUR</th>
            <th>MVS6PTL</th>
            <th>MVS6PTR</th>
            <th>OUT</th>
        </tr>
    </thead>
    <!-- ==== Letakkan Code PHP While Disini === -->
    <?php
    $query = sqlsrv_query($conn, "SELECT * FROM PartDataRA101 WHERE DateTimeOut >= '$start' AND DateTimeOut <= '$end' ");
    while ($row = sqlsrv_fetch_array($query)) {
    ?>
        <tbody>
            <tr align="center" id="table">
                <th class="text-primary"><?php echo $data['Cell'] ?></th>
                <td><?php echo $data['TimeStamp'] ?></td>
                <td><?php echo $data['DateTimeIn'] ?></td>
                <td><?php echo $data['DateTimeOut'] ?></td>
                <td><?php echo $data['Carrier2_No'] ?></td>
                <td><?php echo $data['Carrier2_Pos'] ?></td>
                <td><?php echo $data['Carrier3_No'] ?></td>
                <td><?php echo $data['Carrier3_Pos'] ?></td>
                <td><?php echo $data['Holder_No'] ?></td>
                <td><?php echo $data['12NC'] ?></td>
                <td><?php echo $data['DMC'] ?></td>
                <td><?php echo $data['ProcessCode'] ?></td>
                <td><?php echo $data['BufferIndex'] ?></td>
                <td><?php echo $data['mvs1rl'] ?></td>
                <td><?php echo $data['mvs1rr'] ?></td>
                <td><?php echo $data['mvs1tl'] ?></td>
                <td><?php echo $data['mvs1tr'] ?></td>
                <td><?php echo $data['mvs3l'] ?></td>
                <td><?php echo $data['mvs3r'] ?></td>
                <td><?php echo $data['mvs71sl'] ?></td>
                <td><?php echo $data['mvs71sr'] ?></td>
                <td><?php echo $data['mvs71fl'] ?></td>
                <td><?php echo $data['mvs71fr'] ?></td>
                <td><?php echo $data['mvs3eclul'] ?></td>
                <td><?php echo $data['mvs3ecldl'] ?></td>
                <td><?php echo $data['mvs3eclur'] ?></td>
                <td><?php echo $data['mvs3ecldr'] ?></td>
                <td><?php echo $data['mvs3cul'] ?></td>
                <td><?php echo $data['mvs3cur'] ?></td>
                <td><?php echo $data['mvs3gul'] ?></td>
                <td><?php echo $data['mvs3gur'] ?></td>
                <td><?php echo $data['mvs6ptl'] ?></td>
                <td><?php echo $data['mvs6ptr'] ?></td>
                <td><?php echo $data['out'] ?></td>
            </tr>
        </tbody>
        <!-- === Letakkan Kurung Tutup Kurawal PHP Disini === -->
    <?php } ?>
</table>

<!-- RA105 -->
<?php
if (isset($_POST['filter_ra101'])) {
    $tgl_mulai = new DateTime($_POST['tgl_mulai']);
    $tgl_selesai = new DateTime($_POST['tgl_selesai']);

    // Format objek DateTime ke dalam format "Y-m-d H:i:s"
    $start = $tgl_mulai->format("Y-m-d H:i:s");
    $end = $tgl_selesai->format("Y-m-d H:i:s");
?>
<?php
}
?>
<span class="font-weight-bold"> Start : </span><?php echo $start; ?>
<span class="font-weight-bold"> End : </span><?php echo $end; ?>
<table class="table align-items-center table-flush table-hover table-striped">
    <thead class="thead-dark">
        <tr align="center" id="table">
            <th>Cell</th>
            <th>Timestamp</th>
            <th>Date Time In</th>
            <th>Date Time Out</th>
            <th>Carrier 3 No</th>
            <th>Carrier 3 Pos</th>
            <th>12NC</th>
            <th>DMC</th>
            <th>Process Code</th>
            <th>Buffer Index</th>
            <th>Vision 1 Score</th>
            <th>Vision 2 Score</th>
            <th>Vision 3 Score</th>
            <th>Vision 4 Score</th>
            <th>Act Temp 1</th>
            <th>Act Temp 2</th>
            <th>Act Humidity</th>
            <th>Batch Ink 1</th>
            <th>Batch Ink 2</th>
            <th>Batch Hardener</th>
            <th>Batch Thinner</th>
        </tr>
    </thead>
    <!-- ==== Letakkan Code PHP While Disini === -->
    <?php
    $query = sqlsrv_query($conn, "SELECT * FROM PartDataRA101 WHERE DateTimeOut >= '$start' AND DateTimeOut <= '$end' ");
    while ($row = sqlsrv_fetch_array($query)) {
    ?>
        <tbody>
            <tr align="center" id="table">
                <th class="text-primary"><?php echo $data['Cell'] ?></th>
                <td><?php echo $data['TimeStamp'] ?></td>
                <td><?php echo $data['DateTimeIn'] ?></td>
                <td><?php echo $data['Carrier3_No'] ?></td>
                <td><?php echo $data['Carrier3_Pos'] ?></td>
                <td><?php echo $data['12NC'] ?></td>
                <td><?php echo $data['DMC'] ?></td>
                <td><?php echo $data['ProcessCode'] ?></td>
                <td><?php echo $data['BufferIndex'] ?></td>
                <td><?php echo $data['Vision1_Score'] ?></td>
                <td><?php echo $data['Vision2_Score'] ?></td>
                <td><?php echo $data['Vision3_Score'] ?></td>
                <td><?php echo $data['Vision4_Score'] ?></td>
                <td><?php echo $data['ActTemp1'] ?></td>
                <td><?php echo $data['ActTemp2'] ?></td>
                <td><?php echo $data['ActHumidity'] ?></td>
                <td><?php echo $data['Batch_Ink1'] ?></td>
                <td><?php echo $data['Batch_Ink2'] ?></td>
                <td><?php echo $data['Batch_Hardener'] ?></td>
                <td><?php echo $data['Batch_Thinner'] ?></td>
            </tr>
        </tbody>
        <!-- === Letakkan Kurung Tutup Kurawal PHP Disini === -->
    <?php } ?>
</table>

<!-- RA106 -->
<?php
if (isset($_POST['filter_ra101'])) {
    $tgl_mulai = new DateTime($_POST['tgl_mulai']);
    $tgl_selesai = new DateTime($_POST['tgl_selesai']);

    // Format objek DateTime ke dalam format "Y-m-d H:i:s"
    $start = $tgl_mulai->format("Y-m-d H:i:s");
    $end = $tgl_selesai->format("Y-m-d H:i:s");
?>
<?php
}
?>
<span class="font-weight-bold"> Start : </span><?php echo $start; ?>
<span class="font-weight-bold"> End : </span><?php echo $end; ?>
<table class="table align-items-center table-flush table-hover table-striped">
    <thead class="thead-dark">
        <tr align="center" id="table">
            <th>Cell</th>
            <th>Timestamp</th>
            <th>Date Time In</th>
            <th>Date Time Out</th>
            <th>Carrier 3 No</th>
            <th>Carrier 3 Pos</th>
            <th>12NC</th>
            <th>DMC</th>
            <th>Process Code</th>
            <th>Buffer Index</th>
            <th>Vision 5 Score</th>
            <th>Vision 6 Score</th>
            <th>Act Temp 1</th>
            <th>Act Temp 2</th>
            <th>Act Humidity</th>
            <th>Batch Ink 3</th>
            <th>Batch Ink 4</th>
            <th>Batch Thinner</th>
        </tr>
    </thead>
    <!-- ==== Letakkan Code PHP While Disini === -->
    <?php
    $query = sqlsrv_query($conn, "SELECT * FROM PartDataRA101 WHERE DateTimeOut >= '$start' AND DateTimeOut <= '$end' ");
    while ($row = sqlsrv_fetch_array($query)) {
    ?>
        <tbody>
            <tr align="center" id="table">
                <th class="text-primary"><?php echo $data['Cell'] ?></th>
                <td><?php echo $data['TimeStamp'] ?></td>
                <td><?php echo $data['DateTimeIn'] ?></td>
                <td><?php echo $data['DateTimeOut'] ?></td>
                <td><?php echo $data['Carrier3_No'] ?></td>
                <td><?php echo $data['Carrier3_Pos'] ?></td>
                <td><?php echo $data['_12NC'] ?></td>
                <td><?php echo $data['DMC'] ?></td>
                <td><?php echo $data['ProcessCode'] ?></td>
                <td><?php echo $data['BufferIndex'] ?></td>
                <td><?php echo $data['Vision5_Score'] ?></td>
                <td><?php echo $data['Vision6_Score'] ?></td>
                <td><?php echo $data['ActTemp1'] ?></td>
                <td><?php echo $data['ActTemp2'] ?></td>
                <td><?php echo $data['ActHumidity'] ?></td>
                <td><?php echo $data['Batch_Ink3'] ?></td>
                <td><?php echo $data['Batch_Ink4'] ?></td>
                <td><?php echo $data['Batch_Thinner'] ?></td>
            </tr>
        </tbody>
        <!-- === Letakkan Kurung Tutup Kurawal PHP Disini === -->
    <?php } ?>
</table>

<!-- RA108 -->
<?php
if (isset($_POST['filter_ra101'])) {
    $tgl_mulai = new DateTime($_POST['tgl_mulai']);
    $tgl_selesai = new DateTime($_POST['tgl_selesai']);

    // Format objek DateTime ke dalam format "Y-m-d H:i:s"
    $start = $tgl_mulai->format("Y-m-d H:i:s");
    $end = $tgl_selesai->format("Y-m-d H:i:s");
?>
<?php
}
?>
<span class="font-weight-bold"> Start : </span><?php echo $start; ?>
<span class="font-weight-bold"> End : </span><?php echo $end; ?>
<table class="table align-items-center table-flush table-hover table-striped">
    <thead class="thead-dark">
        <tr align="center" id="table">
            <th>Cell</th>
            <th>Timestamp</th>
            <th>Date Time In</th>
            <th>Date Time Out</th>
            <th>Carrier 3 No</th>
            <th>Carrier 3 Pos</th>
            <th>Nest No</th>
            <th>Nest Pos</th>
            <th>Output Stack Code</th>
            <th>12NC</th>
            <th>DMC</th>
            <th>Process Code</th>
            <th>Buffer Index</th>
            <th>Vision Result</th>
            <th>Measurement_SilverX_LL</th>
            <th>Measurement_SilverX</th>
            <th>Measurement_SilverX_UL</th>
            <th>Measurement_SilverY_LL</th>
            <th>Measurement_SilverY</th>
            <th>Measurement_SilverY_UL</th>
            <th>Measurement_SilverR_LL</th>
            <th>Measurement_SilverR</th>
            <th>Measurement_SilverR_UL</th>
            <th>Measurement_BlackX_LL</th>
            <th>Measurement_BlackX</th>
            <th>Measurement_BlackX_UL</th>
            <th>Measurement_BlackY_LL</th>
            <th>Measurement_BlackY</th>
            <th>Measurement_BlackY_UL</th>
            <th>Measurement_BlackR_LL</th>
            <th>Measurement_BlackR</th>
            <th>Measurement_BlackR_UL</th>
            <th>Measurement_Dist_Left_LL</th>
            <th>Measurement_Dist_Left</th>
            <th>Measurement_Dist_Left_UL</th>
            <th>Measurement_Dist_Right_LL</th>
            <th>Measurement_Dist_Right</th>
            <th>Measurement_Dist_Right_UL</th>
            <th>Measurement_Dist_X_LL</th>
            <th>Measurement_Dist_X</th>
            <th>Measurement_Dist_X_UL</th>
            <th>Measurement_Dist_Y_LL</th>
            <th>Measurement_Dist_Y</th>
            <th>Measurement_Dist_Y_UL</th>
            <th>Torque_WithoutLoad_LL</th>
            <th>Torque_WithoutLoad</th>
            <th>Torque_WithoutLoad_UL</th>
            <th>Torque_WithLoad_LL</th>
            <th>Torque_WithLoad</th>
            <th>Torque_WithLoad_UL</th>
            <th>Batch Oil</th>
        </tr>
    </thead>
    <!-- ==== Letakkan Code PHP While Disini === -->
    <?php
    $query = sqlsrv_query($conn, "SELECT * FROM PartDataRA101 WHERE DateTimeOut >= '$start' AND DateTimeOut <= '$end' ");
    while ($row = sqlsrv_fetch_array($query)) {
    ?>
        <tbody>
            <tr align="center" id="table">
                <th class="text-primary"><?php echo $data['Cell'] ?></th>
                <td><?php echo $data['TimeStamp'] ?></td>
                <td><?php echo $data['DateTimeIn'] ?></td>
                <td><?php echo $data['DateTimeOut'] ?></td>
                <td><?php echo $data['Carrier3_No'] ?></td>
                <td><?php echo $data['Carrier3_Pos'] ?></td>
                <td><?php echo $data['Nest_No'] ?></td>
                <td><?php echo $data['Nest_Pos'] ?></td>
                <td><?php echo $data['OutputStackCode'] ?></td>
                <td><?php echo $data['_12NC'] ?></td>
                <td><?php echo $data['DMC'] ?></td>
                <td><?php echo $data['ProcessCode'] ?></td>
                <td><?php echo $data['BufferIndex'] ?></td>
                <td><?php echo $data['VisionResult'] ?></td>
                <td><?php echo $data['Measurement_SilverX_LL'] ?></td>
                <td><?php echo $data['Measurement_SilverX'] ?></td>
                <td><?php echo $data['Measurement_SilverX_UL'] ?></td>
                <td><?php echo $data['Measurement_SilverY_LL'] ?></td>
                <td><?php echo $data['Measurement_SilverY'] ?></td>
                <td><?php echo $data['Measurement_SilverY_UL'] ?></td>
                <td><?php echo $data['Measurement_SilverR_LL'] ?></td>
                <td><?php echo $data['Measurement_SilverR'] ?></td>
                <td><?php echo $data['Measurement_SilverR_UL'] ?></td>
                <td><?php echo $data['Measurement_BlackX_LL'] ?></td>
                <td><?php echo $data['Measurement_BlackX'] ?></td>
                <td><?php echo $data['Measurement_BlackX_UL'] ?></td>
                <td><?php echo $data['Measurement_BlackY_LL'] ?></td>
                <td><?php echo $data['Measurement_BlackY'] ?></td>
                <td><?php echo $data['Measurement_BlackY_UL'] ?></td>
                <td><?php echo $data['Measurement_BlackR_LL'] ?></td>
                <td><?php echo $data['Measurement_BlackR'] ?></td>
                <td><?php echo $data['Measurement_BlackR_UL'] ?></td>
                <td><?php echo $data['Measurement_Dist_Left_LL'] ?></td>
                <td><?php echo $data['Measurement_Dist_Left'] ?></td>
                <td><?php echo $data['Measurement_Dist_Left_UL'] ?></td>
                <td><?php echo $data['Measurement_Dist_Right_LL'] ?></td>
                <td><?php echo $data['Measurement_Dist_Right'] ?></td>
                <td><?php echo $data['Measurement_Dist_Right_UL'] ?></td>
                <td><?php echo $data['Measurement_Dist_X_LL'] ?></td>
                <td><?php echo $data['Measurement_Dist_X'] ?></td>
                <td><?php echo $data['Measurement_Dist_X_UL'] ?></td>
                <td><?php echo $data['Measurement_Dist_Y_LL'] ?></td>
                <td><?php echo $data['Measurement_Dist_Y'] ?></td>
                <td><?php echo $data['Measurement_Dist_Y_UL'] ?></td>
                <td><?php echo $data['Torque_WithoutLoad_LL'] ?></td>
                <td><?php echo $data['Torque_WithoutLoad'] ?></td>
                <td><?php echo $data['Torque_WithoutLoad_UL'] ?></td>
                <td><?php echo $data['Torque_WithLoad_LL'] ?></td>
                <td><?php echo $data['Torque_WithLoad'] ?></td>
                <td><?php echo $data['Torque_WithLoad_UL'] ?></td>
                <td><?php echo $data['Batch_Oil'] ?></td>
            </tr>
        </tbody>
        <!-- === Letakkan Kurung Tutup Kurawal PHP Disini === -->
    <?php } ?>
</table>