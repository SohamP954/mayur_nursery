<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mayur Nursery</title>
    <link rel="stylesheet" href="styles.css">
    <script defer src="script.js"></script>
</head>
<body>
    
 <div class="top-bar">
        <div class="logo">
            <img src="logo.png" alt="Mayur Nursery Logo">
        </div>
        <div class="search-box">
            <input type="text" placeholder="Search...">
            <button type="submit">🔍</button>
        </div>
</div>
  <!-- Home Page -->
<div id="home-page" class="">
    <header style="position: relative; height: 400px; overflow: hidden;">
        <!-- Background Video -->
        <video autoplay loop muted playsinline style="position: absolute; top: 0; left: 0; width: 100%; height: 100%; object-fit: cover; z-index: -1;">
            <source src="IMG_2827.mp4" type="video/mp4">
            Your browser does not support the video tag.
        </video>

        <!-- Content inside the header -->
        <div class="header-content" >   
            <h1 class="header-title-animated">WELCOME TO MAYUR NURSERY</h1>
            <p class="header-subtitle-animated">Get Your Desired Plants At Our Place</p>
        </div>
    </header>
<?php
// Define an array of categories
$categories = [
    ['file' => 'indoor.php', 'icon' => 'indooricon2.png', 'name' => 'Indoor Plants'],
    ['file' => 'outdoor.php', 'icon' => 'outdooricon1.png', 'name' => 'Outdoor Plants'],
    ['file' => 'hangings.php', 'icon' => 'hangingsicon1.png', 'name' => 'Hangings'],
    ['file' => 'water.php', 'icon' => 'waterplantsicon1.png', 'name' => 'Water Plants'],
    ['file' => 'cactus.php', 'icon' => 'cactusicon1.png', 'name' => 'Cactus'],
    ['file' => 'showcase.php', 'icon' => 'fruiticon.png', 'name' => 'Fruit Plants'],
];
?>

<!-- Plant Categories Section -->
<section class="plant-categories">
    <?php foreach ($categories as $category): ?>
        <a href="<?php echo $category['file']; ?>" class="category-item">
            <img src="<?php echo $category['icon']; ?>" alt="<?php echo $category['name']; ?>">
            <p><?php echo $category['name']; ?></p>
        </a>
    <?php endforeach; ?>
</section>

        
         <!-- About Nursery Section with Sliding Images -->
    <div class="about-carousel-wrapper">
        <div class="about-carousel">
            <div class="slide" style="background-image: url('slide1.jpeg');">
                <div class="overlay-text">About Us</div>
            </div>
            <div class="slide" style="background-image: url('slide2.jpg');">
                <div class="overlay-text">Bringing Nature to Your Home</div>
            </div>
            <div class="slide" style="background-image: url('slide3.jpg');">
                <div class="overlay-text">Explore Our Beautiful Plant Collection</div>
            </div>
            <div class="slide" style="background-image: url('cactush.jpg');">
                <div class="overlay-text">Greenery That Inspires</div>
            </div>
            <div class="slide" style="background-image: url('cactusbackground.jpg');">
                <div class="overlay-text">Grow with Us</div>
            </div>
             <div class="slide" style="background-image: url('mayurnursery.jpg');">
                <div class="overlay-text">WELCOME</div>
            </div>
        </div>
    </div>

    <!-- ✅ NEW About Us Section -->
    <?php include 'components/about_section.php'; ?>

    <!-- ✅ NEW Gift Section (added just before Bestsellers) -->
    <section class="gift-section">
        <div class="gift-container">
          <div class="gift-text">
            <h2>More Than a Gift — A Growing Memory</h2>
            <p>
              Whether it's a birthday, anniversary, housewarming, or just because — a living plant is a gift that lasts and grows with time. 
            </p>
            <p><strong>Surprise your loved ones with nature’s charm.</strong> Choose from our wide range of low-maintenance and stylish plants — perfect for any occasion!</p>
             <a href="indoor.php" class="gift-button">Send a Green Gift</a>
          </div>
          <div class="gift-image">
            <img src="gift1.png" alt="Giftable Plants" />
          </div>
        </div>
      </section>

      

  <!-- plant-sets-section -->
      <section class="plant-sets-section">
        <div class="plant-sets-container">
          <div class="plant-sets-image">
            <img src="sets.png" alt="Curated Plant Sets">
          </div>
          <div class="plant-sets-text">
            <h2>Green Looks, No Guesswork</h2>
            <p>Want to green up your space but not sure what fits? Our curated plant bundles take the guesswork out of styling. Each set is designed to bring life and balance into any room with zero stress.</p>
            <p><strong>Skip the search — get a complete set that suits your vibe.</strong> Explore our ready-to-go combos now!</p>
             <a href="indoor.php" class="btn-shop">Browse Plant Sets</a>
          </div>
        </div>
      </section>



   <!-- office-plants-section --> 
      <section class="office-plants-section">
        <div class="office-plants-container">
          <div class="office-plants-text">
            <h2 class="section-title">Bring Nature to Your Work Desk</h2>
            <p class="section-description">
              Is your workspace missing a touch of nature? Indoor plants can refresh your office environment and uplift your mood. They're not just decoration — they inspire better focus and reduce stress.
            </p>
            <p class="section-description bold">
              Create a more vibrant workspace today! 
            </p>
            <p class="section-description">
              Explore our curated selection of office-friendly plants designed to thrive indoors. Shop now or visit our online store to bring greenery to your desk.
            </p>
             <a href="indoor.php" class="office-button">Explore Office Plants</a>
          </div>
          <div class="office-plants-image">
            <img src="Office plants.png" alt="Office plants in workspace" />
          </div>
        </div>
      </section>


        <?php include 'components/best_sellers.php'; ?>

        <!-- suggest-plant-section--> 
      <section class="suggest-plant-section">
        <div class="suggest-content">
          <h2>Can't Find the Plant You Love?</h2>
          <p>Tell us what you're looking for! If there's a specific plant you're dreaming of, suggest it here — we'll do our best to get it for you.</p>
         <form id="suggest-form" class="suggest-form">
  <input type="text" id="plant-name" placeholder="Enter the plant name you want..." required>
  <textarea id="plant-reason" placeholder="Why do you love this plant? (Optional)"></textarea>
  <button type="submit">Suggest Plant</button>
