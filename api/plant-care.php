<?php include 'db.php' ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Plant Care Guide</title>
    <link rel="stylesheet" href="styles.css">
    <style>
    header {
    background-image: url('sc.jpg');
    background-size: cover;
    background-position: center;
    color: white;
    padding: 60px 20px;
    text-align: center;
    height: 260px; /* Or increase if needed */
    display: flex;
    align-items: center;
    justify-content: center;
}

header h1 {
    background-color: rgba(255, 255, 255, 0.95); /* White box with slight transparency */
    color: #2c3e50; /* Dark text for contrast */
    padding: 20px 30px;
    border-radius: 10px;
    box-shadow: 0 4px 12px rgba(0, 0, 0, 0.3);
    display: inline-block;
}


        .plant-care {
            text-align: center;
            padding: 40px 10%;
            background-color: #eef5ea;
        }
        .plant-container {
            display: flex;
            align-items: center;
            justify-content: center;
            flex-wrap: wrap;
            max-width: 900px;
            margin: auto;
            background: white;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
        }
        .plant-container img {
            width: 300px;
            height: 350px;
            object-fit: cover;
            border-radius: 10px;
            margin-right: 20px;
        }
        .plant-info {
            text-align: left;
            max-width: 50%;
        }
        .plant-info ul {
            list-style: none;
            padding: 0;
            font-size: 1.2em;
            line-height: 1.6;
        }
        .back-button {
            display: block;
            margin: 20px auto;
            padding: 10px 20px;
            background: #28a745;
            color: white;
            text-decoration: none;
            border-radius: 5px;
            cursor: pointer;
        }
    </style>
