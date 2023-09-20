<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.2/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.29.1/moment.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/4.17.47/js/bootstrap-datetimepicker.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/4.17.47/css/bootstrap-datetimepicker.min.css">
    <title>Datetime Range Picker Example</title>
</head>

<body>
    <div class="container mt-5">
        <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                    <label for="startDatetime">Start Datetime:</label>
                    <div class="input-group date" id="startDatetimePicker" data-target-input="nearest">
                        <input type="text" class="form-control datetimepicker-input" data-target="#startDatetimePicker" id="startDatetime" />
                        <div class="input-group-append" data-target="#startDatetimePicker" data-toggle="datetimepicker">
                            <div class="input-group-text"><i class="fa fa-calendar"></i></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <label for="endDatetime">End Datetime:</label>
                    <div class="input-group date" id="endDatetimePicker" data-target-input="nearest">
                        <input type="text" class="form-control datetimepicker-input" data-target="#endDatetimePicker" id="endDatetime" />
                        <div class="input-group-append" data-target="#endDatetimePicker" data-toggle="datetimepicker">
                            <div class="input-group-text"><i class="fa fa-calendar"></i></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <button type="button" class="btn btn-primary" onclick="loadPreSetDatetimeRange()">Current Hour</button>
    </div>

    <script>
        function loadPreSetDatetimeRange() {
            const preSetStartDatetime = "2023-09-18 07:00:00"; // Example pre-set start datetime
            const preSetEndDatetime = "2023-09-18 15:00:00"; // Example pre-set end datetime

            // Set the datetime picker values and format
            $('#startDatetime').val(moment(preSetStartDatetime).format('YY-MM-DD-HH:mm:ss'));
            $('#endDatetime').val(moment(preSetEndDatetime).format('YY-MM-DD-HH:mm:ss'));
        }
    </script>
</body>

</html>