<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hackathon Website</title>
    <style>
       
      
html {
    scroll-behavior: smooth;
}

body {
    font-family: Arial, sans-serif;
    margin: 0;
    padding: 0;
}

.nav-list li a:hover {
    color: #00d4ff;
} 

nav {
    display: flex;
    align-items: center;
    justify-content: space-between;
    background: rgba(15, 23, 42, 0.8); /* Glass effect */
    backdrop-filter: blur(12px);
    -webkit-backdrop-filter: blur(12px);
    padding: 0 5%; /* Percentage padding scales better */
    height: 70px;
    position: fixed;
    top: 0;
    left: 0;
    right: 0; /* Ensures it stretches to edges without width: 100% bugs */
    z-index: 1000;
    box-sizing: border-box; /* Crucial: Keeps padding inside */
}

.logo {
    color: #3b82f6;
    font-size: 1.5rem;
    font-weight: 800;
    flex-shrink: 0; /* Prevents the logo from squishing */
}

.nav-list {
    list-style: none;
    display: flex;
    margin: 0;
    padding: 0;
    gap: 30px; /* Modern way to space items */
    align-items: center;
}

.nav-list li {
    white-space: nowrap; /* Prevents "Contact Us" from wrapping to 2 lines */
}

.nav-list li a {
    color: white;
    text-decoration: none;
    font-weight: 900;
    font-size: 1.2rem;
    text-transform: uppercase;
    transition: 0.3s;
}

.nav-list li a:hover {
    color: #00d4ff;
}
/* Responsive: When the screen gets too small, hide the list */
@media (max-width: 950px) {
    .nav-list {
        display: none; /* Hides links before they overlap the logo */
    }
    .menu-toggle {
        display: flex !important; /* Shows hamburger icon */
    }
}


.menu-toggle {
    display: none; 
    flex-direction: column;
    cursor: pointer;
}
.card{
    padding: 5px;
  transition: transform .2s; /* Animation */
  width: 170px;
  height: 25px;
  margin: 0 auto;
}
.card:hover{
    transform: scale(1.2);
}
.learnmore{

  background-color: green;
  transition: transform .3s; /* Animation */
  width: 120px;
  height: 20px;
  margin: 0 auto;
}
.learnmore:hover{
    transform: scale(1.2);
}
.chip {
  display: inline-block;
  padding: 0 25px;
  height: 50px;
  font-size: 16px;
  line-height: 50px;
  border-radius: 25px;
  background-color: #06b6d4;
  margin:auto;
  font-size:medium;
  font-weight: bold;
  transition: transform .3s;
}
.chip:hover{
    transform: scale(1.2);
}

.chip img {
  float: left;
  margin: 0 10px 0 -25px;
  height: 50px;
  width: 50px;
  border-radius: 50%;
}

/* @media (max-width: 768px) {
    .menu-toggle {
        display: flex; 
    }

    .nav-list {
        display: none; 
        flex-direction: column;
        width: 100%;
        position: absolute;
        top: 60px; 
        left: 0;
        background-color: #0a0a0a;
    }

    .nav-list.active {
        display: flex; 
    }
} */

section {
    min-height: 100vh; 
    padding: 100px 20px;
    margin:2%;
    display: flex;
    flex-direction: column;
    align-items: center;
    justify-content: center;
    border-bottom: 1px solid #ccc;
    box-sizing: border-box;
}

#themes .theme-card {
    transition: all 0.3s ease;
    cursor: pointer;
}

#themes .theme-card:hover {
    transform: translateY(-10px);
    box-shadow: 0 10px 30px rgba(6, 182, 212, 0.3);
    filter: brightness(1.1);
}
.timeline-container {
    position: relative;
    max-width: 800px;
    margin: 50px auto;
    padding: 20px 0;
}

/* The vertical line */
.timeline-container::after {
    content: '';
    position: absolute;
    width: 2px;
    background: #334155;
    top: 0;
    bottom: 0;
    left: 20px; /* Aligned to the left for mobile-friendly view */
}

.timeline-item {
    padding: 20px 40px;
    position: relative;
    text-align: left;
}

/* The glowing dots */
.timeline-dot {
    position: absolute;
    width: 16px;
    height: 16px;
    left: 13px;
    background-color: #06b6d4;
    border: 4px solid #0f172a;
    border-radius: 50%;
    z-index: 1;
    box-shadow: 0 0 10px #06b6d4;
}

.timeline-content {
    background: #1e293b;
    padding: 20px;
    border-radius: 12px;
    border: 1px solid #334155;
    transition: 0.3s;
}

.timeline-content:hover {
    border-color: #06b6d4;
    transform: scale(1.02);
}

.timeline-content h3 {
    margin: 0 0 10px;
    color: #06b6d4;
    font-size: 1.2rem;
}

.timeline-content p {
    margin: 0;
    color: #cbd5e1;
    font-size: 0.9rem;
}

.timeline-date {
    display: block;
    margin-top: 10px;
    font-weight: bold;
    color: #3b82f6;
    font-size: 0.8rem;
}

