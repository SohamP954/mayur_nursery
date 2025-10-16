<?php
session_start();
include 'db.php';

if(!isset($_SESSION['admin_user'])) {
    header("Location: admin_login.php");
    exit();
}

$id = $_GET['id'];
mysqli_query($conn, "DELETE FROM plants WHERE id=$id");
header('Location: admin_dashboard.php');
?>
