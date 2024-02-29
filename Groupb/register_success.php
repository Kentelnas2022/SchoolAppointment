<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Registration Successful</title>
  <link rel="stylesheet" href="/Groupb/css/reglog.css">
  <style>
    body {
      font-family: Arial, sans-serif;
      background-color: #76292A; /* Updated background color */
    }
    .wrapper {
      display: flex;
      justify-content: center;
      align-items: center;
      height: 100vh;
    }
    .form {
      background-color: #fff;
      border-radius: 10px;
      padding: 20px;
      box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
      text-align: center;
    }
    .form header {
      font-size: 24px;
      color: #333;
      margin-bottom: 20px;
    }
    .success p {
      font-size: 18px;
      color: #4CAF50;
      margin-bottom: 10px;
    }
    .success p:last-child {
      font-size: 16px;
      color: #666;
    }
  </style>
</head>
<body>
<div class="wrapper">
  <div class="form success">
    <header>Registration Successful</header>
    <p>Congratulations!</p>
    <p>You have successfully registered.</p>
    <p>You will be redirected to the login page shortly.</p>
  </div>
</div>

<script>
  // Redirect to login page after 5 seconds
  setTimeout(function(){
    window.location.href = "user_dashboard.php";
  }, 5000);
</script>

</body>
</html>
