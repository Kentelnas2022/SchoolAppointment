<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Settings</title>
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
      background-image: url('/Groupb/img/profile.png');
      background-size: cover;
      background-position: center;
      cursor: pointer;
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

    header {
      background-color: #3498db;
      color: #fff;
      padding: 20px;
      text-align: center;
      margin-bottom: 20px;
    }

    .settings {
      background-color: #ecf0f1;
      padding: 20px;
      margin-top: 20px;
      border-radius: 5px;
      box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    }

    .settings h2 {
      color: #333;
    }

    .settings form {
      display: flex;
      flex-direction: column;
      gap: 15px;
    }

    .settings label {
      font-weight: bold;
      color: #333;
    }

    .settings input {
      padding: 12px;
      border-radius: 8px;
      border: 1px solid #ddd;
      margin-top: 5px;
      font-size: 16px;
      transition: border-color 0.3s;
    }

    .settings input[type="file"] {
      border: none;
      display: none; /* Hide the default file input */
    }

    .settings input[type="submit"] {
      background-color: #3498db;
      color: #fff;
      cursor: pointer;
      border: none;
      font-size: 16px;
      font-weight: bold;
    }

    .settings input[type="submit"]:hover {
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
      .settings {
        background-color: white;
        box-shadow: none;
      }

      .profile-picture,
      .content {
        display: none;
      }

      .settings input[type="email"],
      .settings input[type="password"] {
        transition: border-color 0.3s;
      }

      .settings input[type="email"]:focus,
      .settings input[type="password"]:focus {
        border-color: #3498db;
      }
    }
  </style>
</head>
<body>
  <div class="dashboard">
    <aside class="sidebar">
      <label for="profileImage" class="profile-picture" id="profilePictureLabel" onclick="openFileInput()"></label>
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
      <!-- Settings Section -->
      <section class="settings">
        <h2>Settings</h2>
        <form action="userfunction_settings.php" method="post" enctype="multipart/form-data">
          <label for="profileImage">Change Profile Picture:</label>
          <input type="file" name="profileImage" accept="image/*" id="profileImage" style="display: none;" onchange="updateProfilePicture()">
          
          <label for="fullName">Full Name:</label>
          <input type="text" name="fullName" placeholder="Your Full Name">
          
          <label for="email">Email:</label>
          <input type="email" name="email" placeholder="Your Email">

          <label for="password">New Password:</label>
          <input type="password" name="password" placeholder="New Password">

          <input type="submit" value="Save Changes">
        </form>
      </section>
    </main>
  </div>

  <script>
    function openFileInput() {
      document.getElementById('profileImage').click();
    }

    function updateProfilePicture() {
      var input = document.getElementById('profileImage');
      var label = document.getElementById('profilePictureLabel');

      if (input.files && input.files[0]) {
        var reader = new FileReader();

        reader.onload = function (e) {
          label.style.backgroundImage = 'url(' + e.target.result + ')';
        };

        reader.readAsDataURL(input.files[0]);
      }
    }

    document.querySelector('form').addEventListener('submit', function (e) {
      e.preventDefault();

      fetch('userfunction_settings.php', {
        method: 'POST',
        body: new FormData(this),
      })
        .then(response => response.text())
        .then(message => {
          alert(message);
        })
        .catch(error => console.error('Error:', error));
    });
  </script>
</body>
</html>
