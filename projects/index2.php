<!DOCTYPE html>
<html>
<head>
    <title>Local Timezone</title>
</head>
<body>
    <div id="userTimezone"></div>
    <div id="serverTimezone"></div>

    <script>
        // JavaScript code to get the user's local timezone
        const userTimeZone = Intl.DateTimeFormat().resolvedOptions().timeZone;
        document.getElementById("userTimezone").textContent = `Your local timezone is: ${userTimeZone}`;
    </script>

    <?php
     // Set your server's timezone, e.g., UTC
    $serverTimeZone = date_default_timezone_get(); // Get the server's timezone
    echo "<script>document.getElementById('serverTimezone').textContent = 'Server timezone is: $serverTimeZone';</script>";
    ?>
</body>
</html>