/* Desktop Adjustment: Zig-Zag look */
@media (min-width: 768px) {
    .timeline-container::after {
        left: 50%;
    }
    .timeline-item {
        width: 50%;
        box-sizing: border-box;
    }
    .timeline-item:nth-child(even) {
        left: 50%;
    }
    .timeline-item:nth-child(odd) {
        left: 0;
        text-align: right;
    }
    .timeline-dot {
        left: auto;
        right: -9px;
    }
    .timeline-item:nth-child(even) .timeline-dot {
        left: -9px;
    }
}
        #home { background-color: #f4f4f4; }
        #prizes { background-color: #ffffff; }
        #themes { background-color: #e9ecef; }
        #faq { background-color: #ffffff; }
        #about { background-color: #f8f9fa; }
        #contactus{ background-color: #f8f9fa; }
    </style>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600;800&display=swap" rel="stylesheet">

<style>
    * {
        font-family: 'Poppins', sans-serif;
    }

    /* Custom thin blue scrollbar */
    ::-webkit-scrollbar {
        width: 8px;
    }
    ::-webkit-scrollbar-track {
        background: #0f172a;
    }
    ::-webkit-scrollbar-thumb {
        background: #3b82f6;
        border-radius: 10px;
    }
</style>
</head>
<body>

<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "hackathon web"; 

$conn = new mysqli($servername, $username, $password, $dbname,3307);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}


$sql = "SELECT label, link FROM `menu_bar` WHERE status = 1 ORDER BY sort_order ASC";
$result = $conn->query($sql);
?>
<nav>
    <div class="menu-toggle" id="mobile-menu">
        <span class="bar"></span>
       
    </div>

    <div class="logo">HACKBLITZ</div>

    <ul class="nav-list">
        <?php
       
        if ($result->num_rows > 0) {
            while($row = $result->fetch_assoc()) {
                echo "<li><a href='" . $row["link"] . "'>" . $row["label"] . "</a></li>";
            }
        }
        ?>
    </ul>
</nav>
<br><br><br><br>
<section id="home" style="background-color: #0f172a; color: white; ">
    
    <div style="display: flex; align-items: center; gap: 20px; margin-bottom: 40px; border-bottom: 1px solid #334155; padding-bottom: 20px;">
        <img src="home1.png" alt="Logo" style="height: 250px; width: auto;">
        <div>
            <h1 style="font-size: clamp(30px, 5vw, 45px); font-weight: 900; margin: 0; letter-spacing: 1px;">
                HACK<span style="color: #06b6d4;">BLITZ</span>
            </h1>
            <h2 style="margin: 0; font-size: 1.5rem; color: #cbd5e1;">HACKATHON 2026</h2>
        </div>
    </div>

    <div style="display: flex; justify-content: space-between;  gap: 30px; flex-wrap: wrap;">
        
        <div style="flex: 1; min-width: 300px;">
            <p style="font-size: 18px; color: #cbd5e1; margin: 0; font-weight: bold; text-transform: uppercase;">
                Government Model Science College, Jabalpur
            </p>
            <p style="font-size: 20px; margin: 5px 0 15px 0;">
                Organized By Department <span style="color: #06b6d4;"> Physics Department
            </p>
            <h1 style="font-size: 25px; margin:  5px 0 15px 0;  ">
                24  <span style="color: #06b6d4;">HOURS ⌛ </span>Hackathon
            </h1>
            <p style="font-size: 20px; color: #06b6d4; font-style: italic; margin-bottom: 5px;">
                Where Creativity Meets Technology
            </p>
            <p style="font-size: 24px; font-weight: bold; color: #cbd5e1; letter-spacing: 2px; text-transform: uppercase;">
                Unleash Your Innovation
            </p>


            <div style="margin-top: 25px; background-color: #1e293b; padding: 20px; border-radius: 12px; border: 1px solid #334155; display: inline-block;">
                <p style="margin: 0; font-weight: bold; color: #06b6d4;">📅 15 JANUARY 2026 | 10:00 AM</p>
                <p style="margin: 8px 0 0 0; color: #cbd5e1;">📍 VENUE: Model Science College</p>
                  <a href="register.php" style="display: inline-block; margin-top: 20px; background-color: #06b6d4; color: white; padding: 15px 40px; border-radius: 8px; font-weight: bold; text-decoration: none; text-transform: uppercase; transition: 0.3s;" class="card">
    Register Now 🚀
</a>
            </div>
        </div>
<div style="flex: 1; min-width: 300px; display: flex; justify-content: center;">
    <div style="width: 450px; height: 300px; overflow: hidden; border-radius: 15px; border: 3px solid #334155; position: relative;">
        <div id="image-wrapper" style="display: flex; width: 1350px; transition: 0.8s;">
            <img src="hack 5.jpg" style="width: 450px; height: 300px; object-fit: cover;">
            <img src="hack4.jpg" style="width: 450px; height: 300px; object-fit: cover;">
            <img src="hack2.jpg" style="width: 450px; height: 300px; object-fit: cover;">
        </div>
    </div>
