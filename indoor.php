<?php include 'db.php' ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mayur Nursery | Indoor</title>
    <link rel="stylesheet" href="styles.css">
    
    <script defer src="script.js"></script>
</head>
<body>
    <?php include 'components/navbar.php' ?>


      <!-- Indoor Plants Page -->
<div id="indoor-plants-page" class="">
    <!-- Header Section -->
    <header style="background-image: url('id.jpg'); background-size: cover; background-position: center; color: white; padding: 60px 20px; text-align: center;">
        <h1 class="header-title-animated">Indoor Plants</h1>
        <p class="header-subtitle-animated">Explore our wide selection of plants perfect for your indoor spaces.</p>
    </header>


        <!-- Indoor Plants Section -->
        <section class="indoor-plants">
            <h3>"Bring freshness and greenery into your home with our low-maintenance indoor plants."</h3>
            

            <div class="indoor-plants-gallery">
                <?php
                $sql = "SELECT * FROM plants where section = 'indoor' limit 40;";
                $result = $conn->query($sql);
                
                if ($result->num_rows > 0) {
                  // output data of each row
                  while($row = $result->fetch_assoc()) {
                    echo "<div class='plant-card'>
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
                <!-- <a href="#" onclick="window.location.href='plant-care.html?plant=indoor1'; return false;" target="_self">
                    <img src="ind1.jpg" alt="Cactus 1">
                </a>                
                <a href="#" onclick="window.location.href='plant-care.html?plant=indoor2'; return false;" target="_self">
                    <img src="ind2.jpg" alt="Cactus 2">
                </a>     
                <a href="#" onclick="window.location.href='plant-care.html?plant=indoor3'; return false;" target="_self">
                    <img src="indoor.jpg" alt="Indoor 1">
                </a>      -->
            </div>
        </section>
    </div>

    
    <?php include 'components/footer.php'; ?>
</body>
</html>