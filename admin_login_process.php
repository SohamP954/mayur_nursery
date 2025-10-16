<?php
session_start();
include 'db.php'; // your DB connection

$username = $_POST['username'];
$password = $_POST['password'];

$query = "SELECT * FROM admin_users WHERE username='$username' AND password='$password'";
$result = mysqli_query($conn, $query);

if(mysqli_num_rows($result) == 1) {
    $_SESSION['admin_user'] = $username;
    header("Location: admin_dashboard.php");
} else {
    echo "Invalid Login Credentials!";
}
?>
