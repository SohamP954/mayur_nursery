<?php
session_start();
if(!isset($_SESSION['admin_user'])) {
    header("Location: admin_login.php");
    exit();
}

include 'db.php';
?>

<h2>Welcome, <?php echo $_SESSION['admin_user']; ?>!</h2>
<a href="admin_logout.php">Logout</a>

<h3>Add New Plant</h3>
<form action="add_plant.php" method="post" enctype="multipart/form-data">
    <input type="text" name="name" placeholder="Plant Name" required><br><br>
    <input type="text" name="category" placeholder="Category" required><br><br>
    <input type="number" step="0.01" name="price" placeholder="Price" required><br><br>
    <input type="file" name="image"><br><br>
    <input type="submit" value="Add Plant">
</form>

<h3>Plant List</h3>
<?php
$result = mysqli_query($conn, "SELECT * FROM plants");
echo "<table border='1'>
<tr><th>Plant Name</th><th>Category</th><th>Price</th><th>Action</th></tr>";

while($row = mysqli_fetch_assoc($result)) {
    echo "<tr>
            <td>".$row['name']."</td>
            <td>".$row['category']."</td>
            <td>".$row['price']."</td>
            <td><a href='delete_plant.php?id=".$row['id']."'>Delete</a></td>
          </tr>";
}
echo "</table>";
?>
