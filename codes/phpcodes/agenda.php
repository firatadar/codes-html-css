<?php
// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Initialize an array to store tasks for each day
    $agenda = array(
        "Monday" => array(),
        "Tuesday" => array(),
        "Wednesday" => array(),
        "Thursday" => array(),
        "Friday" => array(),
        "Saturday" => array(),
        "Sunday" => array()
    );

    // Function to get the day of the week from a date
    function getDayOfWeek($date) {
        return date('l', strtotime($date));
    }

    // Iterate through each submitted task
    foreach ($_POST as $key => $value) {
        // Check if the input name contains "_task" (indicating it's a task field)
        if (strpos($key, '_task') !== false) {
            // Extract the day from the input name (e.g., "monday_task" becomes "Monday")
            $day = ucfirst(str_replace('_task', '', $key));

            // Get the corresponding date for the task
            $date = $_POST[$day . '_date'];

            // Get the day of the week from the date
            $dayOfWeek = getDayOfWeek($date);

            // Add the task to the agenda for the corresponding day of the week
            if (array_key_exists($dayOfWeek, $agenda)) {
                array_push($agenda[$dayOfWeek], $value);
            }
        }
    }

    // Display the agenda
    foreach ($agenda as $day => $tasks) {
        echo "<h2>$day</h2>";
        echo "<ul>";
        foreach ($tasks as $task) {
            echo "<li>$task</li>";
        }
        echo "</ul>";
    }
}
?>
