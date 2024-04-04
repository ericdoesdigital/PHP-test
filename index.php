<!DOCTYPE html>
<html>
<head>
    <title>Welcome User</title>
</head>
<body>
<p>Hello!</p>
<?php
    // Get current date and time
    $current_date = date("Y-m-d H:i:s");

    // Welcome message
    $welcome_message = "Welcome, User!";

    // Output the date and welcome message
    echo "<p>Today's date and time is: $current_date</p>";
    echo "<p>$welcome_message</p>";
?>

</body>
</html>
