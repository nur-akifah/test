<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- jQuery library -->
    <script src="js/jquery.min.js"></script>

    <!-- Bootstrap library -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/4.17.47/css/bootstrap-datetimepicker.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.24.0/moment.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/4.17.47/js/bootstrap-datetimepicker.min.js"></script>
</head>

<body>
    <label>FROM: </label>
    <input type="text" id="from" readonly>
    <label>TO: </label>
    <input type="text" id="to" readonly>

</body>
<script>
    var today = new Date();
    $('#from').datetimepicker({
        format: 'yyyy-mm-dd hh:ii',
        autoclose: true,
        todayBtn: true,
        startDate: today
    }).on('changeDate', function(ev) {
        $('#to').datetimepicker('setStartDate', ev.date);
    });

    $('#to').datetimepicker({
        format: 'yyyy-mm-dd hh:ii',
        autoclose: true,
        todayBtn: true,
        startDate: today
    }).on('changeDate', function(ev) {
        $('#from').datetimepicker('setEndDate', ev.date);
    });
</script>

</html>

<!-- <!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" type="text/css" href="./jquery.datetimepicker.css"/>
    <link rel="stylesheet" type="text/css" href="assets/css/libs/bootstrap-datetimepicker.css">
</head>

<body>
     === Set Date Range Using Datepicker (success) === 
    <button id="week">Past Week</button><br />
    <label for="from">From</label>
    <input type="text" id="from" name="from" value="">
    <label for="to">to</label>
    <input type="text" id="to" name="to" value="">

    <script>
        $("#from").datepicker({
            defaultDate: "+1w",
            dateFormat: 'MM d, yy',
            numberOfMonths: 1,
            onClose: function(selectedDate) {
                $("#to").datepicker("option", "minDate", selectedDate);
            }
        });
        $("#to").datepicker({
            defaultDate: "+1w",
            dateFormat: 'MM d, yy',
            numberOfMonths: 1,
            onClose: function(selectedDate) {
                $("#from").datepicker("option", "maxDate", selectedDate);
            }
        });

        $("#week").click(function() {
            var today = new Date();
            var from = new Date(today.getTime());
            from.setDate(from.getDate() - 7);
            $("#to").datepicker("setDate", today);
            $("#from").datepicker("setDate", from);
        });
    </script>
</body>

</html> -->