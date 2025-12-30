<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hackathon Website</title>
    <style>
        /* Enable Smooth Scrolling */
        html {
            scroll-behavior: smooth;
        }

        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
        }
nav {
    display: flex;
    align-items: center;
    justify-content: space-between; /* Pushes hamburger to left and logo to right/center */
    background-color: #333;
    padding: 10px 20px;
    height: 60px;
}

.menu-toggle {
    display: none; /* Hidden on desktop */
    flex-direction: column;
    cursor: pointer;
    order: 1; /* Ensures it stays first */
}

.logo {
    color: white;
    font-size: 1.5rem;
    font-weight: bold;
    order: 2;
}

/* Mobile View (max-width: 768px) */
@media (max-width: 768px) {
    .menu-toggle {
        display: flex; /* Shows on mobile */
    }

    .nav-list {
        display: none;
        flex-direction: column;
        width: 100%;
        position: absolute;
        top: 60px;
        left: 0;
        background-color: #333;
        z-index: 999;
    }

    .nav-list.active {
        display: flex; /* Opens the menu */
    }
}

    nav {
        justify-content: space-between;
        padding: 10px 20px;
    }
}
        /* Fixed Navigation Bar */
        nav {
            background-color: #333;
            padding: 15px 0;
            position: fixed;
            top: 0;
            width: 100%;
            z-index: 1000;
        }

        nav ul {
            list-style-type: none;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
        }

        nav ul li {
            margin: 0 20px;
        }

        nav ul li a {
            color: white;
            text-decoration: none;
            font-weight: bold;
            text-transform: uppercase;
            transition: color 0.3s;
        }

        nav ul li a:hover {
            color: #00d4ff;
        }

        /* Section Styling */
        section {
            height: 100vh; /* Each section takes full screen height */
            padding: 100px 20px;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            border-bottom: 1px solid #ccc;
        }

        #home { background-color: #f4f4f4; }
        #prizes { background-color: #ffffff; }
        #themes { background-color: #e9ecef; }
        #faq { background-color: #ffffff; }
        #about { background-color: #f8f9fa; }
    </style>
</head>
<body>

<?php
// 1. Database Connection
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "hackathon web"; // Database name from your screenshot

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// 2. Fetch Menu Items
$sql = "SELECT label, link FROM menu_bar WHERE status = 1 ORDER BY sort_order ASC";
$result = $conn->query($sql);
?>
<nav>
    <div class="menu-toggle" id="mobile-menu">
        <span class="bar"></span>
       
    </div>

    <div class="logo">HACKBLITZ</div>

    <ul class="nav-list">
        <?php
        // Your existing PHP loop to fetch from menu_bar table
        if ($result->num_rows > 0) {
            while($row = $result->fetch_assoc()) {
                echo "<li><a href='" . $row["link"] . "'>" . $row["label"] . "</a></li>";
            }
        }
        ?>
    </ul>
</nav>

<section id="home">
    <h1>Welcome to Hackathon 2025</h1>
    <p>Scroll down or click the menu to see more!</p>
</section>

<section id="prizes">
    <h1>Prizes</h1>
    <p>Win exciting cash rewards and goodies!</p>
</section>

<section id="themes">
    <h1>Themes</h1>
    <p>AI, Blockchain, Web3, and more.</p>
</section>

<section id="faq">
    <h1>FAQ</h1>
    <p>Frequently Asked Questions.</p>
</section>

<section id="about">
    <h1>About Us</h1>
    <p>Learn more about the organizers.</p>
</section>

</body>
<script>
    const menu = document.querySelector('#mobile-menu');
    const menuLinks = document.querySelector('.nav-list');

    menu.addEventListener('click', function() {
        menuLinks.classList.toggle('active');
        // Optional: Animation for hamburger to X
        menu.classList.toggle('is-active');
    });
</script>
</html>