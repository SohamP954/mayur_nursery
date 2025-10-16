<?php
include 'db.php'; // Ensure 'db.php' is included to connect to the database

$sql = "INSERT INTO plants (name, section, quantity, price) VALUES 
    ('Ind1', 'Indoor', 10, 500),
    ('Ind2', 'Indoor', 15, 750),
    ('Ind3', 'Indoor', 20, 600),
    ('Out1', 'Outdoor', 25, 800),
    ('Out2', 'Outdoor', 30, 1200),
    ('Out3', 'Outdoor', 18, 950),
    ('Flo1', 'Flowering', 20, 400),
    ('Flo2', 'Flowering', 10, 550),
    ('Flo3', 'Flowering', 12, 700),
    ('Herb1', 'Herbal', 25, 300),
    ('Herb2', 'Herbal', 30, 450),
    ('Herb3', 'Herbal', 15, 500),
    ('Fruit1', 'Fruit Plants', 10, 1200),
    ('Fruit2', 'Fruit Plants', 20, 1800),
    ('Fruit3', 'Fruit Plants', 15, 1500)";

if ($conn->query($sql) === TRUE) {
    echo "Plant records inserted successfully!";
} else {
    echo "Error: " . $conn->error;
}

$conn->close();
?>
