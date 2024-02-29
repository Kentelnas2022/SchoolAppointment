<?php
// Replace these values with your actual database credentials
$servername = "your_actual_servername";
$username = "your_actual_username";
$password = "your_actual_password";
$dbname = "your_actual_dbname";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT * FROM appointments WHERE user_email = 'user@example.com'"; // Change to the user's email
$result = $conn->query($sql);
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Appointment History</title>
</head>
<body>
  <style>
        body {
    font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
    background-color: #F5F5F5;
    color: #333;
    margin: 0;
    padding: 20px;
    box-sizing: border-box;
  }

  h1 {
    text-align: center;
    color: #76292A;
  }

  .appointment-entry {
    background-color: #FFFFFF;
    padding: 20px;
    margin: 10px 0;
    border-radius: 8px;
    box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
  }

  .appointment-details {
    display: flex;
    justify-content: space-between;
    align-items: center;
  }

  .appointment-details div {
    flex: 1;
  }

  .appointment-date,
  .appointment-time {
    font-weight: bold;
    color: #76292A;
  }

  .appointment-reason {
    margin-top: 10px;
  }
  </style>

  <h1>Appointment History</h1>

  <?php
  if ($result->num_rows > 0) {
      while ($row = $result->fetch_assoc()) {
          echo "<p>Date: " . $row["appointment_date"] . ", Time: " . $row["appointment_time"] . ", Reason: " . $row["reason"] . "</p>";
      }
  } else {
      echo "<p>No appointments found.</p>";
  }

  $conn->close();
  ?>

</body>
</html>