</div>
 
  
</div>
</section>

   <section id="about" style="background-color:#0f172a; text-align: center;">
    
    <div style="max-width: 1000px; margin: 0 auto 40px;">
        <h2 style="color: white; font-size: 35px; text-transform: uppercase; letter-spacing: 2px; margin: 0 0 10px;">
            About Hack<span style="color: #06b6d4;">BLITZ</span>
        </h2>
        <p style="color: #49b1ee; font-weight: bold; font-size: 20px; font-family: monospace; margin-bottom: 20px;">
            &lt; Where Curiosity Meets Code /&gt;
        </p>
<!-- Extra code -->
        <div class="timeline-container">
    <div class="timeline-item">
        <div class="timeline-dot"></div>
        <div class="timeline-content">
            <h3>Registration Phase</h3>
            <p>Sign up and verify your team. Start brainstorming your big idea!</p>
            <span class="timeline-date">Nov - Dec 2025</span>
        </div>
    </div>

    <div class="timeline-item">
        <div class="timeline-dot"></div>
        <div class="timeline-content">
            <h3>Online Assessment</h3>
            <p>Take the quiz to prove your fundamentals and unlock your entry ticket.</p>
            <span class="timeline-date">Jan 05, 2026</span>
        </div>
    </div>

    <div class="timeline-item">
        <div class="timeline-dot"></div>
        <div class="timeline-content">
            <h3>Grand Hackathon</h3>
            <p>24 hours of non-stop coding, mentoring, and pizza at the venue!</p>
            <span class="timeline-date">Jan 15, 2026</span>
        </div>
    </div>

    <div class="timeline-item">
        <div class="timeline-dot"></div>
        <div class="timeline-content">
            <h3>Pitch & Winners</h3>
            <p>Present your prototype to the judges and win the grand prizes.</p>
            <span class="timeline-date">Jan 16, 2026</span>
        </div>
    </div>
</div>

        <p style="color: #cccccc; font-size: 18px; line-height: 1.8; margin: 0;">
            Welcome to HackBlitz, an inclusive event designed for students of all skill levels. Beyond the trophies, 
            our mission is to foster a culture of learning through hands-on workshops, mentorship, and collaborative hacking.
        </p>
    </div>

    <div style="display: flex; flex-wrap: wrap; justify-content: center; gap: 20px; max-width: 1000px; margin: 0 auto;">
        
        <div style="flex: 1; min-width: 280px; background: #1a1a1a; padding: 30px; border-radius: 15px; border: 1px solid #333;">
            <img src="a3.png" alt="What" style="border-radius: 50%; border: 3px solid #007bff; height: 90px; width: 90px; object-fit: cover; margin-bottom: 15px;">
            <h3 style="color: #007bff; margin-bottom: 15px;">What is it?</h3>
            <p style="color: white; font-size: 14px; line-height: 1.6; margin: 0;">
                A time-bound innovation marathon where teams collaborate to build functional prototypes from scratch to solve real-world problems.
            </p>
        </div>

        <div style="flex: 1; min-width: 280px; background: #1a1a1a; padding: 30px; border-radius: 15px; border: 1px solid #333;">
            <img src="a1.png" alt="Why" style="border-radius: 50%; border: 3px solid #007bff; height: 90px; width: 90px; object-fit: cover; margin-bottom: 15px;">
            <h3 style="color: #007bff; margin-bottom: 15px;">How to Start?</h3>
            <p style="color: white; font-size: 14px; line-height: 1.6; margin: 0;">
                Register, form a team, and brainstorm a solution once the theme is revealed. Build your prototype and pitch to industry experts.
            </p>
        </div>

        <div style="flex: 1; min-width: 280px; background: #1a1a1a; padding: 30px; border-radius: 15px; border: 1px solid #333;">
            <img src="a2.png" alt="How" style="border-radius: 50%; border: 3px solid #007bff; height: 90px; width: 90px; object-fit: cover; margin-bottom: 15px;">
            <h3 style="color: #007bff; margin-bottom: 15px;">Why Join?</h3>
            <p style="color: white; font-size: 14px; line-height: 1.6; margin: 0;">
                Bridge the gap between theory and reality. Master new tech stacks, network with recruiters, and build under pressure.
            </p>
        </div>

    </div>
</section>
                 



