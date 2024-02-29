<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/Groupb/css/mainpage.css">
    <title>| Appointment application |</title>
</head>
<body>
    <div class="navbar">
        <div class="logo">
            <img src="logo.png" alt="Logo">
        </div>
        <ul>
            <li><a href="appointment.php">Appointment</a></li>
            <li><a href="user_settings.php">Settings</a></li>
            <li><a href="logout.php">Logout</a></li>
        </ul>
    </div>

    <div class="banner">
    </div>
    
    <div class="content">
        <h1>"By Scheduling a appointment <br>your'e taking.</h1>
        <p>A step towards making your dreams a Reality".</p>
        <div>
            <button type="button" onclick="SwitchPage()" id="start"><span></span>Request Now!!</button>
        </div>
    </div>
    <script>
        function SwitchPage(){
            window.location.href = 'appointment.php';
        }
    </script>
</body>
</html>
