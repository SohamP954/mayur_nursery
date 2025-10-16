<?php include 'db.php' ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mayur Nursery | Water Plants</title>
    <link rel="stylesheet" href="styles.css">
    <script defer src="script.js"></script>
</head>
<body>
    <?php include 'components/navbar.php' ?>


      <!-- Water Plants Page -->
      <div id="water-plants-page" class="">
        <!-- Header Section -->
        <header style="background-image: url('water.jpg'); background-size: cover; background-position: center; color: white; padding: 60px 20px; text-align: center;">
            <h1 class="header-title-animated">Water Plants</h1>
            <p class="header-subtitle-animated">Explore our wide selection of plants perfect for your outdoor spaces.</p>
        </header>
    <section class="water-plants">
        <h3>"Enhance your ponds and water features with our premium water plants"</h3>
       
        
        <div class="water-plants-gallery">
        <?php
                $sql = "SELECT * FROM plants where section = 'water-plants' limit 16;";
                $result = $conn->query($sql);
                
                if ($result->num_rows > 0) {
                  // output data of each row
                  while($row = $result->fetch_assoc()) {
                    echo"<div class='plant-card'>
                        <a href=\"plant-care.php?plant=" . $row['id'] . "\">
                            <img src=\"" . $row['image'] . "\" alt=\"" . $row['name'] . "\">
                        </a>
                        <p>" . htmlspecialchars($row['name']) . "</p>
                      </div>";
                  }
                } else {
                  echo "0 results";
                }
        ?>
        </div>
    </section>
</div>

    <?php include 'components/footer.php'; ?>
</body>
</html>