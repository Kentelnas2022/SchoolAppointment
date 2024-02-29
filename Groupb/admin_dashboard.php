<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Dashboard</title>
  <style>
    body {
      margin: 0;
      padding: 0;
      font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
      background-color: #f2f2f2;
      color: #BD6E6E; /* Changed content color */
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
      background-image: url('/Groupb/img/admin.png'); /* Add the path to your profile picture */
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
      padding: 20px; /* Adjusted padding */
    }

    header {
      background-color: #3498db;
      color: #fff;
      padding: 20px;
      text-align: center;
      margin-bottom: 20px;
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

    .appointments p {
      margin: 10px 0;
    }

    .appointments form {
      display: flex;
      flex-direction: column;
      gap: 15px;
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
  <h1>Hi Admin</h1>
  <nav>
    <ul>
      <li><a href="admin_dashboard.php">Dashboard</a></li>
      <li><a href="inbox.php">Inbox</a></li>
      <li><a href="logout.php">Logout</a></li>
    </ul>
  </nav>
</aside>
<main class="content">
  <header>
    <h1>Dashboard</h1>
  </header>
</main>
</div>
</body>
</html>
