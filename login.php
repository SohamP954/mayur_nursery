<?php
session_start(); // Start the session at the beginning
include 'db.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['username'];
    $password = $_POST['password'];

    $sql = "SELECT id, password FROM users WHERE username = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("s", $username);
    $stmt->execute();
    $stmt->store_result();
    $stmt->bind_result($user_id, $hashed_password);
    $stmt->fetch();

    if ($stmt->num_rows > 0 && password_verify($password, $hashed_password)) {
        // Successful login - store user info in session
        $_SESSION['user_id'] = $user_id;
        $_SESSION['username'] = $username;
        $_SESSION['loggedin'] = true;

        // Redirect to index.php
        header("Location: index.php");
        exit();
    } else {
        echo "Invalid username or password.";
    }

    $stmt->close();
    $conn->close();
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login/Register - Mayur Nursery</title>
    <link rel="stylesheet" href="styles.css"> <!-- Link to your main CSS file -->
    <style>
    /* Full-page background */
    body {
        font-family: Arial, sans-serif;
        background-image: url('id1.jpg');
        background-size: cover;
        background-position: center;
        background-repeat: no-repeat;
        display: flex;
        justify-content: center;
        align-items: center;
        height: 100vh;
        margin: 0;
    }
/* Login */
    .login-container {
    background: #eef5ea;
    padding: 30px; /* already giving spacing inside */
    border-radius: 10px;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
    text-align: center;
    width: 350px;
    box-sizing: border-box; /* ensures padding doesn't exceed width */
}

/* Input Fields */
.login-container input {
    width: calc(100% - 20px); /* accounts for left/right internal padding */
    padding: 10px;
    margin: 10px 10px; /* gives equal margin on all sides */
    border: 1px solid #28a745;
    border-radius: 5px;
    font-size: 16px;
    box-sizing: border-box;
}

    /* Buttons */
    .login-container button {
        width: 100%;
        padding: 10px;
        background: #28a745;
        color: white;
        border: none;
        font-size: 16px;
        border-radius: 5px;
        cursor: pointer;
        transition: 0.3s;
    }

    .login-container button:hover {
        background: #218838;
    }

    /* Toggle Between Login & Register */
    .toggle-form {
        margin-top: 15px;
        cursor: pointer;
        color: #28a745;
    }
    </style>
</head>
<body>
    <?php 
    // include 'components/navbar.php'; 
    ?>

    <div class="login-container">
        <h2 id="form-title">Login</h2>
        <form id="login-form" action="" method="POST">
            <input type="text" name="username" placeholder="Username" required>
            <input type="password" name="password" placeholder="Password" required>
            <button type="submit">Login</button>
        </form>

        <form id="register-form" action="register.php" method="POST" style="display: none;">
            <input type="text" name="new-username" placeholder="Username" required>
            <input type="email" name="email" placeholder="Email" required>
            <input type="password" name="new-password" placeholder="Password" required>
            <button type="submit">Register</button>
        </form>

        <p class="toggle-form" onclick="toggleForm()">Don't have an account? Register</p>
    </div>

    <script>
        function toggleForm() {
            let formTitle = document.getElementById("form-title");
            let loginForm = document.getElementById("login-form");
            let registerForm = document.getElementById("register-form");
            let toggleText = document.querySelector(".toggle-form");
    
            if (formTitle.innerText === "Login") {
                formTitle.innerText = "Register";
                loginForm.style.display = "none";
                registerForm.style.display = "block";
                toggleText.innerText = "Already have an account? Login";
            } else {
                formTitle.innerText = "Login";
                loginForm.style.display = "block";
                registerForm.style.display = "none";
                toggleText.innerText = "Don't have an account? Register";
            }
        }
    </script>

</body>
</html>