<section id="themes"style="background-color: #0f172a;">
    
    <div class="theme-card "    style="max-width: 1000px; margin: 0 auto 40px;">
        <h2 style="color: white; font-size: 35px; text-transform: uppercase; letter-spacing: 2px; margin: 0;">
            Hackathon <span style="color: #06b6d4;">Themes</span>
        </h2>
        <p style="color: #49b1ee; font-weight: bold; margin-top: 10px; font-family: 'Courier New', monospace;">&lt; Choose your track /&gt;</p>
    </div>

    <div  style="max-width: 1000px; margin: 0 auto; display: flex; flex-direction: column; gap: 20px;">
        
        <div style="width: 100%; background: linear-gradient(135deg, #e17604, #555589, #2805a4); border-radius: 24px; padding: 40px; box-sizing: border-box; text-align: left; display: flex; flex-wrap: wrap; align-items: center; justify-content: space-between; gap: 20px;">
            <div style="flex: 2; min-width: 280px;">
                <h2 style="font-size: 2rem; color: white; margin-bottom: 15px;">Artificial Intelligence & Machine Learning</h2>
                <p style="font-size: 1.1rem; color: #efe4e4; line-height: 1.6; margin-bottom: 25px;">Develop solutions that use data to make decisions. Think of automated health diagnosis, AI-driven financial advisors, or smart attendance systems.</p>
                <a href="https://www.geeksforgeeks.org/artificial-intelligence/best-artificial-intelligence-project-ideas/" style="display: inline-block; background: #007bff; color: white; text-decoration: none; padding: 12px 30px; border-radius: 50px; font-weight: bold;" class="learnmore">LEARN MORE</a>
            </div>
            <div style="flex: 1; font-size: 70px; text-align: center;">🤖</div>
        </div>

        <div style="display: flex; gap: 20px; flex-wrap: wrap; width: 100%;">
            <div style="flex: 1; min-width: 300px; background: linear-gradient(135deg, #bd53b9, #4f4fa4, #826de7); border-radius: 24px; padding: 35px; box-sizing: border-box; text-align: center; display: flex; flex-direction: column; justify-content: space-between;">
                <h3 style="color: white; font-size: 1.4rem; margin-bottom: 15px;">Fintech & Blockchain Security</h3>
                <p style="color: #efe4e4; font-size: 0.95rem; line-height: 1.6; margin-bottom: 25px;">Create decentralized applications (dApps) or secure payment gateways.</p>
                <a href="https://www.rlims.ac.in/mba-fintech-and-blockchain/"   style="display: inline-block; background: #007bff; color: white; text-decoration: none; padding: 10px 25px; border-radius: 50px; font-weight: bold; align-self: center;" class="learnmore">LEARN MORE</a>
            </div>
            <div style="flex: 1; min-width: 300px; background: linear-gradient(135deg, #2e722f, #84bb50, #b9bf19); border-radius: 24px; padding: 35px; box-sizing: border-box; text-align: center; display: flex; flex-direction: column; justify-content: space-between;">
                <h3 style="color: white; font-size: 1.4rem; margin-bottom: 15px;">Healthcare & Sustainability</h3>
                <p style="color: #efe4e4; font-size: 0.95rem; line-height: 1.6; margin-bottom: 25px;">Use technology for social good. Build apps to monitor health or track carbon footprints.</p>
                <a href="https://www.siemens-healthineers.com/en-in/insights/news/environmental-sustainability-hospitals-getting-started?ef_id=CjwKCAiA-__MBhAKEiwASBmsBDA_Rx9K6KR3BKRdtBbpF0JyC3zQFaMvdutcRIuaX5vFdD6NgbVlURoCC7wQAvD_BwE%3AG%3As&s_kwcid=AL%2191%213%21771212375440%21p%21%21g%21%21sustainability+initiatives+hospital&gad_source=1&gad_campaignid=22942962172&gbraid=0AAAAAD_HlgtKvCA_bt49BeuNwFLiiJx27&gclid=CjwKCAiA-__MBhAKEiwASBmsBDA_Rx9K6KR3BKRdtBbpF0JyC3zQFaMvdutcRIuaX5vFdD6NgbVlURoCC7wQAvD_BwE"   style="display: inline-block; background: #007bff; color: white; text-decoration: none; padding: 10px 25px; border-radius: 50px; font-weight: bold; align-self: center;"class="learnmore">LEARN MORE</a>
            </div>
        </div>

        <div style="display: flex; gap: 20px; flex-wrap: wrap; width: 100%;">
            <div style="flex: 1; min-width: 300px; background: linear-gradient(135deg, #d64c40, #a57a49, #f4fa53); border-radius: 24px; padding: 35px; box-sizing: border-box; text-align: center; display: flex; flex-direction: column; justify-content: space-between;">
                <h3 style="color: white; font-size: 1.4rem; margin-bottom: 15px;">EdTech: Future of Learning</h3>
                <p style="color: #efe4e4; font-size: 0.95rem; line-height: 1.6; margin-bottom: 25px;">Innovate the classroom experience with AR/VR or AI-based tutoring systems.</p>
                <a href="https://www.kwglobal.com/blog/the-future-of-learning-and-development-5-trends-for-2025/"    style="display: inline-block; background: #007bff; color: white; text-decoration: none; padding: 10px 25px; border-radius: 50px; font-weight: bold; align-self: center;" class="learnmore">LEARN MORE</a>
            </div>
            <div style="flex: 1; min-width: 300px; background: linear-gradient(135deg, #3376bc, #6565c6, #d64c40); border-radius: 24px; padding: 35px; box-sizing: border-box; text-align: center; display: flex; flex-direction: column; justify-content: space-between;">
                <h3 style="color: white; font-size: 1.4rem; margin-bottom: 15px;">Smart City & IoT</h3>
                <p style="color: #efe4e4; font-size: 0.95rem; line-height: 1.6; margin-bottom: 25px;">Design systems where devices communicate to save resources, like smart lighting.</p>
                <a href="https://www.rishabhsoft.com/blog/iot-in-smart-cities-applications-benefits"    style="display: inline-block; background: #007bff; color: white; text-decoration: none; padding: 10px 25px; border-radius: 50px; font-weight: bold; align-self: center;" class="learnmore">LEARN MORE</a>
            </div>
        </div>


        <div style="text-align: center;">
        <a href="quiz.php" >
        
    <button type="submit" class="btn-initiate" style=" padding: 12px; margin-top: 25px; 
    background-color: #003813; color: w    font-weight: bold;
}

