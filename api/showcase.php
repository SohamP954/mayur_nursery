<?php include 'db.php' ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mayur Nursery | Fruit Plants</title>
    <link rel="stylesheet" href="styles.css">
    <script defer src="script.js"></script>
</head>
<body>
    <?php include 'components/navbar.php' ?>


      <!-- Showcase Plants Page -->
      <div id="showcase-plants-page" class="">
        <!-- Header Section -->
        <header style="background-image: url('f.jpg'); background-size: cover; background-position: center; color: white; padding: 60px 20px; text-align: center;">
            <h1 class="header-title-animated">Fruit Plants</h1>
            <p class="header-subtitle-animated">Discover our wide range of fruit plants perfect for growing fresh and healthy produce.</p>
        </header>
    <section class="showcase-plants">
        <h3>"Fruit Plants: A delicious blend of beauty and harvest for every garden."</h3>
        
        <div class="showcase-plants-gallery">
        <?php
                $sql = "SELECT * FROM plants where section = 'showcase' limit 24;";
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
        </div>
    </section>
</div>
    
    <?php include 'components/footer.php'; ?>
</body>
</html>