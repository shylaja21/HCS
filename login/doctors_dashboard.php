<?php
session_start();

// Redirect if not logged in or not a doctor
if (!isset($_SESSION['user_id']) || $_SESSION['role'] != 'doctor') {
    header('Location: newlogin.php');
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Doctor Dashboard - Health Care Solutions</title>
    <link rel="stylesheet" href="abc.css">
    <style>
        body {
            margin: 0;
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
        }

        .header {
            background-color: #007BFF;
            color: white;
            padding: 20px 0;
            text-align: center;
            font-size: 24px;
            font-weight: bold;
        }

        .container {
            display: flex;
        }

        .sidebar {
            width: 250px;
            background-color: #343a40;
            height: 100vh;
            padding-top: 30px;
            display: flex;
            flex-direction: column;
        }

        .sidebar a {
            color: white;
            padding: 15px 25px;
            text-decoration: none;
            font-size: 16px;
            transition: background 0.3s ease;
        }

        .sidebar a:hover {
            background-color: #495057;
        }

        .main-content {
            flex-grow: 1;
            padding: 40px;
        }
    </style>
</head>
<body>

    <div class="header">
        Doctor Dashboard
    </div>

    <div class="container">
        <div class="sidebar">
            <a href="view_appointments.php">View Appointments</a>
            <a href="manage_prescriptions.php">Manage Prescriptions</a>
            <a href="view_patients.php">View Patients</a>
            <a href="logout.php" style="color:rgb(230, 182, 37);">Logout</a>
        </div>

        <div class="main-content">
            <h2>Welcome, Dr. <?php echo htmlspecialchars($_SESSION['username']); ?> 👨‍⚕️</h2>
            <p>Select an option from the left to begin.</p>
        </div>
    </div>

</body>
</html>