.nav-list {
    list-style: none;
    display: flex;
    margin: 0;
    padding: 0;
}

.nav-list li {
    margin: 0 20px;
}

.nav-list li a {
    color: white;
    text-decoration: none;
    font-weight: bold;
    text-transform: uppercase;
    transition: color 0.3s;
}

.nav-list li a:hover {
    color: #00d4ff;
}


.menu-toggle {
    display: none; 
    flex-direction: column;
    cursor: pointer;
}

@media (max-width: 768px) {
    .menu-toggle {
        display: flex; 
    }

    .nav-list {
        display: none; 
        flex-direction: column;
        width: 100%;
        position: absolute;
        top: 60px; 
        left: 0;
        background-color: #0a0a0a;
    }

    .nav-list.active {
        display: flex; 
    }
}


section {
    min-height: 100vh; 
    padding: 100px 20px;
    margin:2%;
    display: flex;
    flex-direction: column;
    align-items: center;
    justify-content: center;
    border-bottom: 1px solid #ccc;
    box-sizing: border-box;
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

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "hackathon web"; 

$conn = new mysqli($servername, $username, $password, $dbname,3307);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}


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
       
        if ($result->num_rows > 0) {
            while($row = $result->fetch_assoc()) {
                echo "<li><a href='" . $row["link"] . "'>" . $row["label"] . "</a></li>";
            }
        }
        ?>
    </ul>
</nav>
<br><br><br><br>
<section id="home" style="background-color: #0f172a; color: white; ">
    
    <div style="display: flex; align-items: center; gap: 20px; margin-bottom: 40px; border-bottom: 1px solid #334155; padding-bottom: 20px;">
        <img src="home1.png" alt="Logo" style="height: 250px; width: auto;">
        <div>
            <h1 style="font-size: clamp(30px, 5vw, 45px); font-weight: 900; margin: 0; letter-spacing: 1px;">
                HACK<span style="color: #06b6d4;">BLITZ</span>
            </h1>
            <h2 style="margin: 0; font-size: 1.5rem; color: #cbd5e1;">HACKATHON 2026</h2>
        </div>
    </div>

    <div style="display: flex; justify-content: space-between;  gap: 30px; flex-wrap: wrap;">
        
        <div style="flex: 1; min-width: 300px;">
            <p style="font-size: 18px; color: #cbd5e1; margin: 0; font-weight: bold; text-transform: uppercase;">
                Government Model Science College, Jabalpur
            </p>
            <p style="font-size: 20px; margin: 5px 0 15px 0;">
                Organized By  <span style="color: #06b6d4;"> Physics Department
            </p>
            <h1 style="font-size: 25px; margin:  5px 0 15px 0;  ">
                24  <span style="color: #06b6d4;">HOURS ⌛ </span>Hackathon
            </h1>
            <p style="font-size: 20px; color: #06b6d4; font-style: italic; margin-bottom: 5px;">
                Where Creativity Meets Technology
            </p>
            <p style="font-size: 24px; font-weight: bold; color: #cbd5e1; letter-spacing: 2px; text-transform: uppercase;">
                Unleash Your Innovation
            </p>

            <p style="color: #cbd5e1; font-size: 1.1rem; margin-top: 20px; line-height: 1.6;"> 
    Don't just participate, prove your worth. <br>
    <span style="color: #06b6d4; font-weight: bold;">Choose a theme, clear the assessment, and unlock your exclusive HackBlitz certificate. 🎓" ⚡</span>
</p>

            <div style="margin-top: 25px; background-color: #1e293b; padding: 20px; border-radius: 12px; border: 1px solid #334155; display: inline-block;">
                <p style="margin: 0; font-weight: bold; color: #06b6d4;">📅 15 JANUARY 2026 | 10:00 AM</p>
                <p style="margin: 8px 0 0 0; color: #cbd5e1;">📍 VENUE: Model Science College</p>
            </div>
        </div>
<div style="flex: 1; min-width: 300px; display: flex; justify-content: center;">
    <div style="width: 450px; height: 300px; overflow: hidden; border-radius: 15px; border: 3px solid #334155; position: relative;">
        <div id="image-wrapper" style="display: flex; width: 1350px; transition: 0.8s;">
            <img src="hack 5.jpg" style="width: 450px; height: 300px; object-fit: cover;">
            <img src="hack4.jpg" style="width: 450px; height: 300px; object-fit: cover;">
            <img src="hack2.jpg" style="width: 450px; height: 300px; object-fit: cover;">
        </div>
    </div>
