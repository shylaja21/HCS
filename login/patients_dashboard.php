<?php
session_start();
if (!isset($_SESSION['role']) || $_SESSION['role'] !== 'patient') {
    header("Location: newlogin.php");
    exit();
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Patient Dashboard</title>
</head>
<body>
    <h1>Hello, <?php echo $_SESSION['username']; ?>!</h1>
    <p>Welcome to your personal health dashboard.</p>
    <ul>
        <li>Upcoming Appointments</li>
        <li>Prescriptions</li>
        <li>Medical Reports</li>
    </ul>
    <a href="logout.php">Logout</a>
</body>
</html>
