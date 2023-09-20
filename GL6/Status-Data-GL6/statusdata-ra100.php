<?php
if (isset($_POST['filter_ra100']) || isset($_POST['filter_ra101']) || isset($_POST['filter_ra102'])) {
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
            <th>Time Start</th>
            <th>Time End</th>
            <th>Duration</th>
            <th>Status Code</th>
            <th>Status Message</th>
        </tr>
    </thead>
    <!-- ==== Letakkan Code PHP While Disini === -->
    <?php
    $query = sqlsrv_query($conn, "SELECT * FROM dbo.StatusDataRA100, dbo.StatusDataRA101, dbo.StatusDataRA102 WHERE timeend >= '$start' AND timeend <= '$end' ");
    while ($row = sqlsrv_fetch_array($query)) {
    ?>
        <!-- Filter DateTime Only -->

        <tbody>
            <tr align="center" id="table">
                <th class="text-primary"><?php echo $row['cell']; ?></th>
                <td><?php echo $row['timestart'] ?></td>
                <td><?php echo $row['timeend'] ?></td>
                <td><?php echo $row['duration'] ?></td>
                <td><?php echo $row['status_code']; ?></td>
                <td><?php echo $row['status_message']; ?></td>
            </tr>
        </tbody>
        <!-- === Letakkan Kurung Tutup Kurawal PHP Disini === -->
    <?php } ?>
</table>