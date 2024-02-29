<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Appointment</title>
  <style>
    body {
      margin: 0;
      padding: 0;
      font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
      background-color: #f2f2f2;
    }

    .dashboard {
      display: flex;
      height: 100vh;
    }

    .sidebar {
      background: #76292A; 
      color: white;
      padding: 20px;
      width: 250px;
      display: flex;
      flex-direction: column;
      align-items: center;
    }

    .sidebar .profile-picture {
      height: 80px;
      width: 80px;
      border-radius: 50%;
      margin-bottom: 20px;
      background-image: url('/Groupb/img/profile.png'); /* Add the path to your profile picture */
      background-size: cover;
      background-position: center;
    }

    .sidebar h1 {
      font-size: 1.5em;
      margin-bottom: 20px;
    }

    nav ul {
      list-style: none;
      padding: 0;
      text-align: center;
    }

    nav a {
      text-decoration: none;
      color: white;
      display: block;
      padding: 10px;
      margin-bottom: 10px;
      border-radius: 5px;
      transition: background-color 0.3s;
    }

    nav a:hover {
      background-color: #BD6E6E;
    }

    .content {
      flex: 1;
      padding: 20px;
    }

    .appointments {
      background-color: #ecf0f1;
      padding: 20px;
      margin-top: 20px;
      border-radius: 5px;
      box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    }

    .appointments h2 {
      color: #333;
    }

    .appointments form {
      display: flex;
      flex-direction: column;
      gap: 15px;
    }

    .appointments label {
      font-weight: bold;
      color: #333;
    }

    .appointments input,
    .appointments textarea {
      padding: 10px;
      border-radius: 5px;
      border: 1px solid #ddd;
      margin-top: 5px;
    }

    .appointments input[type="submit"] {
      background-color: #3498db;
      color: #fff;
      cursor: pointer;
      border: none;
      padding: 12px;
      font-size: 16px;
      font-weight: 500;
    }

    .appointments input[type="submit"]:hover {
      background-color: #2980b9;
    }

    /* Print styles */
    @media print {
      body {
        background-color: white;
      }

      .dashboard {
        display: block;
        margin: 0;
        padding: 20px;
        box-shadow: none;
      }

      .sidebar,
      .appointments {
        background-color: white;
        box-shadow: none;
      }

      .profile-picture,
      .content {
        display: none;
      }
    }
  </style>
</head>
<body>
  <div class="dashboard">
    <aside class="sidebar">
      <div class="profile-picture"></div>
      <h1>Hi Kent Zorel Elnas</h1>
      <nav>
        <ul>
          <li><a href="user_dashboard.php">Dashboard</a></li>
          <li><a href="appointment.php">Appointment</a></li>
          <li><a href="user_settings.php">Settings</a></li>
          <li><a href="logout.php">Logout</a></li>
        </ul>
      </nav>
    </aside>

    <main class="content">
      <section class="appointments">
        <h2>Appointments</h2>
        <form action="process_appointment.php" method="post">
          <label for="appointmentDate">Appointment Date:</label>
          <input type="date" name="appointmentDate" required>

          <label for="appointmentTime">Appointment Time:</label>
          <input type="time" name="appointmentTime" required>

          <label for="reason">Reason for Appointment:</label>
          <textarea name="reason" placeholder="Enter your reason for the appointment" rows="4" required></textarea>

          <label for="email">Your Email:</label>
          <input type="email" name="email" placeholder="Enter your email" required>

          <input type="submit" value="Schedule Appointment">
        </form>

        <button onclick="printAppointmentDetails()">Print Appointment Details</button>

        <div id="appointmentDetails">
        </div>
      </section>

      <section class="appointments">
        <h2>Appointment History</h2>
        <p><a href="appointment_history.php">View Appointment History</a></p>
      </section>
    </main>
  </div>

  <script>
    function printAppointmentDetails() {
      var appointmentDetails = "Sample appointment details:\nDate: 2024-01-31\nTime: 14:30\nReason: Follow-up";
      document.getElementById('appointmentDetails').innerText = appointmentDetails;
      window.print();
    }
  </script>
</body>
</html>
