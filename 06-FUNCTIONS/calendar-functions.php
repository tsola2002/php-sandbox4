<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calendar</title>
</head>
<body>
    <h1>Working With Calendar Functions</h1>
    <?php 
        // Get the day of the week for a specific date
        $day_of_week = cal_days_in_month(CAL_GREGORIAN, 2, 2024); // February 2024
        echo "Number of days in February 2024: " . $day_of_week . "<br>";

        // convert a Gregorian date to Julian Day Calendar
        echo cal_to_jd(CAL_GREGORIAN, 11, 21, 2025);
    ?>
</body>
</html>