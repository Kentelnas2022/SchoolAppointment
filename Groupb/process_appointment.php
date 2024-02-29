<?php
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    // Retrieve form data
    $appointmentDate = $_POST["appointmentDate"];
    $appointmentTime = $_POST["appointmentTime"];
    $reason = $_POST["reason"];
    $email = $_POST["email"];

    // Replace these values with your actual database credentials
    $servername = "your_actual_servername";
    $username = "your_actual_username";
    $password = "your_actual_password";
    $dbname = "your_actual_dbname";

    $conn = new mysqli($servername, $username, $password, $dbname);

    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    $sql = "INSERT INTO appointments (user_email, appointment_date, appointment_time, reason) VALUES ('$email', '$appointmentDate', '$appointmentTime', '$reason')";

    if ($conn->query($sql) === TRUE) {
        // Send email confirmation
        $to = $email;
        $subject = "Appointment Confirmation";
        $message = "Your appointment has been scheduled.\n\n";
        $message .= "Date: $appointmentDate\n";
        $message .= "Time: $appointmentTime\n";
        $message .= "Reason: $reason\n";

        mail($to, $subject, $message);

        // Redirect back to the dashboard
        header("Location: user_dashboard.php");
        exit;
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    $conn->close();
}
?>
