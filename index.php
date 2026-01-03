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
table{
    text-align: left;
    margin: 10px;
    padding: 10px;
    border: 10px;
}
td{
    margin: 10%;
    padding: 10px;
    text-align:left;
    font-weight: bold;
    font-size:30px;
}
td img{
    margin-left: 20%;
    width: 2cm;
    height:2cm;
}
.menu-toggle {
    /*display: none;  Hidden on desktop */
    flex-direction: column;
    cursor: pointer;
    order: 1; /* Ensures it stays first */
}

.logo {
    color:#3b82f6;
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
       /* display: none;*/
        flex-direction: column;
        width: 100%;
        position: absolute;
        top: 20px;
        left: 0;
        background-color: #0a0a0a;
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

        /* Fixed Navigation Bar */
        nav {
            background-color: #0a0a0a;
            padding: 5px 0;
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
        #contactus{ background-color: #f8f9fa; }
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
    <table>
    <tbody><tr>
    <td><img src="http://localhost/hackathon/Hackathon/LOGO.png" alt=" "></td>
    <td>HACKBLITZ HACKATHON 2025-2026</td>
    </tr>
   </tbody></table>

   <div style="
    width:300px;
    height:200px;
    overflow:hidden;
    border:2px solid black;
  ">

    <div style="
      display:flex;
      width:900px;
      animation: slide 9s infinite;
    ">
      <img src="Hackathon/hack 5.jpg"
           style="width:300px; height:200px;">
      <img src=" Hackathon/hack4.jpg"
           style="width:300px; height:200px;">
      <img src=" Hackathon/hack2.jpg "
           style="width:300px; height:200px;">
    </div>
    </div>
   
</section>

<section id="prizes">
    
    <section style="background-color: #0a0a0a; color: white; padding: 60px 20px; font-family: sans-serif; text-align: center;">
  
  <h2 style="font-size: 32px; margin-bottom: 40px; text-transform: uppercase;">
    HackBlitz <span style="color: #3b82f6;">Prizes</span>
  </h2>

  <div style="display: flex; justify-content: center; gap: 20px; flex-wrap: wrap; max-width: 1000px; margin: 0 auto;">
    
    <div style="flex: 1; min-width: 250px; background: #1a1a1a; border: 2px solid #3b82f6; border-radius: 15px; padding: 30px;">
      <div style="font-size: 40px;">🥇</div>
      <h3 style="margin: 10px 0; color: #3b82f6;">1st Prize</h3>
      <p style="font-size: 36px; font-weight: bold; margin: 10px 0;">₹1,00,000</p>
      <p style="color: #888; font-size: 14px;">Winner Trophy + Internship</p>
    </div>

    <div style="flex: 1; min-width: 250px; background: #1a1a1a; border: 1px solid #333; border-radius: 15px; padding: 30px;">
      <div style="font-size: 40px;">🥈</div>
      <h3 style="margin: 10px 0; color: #ccc;">2nd Prize</h3>
      <p style="font-size: 36px; font-weight: bold; margin: 10px 0;">₹60,000</p>
      <p style="color: #888; font-size: 14px;">Silver Medal + Swag Kit</p>
    </div>

    <div style="flex: 1; min-width: 250px; background: #1a1a1a; border: 1px solid #333; border-radius: 15px; padding: 30px;">
      <div style="font-size: 40px;">🥉</div>
      <h3 style="margin: 10px 0; color: #cd7f32;">3rd Prize</h3>
      <p style="font-size: 36px; font-weight: bold; margin: 10px 0;">₹40,000</p>
      <p style="color: #888; font-size: 14px;">Bronze Medal + Vouchers</p>
    </div>

  </div>
</section>
</section>

<section id="themes">
    <h1>Themes</h1>
    <p>AI, Blockchain, Web3, and more.</p>
</section>

<section id="faq">
   
    <div style="
 max-width: auto;
  margin: auto;
  background-color: #0a0a0a ;
  padding: 30px;
  border-radius: 8px;
  box-shadow: 0 4px 10px rgba(0,0,0,0.1);
">

  <h2 style="
    text-align: center;
    color: #fefeffff;
    font-size: 32px; margin-bottom: 40px; text-transform: uppercase;
  ">
    HackBlitz – Frequently Asked Questions
  </h2>

  <div style="border-bottom: 1px solid #ddd; padding-bottom: 15px; margin-bottom: 20px;">
    <h3 style="color: #0056b3; margin-bottom: 8px;">
      1. What is HackBlitz?
    </h3>
    <p style="color: #fcf8f8ff; line-height: 1.6;">
      HackBlitz is a competitive hackathon designed to bring together innovators, developers, and problem-solvers to build impactful technology solutions within a fixed timeframe.
    </p>
  </div>

  <div style="border-bottom: 1px solid #ddd; padding-bottom: 15px; margin-bottom: 20px;">
    <h3 style="color: #0056b3; margin-bottom: 8px;">
      2. Who is eligible to participate in HackBlitz?
    </h3>
    <p style="color: #fff9f9ff; line-height: 1.6;">
      HackBlitz is open to students and technology enthusiasts from all disciplines. Participants may join individually or as part of a team.
    </p>
  </div>

  <div style="border-bottom: 1px solid #ddd; padding-bottom: 15px; margin-bottom: 20px;">
    <h3 style="color: #0056b3; margin-bottom: 8px;">
      3. Is there any registration or participation fee?
    </h3>
    <p style="color: #fff9f9ff; line-height: 1.6;">
      No. HackBlitz is completely free to participate in.
    </p>
  </div>

  <div style="border-bottom: 1px solid #ddd; padding-bottom: 15px; margin-bottom: 20px;">
    <h3 style="color: #0056b3; margin-bottom: 8px;">
      4. What is the allowed team size?
    </h3>
    <p style="color: #ffffffff; line-height: 1.6;">
      Participants may compete individually or in teams of up to four members.
    </p>
  </div>

  <div style="border-bottom: 1px solid #ddd; padding-bottom: 15px; margin-bottom: 20px;">
    <h3 style="color: #0056b3; margin-bottom: 8px;">
      5. Do participants need prior technical or coding experience?
    </h3>
    <p style="color: #fffefeff; line-height: 1.6;">
      Prior experience is not mandatory. HackBlitz encourages beginners, and mentorship support will be available throughout the event.
    </p>
  </div>

  <div>
    <h3 style="color: #0056b3; margin-bottom: 8px;">
      6. Will participants receive certificates or prizes?
    </h3>
    <p style="color: #fffefeff; line-height: 1.6;">
      Yes. All eligible participants will receive certificates of participation, and outstanding teams will be awarded prizes and recognition.
    </p>
  </div>

</div>

</section>

<section id="about">
    <h1>About Us</h1>
    <p>Learn more about the organizers.</p>
</section>
<section id="contactus">
    

<section style="background-color: #001233; color: white; width: 100%; padding: 60px 0; text-align: center; font-family: sans-serif;">
        
        <div style="max-width: 1200px; margin: 0 auto; padding: 0 20px;">
            <h2 style="font-size: 32px; margin-bottom: 10px;">Contact Us</h2>
            <p style="color: #b3c7d6; margin-bottom: 30px;">We'd love to hear from you!</p>
            <div style="margin: 25px 0;">
                <p style="margin: 8px 0; font-size: 18px;">
                    📞 +91 7744569823
                </p>
                <p style="margin: 8px 0; font-size: 18px;">
                    ✉️ <a href="mailto:contact@example.com" style="color: #4da6ff; text-decoration: none;">sciencecollege@gmail.com</a>
                </p>
            </div>

            <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
            <div style="display: flex; justify-content: center; gap: 30px; margin-top: 30px;">
                <a href="#" style="color: white; font-size: 28px;"><i class="fab fa-instagram"></i></a>
                <a href="#" style="color: white; font-size: 28px;"><i class="fab fa-facebook"></i></a>
                <a href="#" style="color: white; font-size: 28px;"><i class="fab fa-youtube"></i></a>
            </div>
        </div>

    </section>
</section>
</body>
<script>
    const menu = document.querySelector('#mobile-menu');
    const menuLinks = document.querySelector('.nav-list');

    menu.addEventListener('click', function() {
        menuLinks.classList.toggle('active');
       
    });
</script>
</html>