</div>
 
  
</div>
</section>

<section id="prizes" style="background-color: #0f172a; color: white; padding: 60px 20px; min-height: 100vh; text-align: center;">
  
  <h2 style="font-size: 32px; margin-bottom: 40px; text-transform: uppercase; font-family: sans-serif;">
    HackBlitz <span style="color: #3b82f6;">Prizes</span>
  </h2>

  <div style="display: flex; flex-direction: column; gap: 20px; max-width: 1000px; margin: 0 auto; font-family: sans-serif;">
    
    <div style="background: #1a1a1a; border: 2px solid #3b82f6; border-radius: 15px; padding: 30px; width: 100%; box-sizing: border-box;">
      <div style="font-size: 50px;">🥇</div>
      <h3 style="margin: 10px 0; color: #3b82f6; text-transform: uppercase;">1st Prize</h3>
      <p style="font-size: clamp(30px, 5vw, 40px); font-weight: bold; margin: 10px 0;">₹1,00,000</p>
      <p style="color: #94a3b8; font-size: 14px;">Winner Trophy + Internship</p>
    </div>

    <div style="display: flex; gap: 20px; flex-wrap: wrap; justify-content: center;">
      
      <div style="flex: 1; min-width: 280px; background: #1a1a1a; border: 1px solid #333; border-radius: 15px; padding: 30px;">
        <div style="font-size: 40px;">🥈</div>
        <h3 style="margin: 10px 0; color: #ccc;">2nd Prize</h3>
        <p style="font-size: 32px; font-weight: bold; margin: 10px 0;">₹60,000</p>
        <p style="color: #888; font-size: 14px;">Silver Medal + Swag Kit</p>
      </div>

      <div style="flex: 1; min-width: 280px; background: #1a1a1a; border: 1px solid #333; border-radius: 15px; padding: 30px;">
        <div style="font-size: 40px;">🥉</div>
        <h3 style="margin: 10px 0; color: #cd7f32;">3rd Prize</h3>
        <p style="font-size: 32px; font-weight: bold; margin: 10px 0;">₹40,000</p>
        <p style="color: #888; font-size: 14px;">Bronze Medal + Vouchers</p>
      </div>

    </div>
  </div>
</section>

<section id="themes" style="background-color: #0f172a;">
    
    <div style="max-width: 1000px; margin: 0 auto 40px;">
        <h2 style="color: white; font-size: 35px; text-transform: uppercase; letter-spacing: 2px; margin: 0;">
            Hackathon <span style="color: #06b6d4;">Themes</span>
        </h2>
        <p style="color: #49b1ee; font-weight: bold; margin-top: 10px;text-align:center; font-family: 'Courier New', monospace;">&lt; Choose your track /&gt;</p>
    </div>

    <div style="max-width: 1000px; margin: 0 auto; display: flex; flex-direction: column; gap: 20px;">
        
        <div style="width: 100%; background: linear-gradient(135deg, #e17604, #555589, #2805a4); border-radius: 24px; padding: 40px; box-sizing: border-box; text-align: left; display: flex; flex-wrap: wrap; align-items: center; justify-content: space-between; gap: 20px;">
            <div style="flex: 2; min-width: 280px;">
                <h2 style="font-size: 2rem; color: white; margin-bottom: 15px;">Artificial Intelligence & Machine Learning</h2>
                <p style="font-size: 1.1rem; color: #efe4e4; line-height: 1.6; margin-bottom: 25px;">Develop solutions that use data to make decisions. Think of automated health diagnosis, AI-driven financial advisors, or smart attendance systems.</p>
                <a href="#" style="display: inline-block; background: #007bff; color: white; text-decoration: none; padding: 12px 30px; border-radius: 50px; font-weight: bold;">LEARN MORE</a>
            </div>
            <div style="flex: 1; font-size: 70px; text-align: center;">🤖</div>
        </div>

        <div style="display: flex; gap: 20px; flex-wrap: wrap; width: 100%;">
            <div style="flex: 1; min-width: 300px; background: linear-gradient(135deg, #bd53b9, #4f4fa4, #826de7); border-radius: 24px; padding: 35px; box-sizing: border-box; text-align: center; display: flex; flex-direction: column; justify-content: space-between;">
                <h3 style="color: white; font-size: 1.4rem; margin-bottom: 15px;">Fintech & Blockchain Security</h3>
                <p style="color: #efe4e4; font-size: 0.95rem; line-height: 1.6; margin-bottom: 25px;">Create decentralized applications (dApps) or secure payment gateways.</p>
                <a href="#" style="display: inline-block; background: #007bff; color: white; text-decoration: none; padding: 10px 25px; border-radius: 50px; font-weight: bold; align-self: center;">LEARN MORE</a>
            </div>
            <div style="flex: 1; min-width: 300px; background: linear-gradient(135deg, #2e722f, #84bb50, #b9bf19); border-radius: 24px; padding: 35px; box-sizing: border-box; text-align: center; display: flex; flex-direction: column; justify-content: space-between;">
                <h3 style="color: white; font-size: 1.4rem; margin-bottom: 15px;">Healthcare & Sustainability</h3>
                <p style="color: #efe4e4; font-size: 0.95rem; line-height: 1.6; margin-bottom: 25px;">Use technology for social good. Build apps to monitor health or track carbon footprints.</p>
                <a href="#" style="display: inline-block; background: #007bff; color: white; text-decoration: none; padding: 10px 25px; border-radius: 50px; font-weight: bold; align-self: center;">LEARN MORE</a>
            </div>
        </div>

        <div style="display: flex; gap: 20px; flex-wrap: wrap; width: 100%;">
            <div style="flex: 1; min-width: 300px; background: linear-gradient(135deg, #d64c40, #a57a49, #f4fa53); border-radius: 24px; padding: 35px; box-sizing: border-box; text-align: center; display: flex; flex-direction: column; justify-content: space-between;">
                <h3 style="color: white; font-size: 1.4rem; margin-bottom: 15px;">EdTech: Future of Learning</h3>
                <p style="color: #efe4e4; font-size: 0.95rem; line-height: 1.6; margin-bottom: 25px;">Innovate the classroom experience with AR/VR or AI-based tutoring systems.</p>
                <a href="#" style="display: inline-block; background: #007bff; color: white; text-decoration: none; padding: 10px 25px; border-radius: 50px; font-weight: bold; align-self: center;">LEARN MORE</a>
            </div>
            <div style="flex: 1; min-width: 300px; background: linear-gradient(135deg, #3376bc, #6565c6, #d64c40); border-radius: 24px; padding: 35px; box-sizing: border-box; text-align: center; display: flex; flex-direction: column; justify-content: space-between;">
                <h3 style="color: white; font-size: 1.4rem; margin-bottom: 15px;">Smart City & IoT</h3>
                <p style="color: #efe4e4; font-size: 0.95rem; line-height: 1.6; margin-bottom: 25px;">Design systems where devices communicate to save resources, like smart lighting.</p>
                <a href="#" style="display: inline-block; background: #007bff; color: white; text-decoration: none; padding: 10px 25px; border-radius: 50px; font-weight: bold; align-self: center;">LEARN MORE</a>
            </div>
        </div>

        <div style="text-align: center;">
        <a href="quiz.php" >
        
    <button type="submit" class="btn-initiate" style=" padding: 12px; margin-top: 25px; 
    background-color: #003813; color: white; border: none; border-radius: 8px;
     font-weight: bold; cursor: pointer; text-align:center;
     font-size: 26px; text-transform: uppercase;">
        Initiate Assessment ⚡
    </button>
   </a>
    </div>
    </div>
