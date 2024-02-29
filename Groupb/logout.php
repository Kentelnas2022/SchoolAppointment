<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Logout</title>
<style>
  body {
    font-family: Arial, sans-serif;
    background-color: #76292A; 
    margin: 0;
    padding: 0;
    display: flex;
    align-items: center;
    justify-content: center;
    height: 100vh;
  }

  .logout-container {
    text-align: center;
    background-color: #76292A; 
    color: #ffffff; 
    border-radius: 8px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    padding: 20px;
    width: 300px;
  }

  h1 {
    color: #4caf50;
  }

  p {
    color: #ffffff; 
    margin-bottom: 20px;
  }

  img {
    width: 250px;
    height: auto;
  }

  button {
    background-color: #3498db;
    color: #fff;
    border: none;
    border-radius: 5px;
    padding: 10px 20px;
    cursor: pointer;
    transition: background-color 0.3s;
  }

  button:hover {
    background-color: #2980b9;
  }
</style>
</head>
<body>
<div class="logout-container">
  <img src="/Groupb/img/sad.png" alt="logout">
  <h1>You've been logged out.</h1>
  <p>If you want to log in again, click the button below.</p>
  <button id="loginBtn">Login</button>
</div>

<script>
  document.getElementById("loginBtn").addEventListener("click", function() {
    window.location.href = "reglog.php"; 
  });
</script>
</body>
</html>