</head>
<body>
    <?php
    include 'db.php';

    // Get plant ID from GET request
    $plantId = isset($_GET['plant']) ? intval($_GET['plant']) : 0;

    // Fetch plant details
    $sql = "SELECT * FROM plants WHERE id = $plantId";
    $result = $conn->query($sql);
    $plant = $result->fetch_assoc();
    ?>

    
    <header>
        <h1 id="plant-name"><?php echo htmlspecialchars($plant['name']); ?></h1>
    </header>
    <section class="plant-care">
        <?php if ($plant): ?>
        <div class="plant-container">
            <img id="plant-image" src="<?php echo htmlspecialchars($plant['image']); ?>" alt="Plant" width="200">
            <div class="plant-info">
                <ul>
                    <li><strong>🌱 Plant Name:</strong> <span id="plant-title"><?php echo htmlspecialchars($plant['name']); ?></span></li>
                    <li><strong>☀️ Light Requirement:</strong> <span id="plant-light"><?php echo htmlspecialchars($plant['light']); ?></span></li>
                    <li><strong>💧 Watering:</strong> <span id="plant-water"><?php echo htmlspecialchars($plant['water']); ?></span></li>
                    <li><strong>🌿 Soil Type:</strong> <span id="plant-soil"><?php echo htmlspecialchars($plant['soil']); ?></span></li>
                    <li><strong>📌 Benefits:</strong> <span id="plant-benefits"><?php echo htmlspecialchars($plant['benefits']); ?></span></li>
                </ul>
            </div>
        </div>
        <?php else: ?>
        <p>Plant not found!</p>
        <?php endif; ?>
        <button onclick="goBack()" class="back-button">⬅ Back</button>
    </section>

    <script>
      function loadPlantDetails() {
    const urlParams = new URLSearchParams(window.location.search);
    const plant = urlParams.get('plant');

    let plantData = {
        //indoor
        indoor1: { name: "Aloe Vera", img: "ind1.jpg", light: "Bright, indirect light", water: "Every 2 weeks", soil: "Sandy, well-draining", benefits: "Healing properties, air-purifying" },
        indoor2: { name: "Snake Plant", img: "ind2.jpg", light: "Low to moderate indirect light", water: "Every 2-3 weeks", soil: "Well-draining potting mix", benefits: "Air-purifying, low-maintenance" },
        indoor3: { name: "Peace Lily", img: "indoor.jpg", light: "Low to bright indirect light", water: "Once a week", soil: "Well-draining, moist", benefits: "Air-purifying, beautiful blooms" },
        //outdoor
        outdoor1: { name: "Rose Plant", img: "outdoor1.jpg", light: "Full Sunlight", water: "Daily", soil: "Rich, well-draining", benefits: "Beautiful fragrance, attracts pollinators" },
        outdoor2: { name: "Tulsi (Holy Basil)", img: "outdor2.jpeg.jpg", light: "Full Sunlight", water: "Daily", soil: "Fertile, well-drained", benefits: "Medicinal, spiritual significance" },
        outdoor3: { name: "Ficus", img: "outdoor4.jpg", light: "Bright, indirect to full sunlight", water: "Every 1-2 weeks", soil: "Well-draining", benefits: "Air-purifying, strong aesthetic" },
        //cactus
        cactus1: { name: "Golden Barrel Cactus", img: "cactus1.jpg", light: "Full Sun", water: "Every 3-4 weeks", soil: "Well-draining sandy soil", benefits: "Drought-resistant, low maintenance" },
        cactus2: { name: "Prickly Pear", img: "cactus2.jpg", light: "Full Sun", water: "Every 2-3 weeks", soil: "Cactus mix", benefits: "Edible fruits, easy to grow" },
        cactus3: { name: "Christmas Cactus", img: "cactus3.jpeg.jpg", light: "Indirect Light", water: "Weekly", soil: "Well-draining", benefits: "Winter blooms, beautiful flowers" },
        //showcase
        showcase: { name: "Showcase 1", img: "showcase.jpg", light: "Bright, indirect light", water: "Every 2 weeks", soil: "Sandy, well-draining", benefits: "Healing properties, air-purifying" },
        showcase2: { name: "Showcase 2", img: "showcase2.jpg", light: "Low to moderate indirect light", water: "Every 2-3 weeks", soil: "Well-draining potting mix", benefits: "Air-purifying, low-maintenance" },
        showcase3: { name: "Showcase 3", img: "sc1.jpg", light: "Low to bright indirect light", water: "Once a week", soil: "Well-draining, moist", benefits: "Air-purifying, beautiful blooms" },
        //shrubs
        shrubs1: { name: "Shrubs 1", img: "shrub1.jpeg.jpg", light: "Bright, indirect light", water: "Every 2 weeks", soil: "Sandy, well-draining", benefits: "Healing properties, air-purifying" },
        shrubs2: { name: "Shrubs 2", img: "shrub2.jpeg.jpg", light: "Low to moderate indirect light", water: "Every 2-3 weeks", soil: "Well-draining potting mix", benefits: "Air-purifying, low-maintenance" },
        shrubs3: { name: "Shrubs 3", img: "shrub3.jpg", light: "Low to bright indirect light", water: "Once a week", soil: "Well-draining, moist", benefits: "Air-purifying, beautiful blooms" },
        //water
        water1: { name: "Water 1", img: "water1.jpg", light: "Bright, indirect light", water: "Every 2 weeks", soil: "Sandy, well-draining", benefits: "Healing properties, air-purifying" },
        water2: { name: "Water 2", img: "water 2.jpg", light: "Low to moderate indirect light", water: "Every 2-3 weeks", soil: "Well-draining potting mix", benefits: "Air-purifying, low-maintenance" },
        water3: { name: "Water 3", img: "water 3.jpg", light: "Low to bright indirect light", water: "Once a week", soil: "Well-draining, moist", benefits: "Air-purifying, beautiful blooms" },
    };

    if (plantData[plant]) {
        document.getElementById("plant-name").innerText = plantData[plant].name;
        document.getElementById("plant-image").src = plantData[plant].img;
        document.getElementById("plant-title").innerText = plantData[plant].name;
        document.getElementById("plant-light").innerText = plantData[plant].light;
        document.getElementById("plant-water").innerText = plantData[plant].water;
        document.getElementById("plant-soil").innerText = plantData[plant].soil;
        document.getElementById("plant-benefits").innerText = plantData[plant].benefits;
    } else {
        document.querySelector(".plant-container").innerHTML = `<h2>❌ No plant found!</h2><p>Invalid or missing plant selection.</p>`;
    }
}

function goBack() {
    window.history.back();
    return;
    // Store the referrer (previous page) in the URL
   /* const urlParams = new URLSearchParams(window.location.search);
    const plant = urlParams.get('plant');
    
    // Check if plant type is specified to determine which page to go back to
    if (plant && plant.includes('indoor')) {
        window.location.href = 'index.html#indoor-plants-page';
    } else if (plant && plant.includes('outdoor')) {
        window.location.href = 'index.html#outdoor-plants-page';
    } else if (plant && plant.includes('cactus')) {
        window.location.href = 'index.html#cactus-page';
    } else if (plant && plant.includes('shrubs')) {
        window.location.href = 'index.html#shrubs-page';
    } else if (plant && plant.includes('showcase')) {
        window.location.href = 'index.html#showcase-plants-page';
    } else if (plant && plant.includes('water')) {
        window.location.href = 'index.html#water-plants-page';
    } else {
        // Default fallback to home page
        window.location.href = 'index.html';
    } */
}

// window.onload = loadPlantDetails;
    </script>
</body>
</html>