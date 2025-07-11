<?php
// Sample PHP script: Greeting based on time

// Get the current hour
$hour = date("H");

// Define a function to return a greeting
function getGreeting($hour) {
    if ($hour < 12) {
        return "Good morning!";
    } elseif ($hour < 18) {
        return "Good afternoon!";
    } else {
        return "Good evening!";
    }
}

// Call the function
$greeting = getGreeting($hour);

// Output the result
echo "<h1>Welcome to My PHP Page</h1>";
echo "<p>The current time is: " . date("h:i A") . "</p>";
echo "<p>$greeting</p>";
?>