</section>
<section id="faq" style="background-color: #0f172a; ">
  <h2 style="text-align: center; color: white; font-size: 32px; margin-bottom: 50px; text-transform: uppercase;">
    Hack<span style="color: #06b6d4;">BLITZ</span> – FAQ
  </h2>

  <div style="width: 100%; margin: 0 auto;">

    <div style="border-bottom: 1px solid #334155; padding-bottom: 20px; margin-bottom: 20px; text-align: left;">
      <h3 style="color: #007bff; margin: 0 0 10px 0; font-size: 1.2rem;">1. What is HackBlitz?</h3>
      <p style="color: #cbd5e1; line-height: 1.6; margin: 0;">
        HackBlitz is a competitive hackathon designed to bring together innovators and developers...
      </p>
    </div>
      <div style="border-bottom: 1px solid #334155; padding-bottom: 20px; margin-bottom: 20px;">
      <h3 style="color: #007bff; margin: 0 0 10px 0; font-size: 1.2rem;">2. Who is eligible?</h3>
      <p style="color: #cbd5e1; line-height: 1.6; margin: 0;">
        It is open to students and technology enthusiasts from all disciplines. Participants may join individually or in a team.
      </p>
    </div>

    <div style="border-bottom: 1px solid #334155; padding-bottom: 20px; margin-bottom: 20px;">
      <h3 style="color: #007bff; margin: 0 0 10px 0; font-size: 1.2rem;">3. Is there a fee?</h3>
      <p style="color: #cbd5e1; line-height: 1.6; margin: 0;">No. HackBlitz is completely free to participate in.</p>
    </div>

    <div style="border-bottom: 1px solid #334155; padding-bottom: 20px; margin-bottom: 20px;">
      <h3 style="color: #007bff; margin: 0 0 10px 0; font-size: 1.2rem;">4. What is the allowed team size?</h3>
      <p style="color: #cbd5e1; line-height: 1.6; margin: 0;">Participants may compete individually or in teams of up to four members.</p>
    </div>

    <div style="border-bottom: 1px solid #334155; padding-bottom: 20px; margin-bottom: 20px;">
      <h3 style="color: #007bff; margin: 0 0 10px 0; font-size: 1.2rem;">5. Do I need coding experience?</h3>
      <p style="color: #cbd5e1; line-height: 1.6; margin: 0;">
        Prior experience is not mandatory. We encourage beginners, and mentorship support will be available.
      </p>
    </div>

  
    </div>
