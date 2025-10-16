 //JavaScript for hiding/showing nav (fallback) -->
   /* <script>
        const nav = document.querySelector("nav");
        if (nav) {
            function toggleNavbar() {
                if (window.scrollY < window.innerHeight * 0.6) {
                    nav.classList.add("hide-nav");
                } else {
                    nav.classList.remove("hide-nav");
                }
            }

            window.addEventListener("scroll", toggleNavbar);
            window.addEventListener("load", toggleNavbar);
        }
    </script>*/


// Function to show a specific page and hide others
function showPage(pageId) {
    // Hide all pages
    document.querySelectorAll('.page').forEach(page => {
        page.classList.remove('active-page');
    });
    
    // Show the selected page
    document.getElementById(pageId).classList.add('active-page');
}

// Search functionality
document.getElementById("search-button").addEventListener("click", function() {
    let query = document.getElementById("search-input").value.toLowerCase().trim();

    // Define the search terms and their respective pages
    const plantPages = {
        "indoor": "/indoor.php",
        "indoor plants": "/indoor.php",
        "outdoor": "/outdoor.php",
        "outdoor plants": "/outdoor.php",
        "cactus": "/cactus.php",
        "hangings": "/hangings.php",
        "showcase": "/showcase.php",
        "showcase plants": "/showcase.php",
        "water": "/water.php",
        "water plants": "/water.php"
    };

    // Show the corresponding page if the search query matches
    if (plantPages[query]) {
        window.location.href = plantPages[query];
    } else {
        alert("Plant not found! Please search for Indoor, Outdoor, Cactus, Shrubs, Showcase, or Water plants.");
    }
});

// Handle hash-based navigation for back button functionality
window.addEventListener('hashchange', function() {
const hash = window.location.hash;
if (hash) {
const pageId = hash.substring(1); // Remove the # character
showPage(pageId);
}
});

// Check for hash on page load
window.addEventListener('load', function() {
const hash = window.location.hash;
if (hash) {
const pageId = hash.substring(1); // Remove the # character
showPage(pageId);
}
});

// Toggle between login and register forms
/*  function toggleForm() {
    let formTitle = document.getElementById("form-title");
    let form = document.getElementById("login-form");
    let toggleText = document.querySelector(".toggle-form");

    if (formTitle.innerText === "Login") {
        formTitle.innerText = "Register";
        form.innerHTML = `
            <input type="text" id="new-username" placeholder="Username" required style="width: 100%; padding: 10px; margin: 10px 0; border: 1px solid #ddd; border-radius: 4px;">
            <input type="email" id="email" placeholder="Email" required style="width: 100%; padding: 10px; margin: 10px 0; border: 1px solid #ddd; border-radius: 4px;">
            <input type="password" id="new-password" placeholder="Password" required style="width: 100%; padding: 10px; margin: 10px 0; border: 1px solid #ddd; border-radius: 4px;">
            <button type="submit" id="register-button" style="width: 100%; padding: 10px; background-color: #3498db; color: white; border: none; border-radius: 4px; cursor: pointer;">Register</button>
        `;
        toggleText.innerText = "Already have an account? Login";

        // Add event listener for registration
        document.getElementById("register-button").addEventListener("click", function(event) {
            event.preventDefault();
            let newUsername = document.getElementById("new-username").value.trim();
            let email = document.getElementById("email").value.trim();
            let newPassword = document.getElementById("new-password").value.trim();

            if (newUsername !== "" && email !== "" && newPassword !== "") {
                //alert("Registration successful! Welcome to Mayur Nursery.");//
                showPage("home-page");
            } else {
                alert("Please fill in all fields correctly.");
            }
        });
    } else {
        formTitle.innerText = "Login";
        form.innerHTML = `
            <input type="text" id="username" placeholder="Username" required style="width: 100%; padding: 10px; margin: 10px 0; border: 1px solid #ddd; border-radius: 4px;">
            <input type="password" id="password" placeholder="Password" required style="width: 100%; padding: 10px; margin: 10px 0; border: 1px solid #ddd; border-radius: 4px;">
            <button type="submit" style="width: 100%; padding: 10px; background-color: #3498db; color: white; border: none; border-radius: 4px; cursor: pointer;">Login</button>
        `;
        toggleText.innerText = "Don't have an account? Register";

        // Add event listener for login
        form.addEventListener("submit", handleLogin);
    }
}

// Handle login form submission
function handleLogin(event) {
    event.preventDefault();
    let username = document.getElementById("username").value.trim();
    let password = document.getElementById("password").value.trim();

    if (username !== "" && password !== "") {
        //alert("Login successful! Welcome back to Mayur Nursery.");//
        showPage("home-page");
    } else {
        alert("Please enter a valid username and password.");
    }
}

// Add event listener for the initial login form
document.getElementById("login-form").addEventListener("submit", handleLogin);*/