</form>
        </div>
        <div class="suggest-image">
          <img src="suggestimg.png" alt="Suggest a Plant">
        </div>
      </section>
      
    </div>



<!--
<div id="login-page" class="page">
    <div class="login-container">
        <h2 id="form-title">Login</h2>
        <form id="login-form">
            <input type="text" id="username" placeholder="Username" required>
            <input type="password" id="password" placeholder="Password" required>
            <button type="submit">Login</button>
        </form>
        <p class="toggle-form" onclick="toggleForm()">Don't have an account? Register</p>
    </div>
</div>

-->
    <?php include 'components/footer.php'; ?>
<script>
document.getElementById("suggest-form").addEventListener("submit", function(event) {
  event.preventDefault(); // Prevent form from submitting normally

  const plant = document.getElementById("plant-name").value.trim();
  const reason = document.getElementById("plant-reason").value.trim();
  const phone = "918767914810"; // Replace with your WhatsApp number without '+' and spaces

  let message = `Hello! I would like to suggest a plant.\n\n🌱 Plant Name: ${plant}`;
  if (reason) {
    message += `\n💬 Reason: ${reason}`;
  }

  // Encode message for URL
  const encodedMessage = encodeURIComponent(message);
  const whatsappURL = `https://wa.me/${phone}?text=${encodedMessage}`;

  // Open WhatsApp
  window.open(whatsappURL, '_blank');
});
</script>

</body>
</html>
<script>
    document.querySelector('.top-bar .search-box button').addEventListener('click', function () {
        const query = document.querySelector('.top-bar .search-box input').value.toLowerCase().trim();

        // Map of searchable keywords to their corresponding PHP pages
        const pages = {
            "indoor": "indoor.php",
            "indoor plant": "indoor.php",
            "indoor plants": "indoor.php",
            "outdoor": "outdoor.php",
            "outdoor plant": "outdoor.php",
            "cactus": "cactus.php",
            "hangings": "hangings.php",
            "showcase": "showcase.php",
            "water": "water.php",
            "water plant": "water.php",
            "hanging": "hangings.php",
            "login": "login.php"
        };

        // Redirect to matching page or show alert
        if (pages[query]) {
            window.location.href = pages[query];
        } else {
            alert("No matching section found. Try: indoor, outdoor, cactus, etc.");
        }
    });
</script>
