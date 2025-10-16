<?php
session_start();
include 'db.php';

if(!isset($_SESSION['admin_user'])) {
    header("Location: admin_login.php");
    exit();
}

if(isset($_POST['name'])) {
    $name = $_POST['name'];
    $category = $_POST['category'];
    $price = $_POST['price'];

    $imageName = $_FILES['image']['name'];
    $imageTmp = $_FILES['image']['tmp_name'];
    move_uploaded_file($imageTmp, "uploads/".$imageName);

    mysqli_query($conn, "INSERT INTO plants (name, category, price, image) 
                         VALUES ('$name', '$category', '$price', '$imageName')");
    header('Location: admin_dashboard.php');
}
?>
