<!-- Navigation Bar -->
<nav class="navbar">
    <div class="nav-logo">
        <a href="/">
            <img src="logo.png" alt="Mayur Nursery 🌿   ">
        </a>
    </div>
    
    <ul class="nav-links">
        <li><a href="/">Home</a></li>
        <li><a href="/indoor.php">Indoor</a></li>
        <li><a href="/outdoor.php">Outdoor</a></li>
        <li><a href="/cactus.php">Cactus</a></li>
        <li><a href="/hangings.php">Hangings</a></li>
        <li><a href="/showcase.php">Fruits</a></li>
        <li><a href="/water.php">Water</a></li>
        
<?php 
    session_start();

    if (!isset($_SESSION['loggedin'])) {
        echo '<li><a href="/login.php" >Login</a></li>';
    } else {
        echo '<li><a href="/logout.php" >Logout</a></li>';
        // echo $_SESSION['username'];

    }
?>
    </ul>
    <div class="search-box">
        <input type="text" id="search-input" placeholder="Search plants...">
        <button id="search-button">🔍</button>
    </div>
</nav>