</section>
<section id="about" style="background-color:#0f172a; text-align: center;">
    
    <div style="max-width: 1000px; margin: 0 auto 40px;">
        <h2 style="color: white; font-size: 35px; text-transform: uppercase; letter-spacing: 2px; margin: 0 0 10px;">
            About Hack<span style="color: #06b6d4;">BLITZ</span>
        </h2>
        <p style="color: #49b1ee; font-weight: bold; font-size: 20px; font-family: monospace; margin-bottom: 20px;">
            &lt; Where Curiosity Meets Code /&gt;
        </p>
        <p style="color: #cccccc; font-size: 18px; line-height: 1.8; margin: 0;">
            Welcome to HackBlitz, an inclusive event designed for students of all skill levels. Beyond the trophies, 
            our mission is to foster a culture of learning through hands-on workshops, mentorship, and collaborative hacking.
        </p>
    </div>

    <div style="display: flex; flex-wrap: wrap; justify-content: center; gap: 20px; max-width: 1000px; margin: 0 auto;">
        
        <div style="flex: 1; min-width: 280px; background: #1a1a1a; padding: 30px; border-radius: 15px; border: 1px solid #333;">
            <img src="a3.png" alt="What" style="border-radius: 50%; border: 3px solid #007bff; height: 90px; width: 90px; object-fit: cover; margin-bottom: 15px;">
            <h3 style="color: #007bff; margin-bottom: 15px;">What is it?</h3>
            <p style="color: white; font-size: 14px; line-height: 1.6; margin: 0;">
                A time-bound innovation marathon where teams collaborate to build functional prototypes from scratch to solve real-world problems.
            </p>
        </div>

        <div style="flex: 1; min-width: 280px; background: #1a1a1a; padding: 30px; border-radius: 15px; border: 1px solid #333;">
            <img src="a1.png" alt="Why" style="border-radius: 50%; border: 3px solid #007bff; height: 90px; width: 90px; object-fit: cover; margin-bottom: 15px;">
            <h3 style="color: #007bff; margin-bottom: 15px;">How to Start?</h3>
            <p style="color: white; font-size: 14px; line-height: 1.6; margin: 0;">
                Register, form a team, and brainstorm a solution once the theme is revealed. Build your prototype and pitch to industry experts.
            </p>
        </div>

        <div style="flex: 1; min-width: 280px; background: #1a1a1a; padding: 30px; border-radius: 15px; border: 1px solid #333;">
            <img src="a2.png" alt="How" style="border-radius: 50%; border: 3px solid #007bff; height: 90px; width: 90px; object-fit: cover; margin-bottom: 15px;">
            <h3 style="color: #007bff; margin-bottom: 15px;">Why Join?</h3>
            <p style="color: white; font-size: 14px; line-height: 1.6; margin: 0;">
                Bridge the gap between theory and reality. Master new tech stacks, network with recruiters, and build under pressure.
            </p>
        </div>

    </div>
</section>

<section id="contactus" style="background-color: #001233; color: white;text-align: center; font-family: sans-serif;">
    
    <div style="max-width: 800px; margin: 0 auto;">
        <h2 style="font-size: 36px; margin: 0 0 10px; text-transform: uppercase; letter-spacing: 1px;">Contact Us</h2>
        <p style="color: #b3c7d6; margin-bottom: 40px; font-size: 1.1rem;">We'd love to hear from you!</p>
        
        <div style="margin-bottom: 40px;">
            <p style="margin: 15px 0; font-size: 20px; font-weight: 500;">
                <span style="color: #06b6d4; margin-right: 10px;">📞</span> +91 7744569823
            </p>
            <p style="margin: 15px 0; font-size: 20px; font-weight: 500;">
                <span style="color: #06b6d4; margin-right: 10px;">✉️</span> 
                <a href="mailto:sciencecollege@gmail.com" style="color: white; text-decoration: none; border-bottom: 1px solid #4da6ff;">sciencecollege@gmail.com</a>
            </p>
        </div>

        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
        
        <div style="display: flex; justify-content: center; gap: 40px; margin-top: 20px;">
            <a href="#" title="Instagram" style="color: white; font-size: 32px; transition: 0.3s;"><i class="fab fa-instagram"></i></a>
            <a href="#" title="Facebook" style="color: white; font-size: 32px; transition: 0.3s;"><i class="fab fa-facebook"></i></a>
            <a href="#" title="YouTube" style="color: white; font-size: 32px; transition: 0.3s;"><i class="fab fa-youtube"></i></a>
        </div>
    </div>

</section>

<script>
   
    const menu = document.querySelector('#mobile-menu');
    const menuLinks = document.querySelector('.nav-list');

    
    if(menu) {
        menu.addEventListener('click', () => {
            menuLinks.classList.toggle('active');
        });
    }

    
    let index = 0;
    setInterval(function() {
        const wrapper = document.getElementById('image-wrapper');
        if (wrapper) { 
            index++;
            if (index > 2) index = 0; 
            wrapper.style.transform = 'translateX(-' + (index * 450) + 'px)';
        }
    }, 3000);
</script>
</body>

</html>
