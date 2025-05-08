<?php
session_start();
if (!isset($_SESSION['role']) || $_SESSION['role'] !== 'admin') {
    header("Location: newlogin.php");
    exit();
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Admin Dashboard</title>
</head>
<body>
    <h1>Admin Panel - <?php echo $_SESSION['username']; ?></h1>
    <p>Manage everything from here:</p>
    <ul>
        <li>Manage Users</li>
        <li>View Reports</li>
        <li>System Settings</li>
    </ul>
    <a href="logout.php">Logout</a>
</body>
</html>
