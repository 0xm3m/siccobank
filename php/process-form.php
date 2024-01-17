<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Get the employee ID from the form submission
    $employeeId = $_POST['employee-id'];

    // Perform validation on the employee ID
    if ($employeeId !== 123) {
        // Show the popup
        echo '<div id="popup">';
        echo '<p>You will receive a mail.</p> <button id="popup-close">Close</button>';
        echo '</div>';

        // Additional logic for sending the email, etc.
    } else {
        // Handle validation errors
        // Display an error message or redirect back to the form with an error
    }
}
?>