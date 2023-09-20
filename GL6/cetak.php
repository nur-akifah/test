<!DOCTYPE html>
<html>

<head>
    <title>Redirect Page</title>
</head>

<body>
    <h1>Select Options and Date Range</h1>
    <select id="dropdown">
        <option value="Part Data GL6/partdata-ra100.php">RA100</option>
        <option value="Part Data GL6/partdata-ra101.php">RA101</option>
        <option value="option3">Option 3</option>
    </select>
    <br>
    <label for="startDate">Start Date:</label>
    <input type="date" id="startDate">
    <br>
    <label for="endDate">End Date:</label>
    <input type="date" id="endDate">
    <br>
    <button onclick="redirectToSelectedPage()">Go</button>

    <script>
        function redirectToSelectedPage() {
            // Ambil nilai dari dropdown
            var dropdownValue = document.getElementById("dropdown").value;

            // Ambil nilai dari elemen input tanggal awal dan akhir
            var startDate = document.getElementById("startDate").value;
            var endDate = document.getElementById("endDate").value;

            // Buat URL tujuan berdasarkan pilihan dropdown dan rentang tanggal
            var targetPageURL = "https://example.com/" + dropdownValue + "/?startDate=" + startDate + "&endDate=" + endDate;

            // Arahkan pengguna ke halaman tujuan
            window.location.href = targetPageURL;
        }
    </script>
</body>

</html>