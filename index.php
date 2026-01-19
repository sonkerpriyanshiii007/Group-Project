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


nav {
    display: flex;
    align-items: center;
    justify-content: space-between;
    background-color: #0a0a0a; 
    padding: 0 20px;
    height: 60px;
    position: fixed;
    top: 0;
    width: 100%;
    z-index: 1000;
}

.logo {
    color: #3b82f6;
    font-size: 1.5rem;
    font-weight: bold;
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
.card:hover{
            transform: scale(1.05) translateY(-5px); /* Scales up slightly and moves up */
            box-shadow: 0 10px 20px rgba(0, 0, 0, 0.4); 
        }

.card:hover{
            transform: scale(1.05) translateY(-5px); /* Scales up slightly and moves up */
            box-shadow: 0 10px 20px rgba(0, 0, 0, 0.4); 
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
    
    <div class="card" style="background: #1a1a1a; border: 2px solid #3b82f6; border-radius: 15px; padding: 30px; width: 100%; box-sizing: border-box;">
      <div style="font-size: 50px;">🥇</div>
      <h3 style="margin: 10px 0; color: #3b82f6; text-transform: uppercase;">1st Prize</h3>
      <p style="font-size: clamp(30px, 5vw, 40px); font-weight: bold; margin: 10px 0;">₹1,00,000</p>
      <p style="color: #94a3b8; font-size: 14px;">Winner Trophy + Internship</p>
    </div>

    <div style="display: flex; gap: 20px; flex-wrap: wrap; justify-content: center;">
      
      <div  class="card" style="flex: 1; min-width: 280px; background: #1a1a1a; border: 1px solid #333; border-radius: 15px; padding: 30px;">
        <div style="font-size: 40px;">🥈</div>
        <h3 style="margin: 10px 0; color: #ccc;">2nd Prize</h3>
        <p style="font-size: 32px; font-weight: bold; margin: 10px 0;">₹60,000</p>
        <p style="color: #888; font-size: 14px;">Silver Medal + Swag Kit</p>
      </div>

      <div  class="card" style="flex: 1; min-width: 280px; background: #1a1a1a; border: 1px solid #333; border-radius: 15px; padding: 30px;">
        <div style="font-size: 40px;">🥉</div>
        <h3 style="margin: 10px 0; color: #cd7f32;">3rd Prize</h3>
        <p style="font-size: 32px; font-weight: bold; margin: 10px 0;">₹40,000</p>
        <p style="color: #888; font-size: 14px;">Bronze Medal + Vouchers</p>
      </div>
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
                 



<section id="themes" style="background-color: #0f172a;">
    
    <div style="max-width: 1000px; margin: 0 auto 40px;">
        <h2 style="color: white; font-size: 35px; text-transform: uppercase; letter-spacing: 2px; margin: 0;">
            Hackathon <span style="color: #06b6d4;">Themes</span>
        </h2>
        <p style="color: #49b1ee; font-weight: bold; margin-top: 10px; font-family: 'Courier New', monospace;">&lt; Choose your track /&gt;</p>
    </div>

    <div style="max-width: 1000px; margin: 0 auto; display: flex; flex-direction: column; gap: 20px;">
        
        <div style="width: 100%; background: linear-gradient(135deg, #e17604, #555589, #2805a4); border-radius: 24px; padding: 40px; box-sizing: border-box; text-align: left; display: flex; flex-wrap: wrap; align-items: center; justify-content: space-between; gap: 20px;">
            <div style="flex: 2; min-width: 280px;">
                <h2 style="font-size: 2rem; color: white; margin-bottom: 15px;">Artificial Intelligence & Machine Learning</h2>
                <p style="font-size: 1.1rem; color: #efe4e4; line-height: 1.6; margin-bottom: 25px;">Develop solutions that use data to make decisions. Think of automated health diagnosis, AI-driven financial advisors, or smart attendance systems.</p>
                <a href="#" class="card"  style="display: inline-block; background: #007bff; color: white; text-decoration: none; padding: 12px 30px; border-radius: 50px; font-weight: bold;">LEARN MORE</a>
            </div>
            <div style="flex: 1; font-size: 70px; text-align: center;">🤖</div>
        </div>

        <div style="display: flex; gap: 20px; flex-wrap: wrap; width: 100%;">
            <div style="flex: 1; min-width: 300px; background: linear-gradient(135deg, #bd53b9, #4f4fa4, #826de7); border-radius: 24px; padding: 35px; box-sizing: border-box; text-align: center; display: flex; flex-direction: column; justify-content: space-between;">
                <h3 style="color: white; font-size: 1.4rem; margin-bottom: 15px;">Fintech & Blockchain Security</h3>
                <p style="color: #efe4e4; font-size: 0.95rem; line-height: 1.6; margin-bottom: 25px;">Create decentralized applications (dApps) or secure payment gateways.</p>
                <a href="#" class="card" style="display: inline-block; background: #007bff; color: white; text-decoration: none; padding: 10px 25px; border-radius: 50px; font-weight: bold; align-self: center;">LEARN MORE</a>
            </div>
            <div style="flex: 1; min-width: 300px; background: linear-gradient(135deg, #2e722f, #84bb50, #b9bf19); border-radius: 24px; padding: 35px; box-sizing: border-box; text-align: center; display: flex; flex-direction: column; justify-content: space-between;">
                <h3 style="color: white; font-size: 1.4rem; margin-bottom: 15px;">Healthcare & Sustainability</h3>
                <p style="color: #efe4e4; font-size: 0.95rem; line-height: 1.6; margin-bottom: 25px;">Use technology for social good. Build apps to monitor health or track carbon footprints.</p>
                <a href="#" class="card" style="display: inline-block; background: #007bff; color: white; text-decoration: none; padding: 10px 25px; border-radius: 50px; font-weight: bold; align-self: center;">LEARN MORE</a>
            </div>
        </div>

        <div style="display: flex; gap: 20px; flex-wrap: wrap; width: 100%;">
            <div style="flex: 1; min-width: 300px; background: linear-gradient(135deg, #d64c40, #a57a49, #f4fa53); border-radius: 24px; padding: 35px; box-sizing: border-box; text-align: center; display: flex; flex-direction: column; justify-content: space-between;">
                <h3 style="color: white; font-size: 1.4rem; margin-bottom: 15px;">EdTech: Future of Learning</h3>
                <p style="color: #efe4e4; font-size: 0.95rem; line-height: 1.6; margin-bottom: 25px;">Innovate the classroom experience with AR/VR or AI-based tutoring systems.</p>
                <a href="#" class="card" style="display: inline-block; background: #007bff; color: white; text-decoration: none; padding: 10px 25px; border-radius: 50px; font-weight: bold; align-self: center;">LEARN MORE</a>
            </div>
            <div style="flex: 1; min-width: 300px; background: linear-gradient(135deg, #3376bc, #6565c6, #d64c40); border-radius: 24px; padding: 35px; box-sizing: border-box; text-align: center; display: flex; flex-direction: column; justify-content: space-between;">
                <h3 style="color: white; font-size: 1.4rem; margin-bottom: 15px;">Smart City & IoT</h3>
                <p style="color: #efe4e4; font-size: 0.95rem; line-height: 1.6; margin-bottom: 25px;">Design systems where devices communicate to save resources, like smart lighting.</p>
                <a href="#" class="card" style="display: inline-block; background: #007bff; color: white; text-decoration: none; padding: 10px 25px; border-radius: 50px; font-weight: bold; align-self: center;">LEARN MORE</a>
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

                    
<section id="faq" style="background-color: #0f172a; ">
  <h2 style="text-align: center; color: white; font-size: 32px; margin-bottom: 50px; text-transform: uppercase;">
    Hack<span style="color: #06b6d4;">BLITZ</span> – FAQ
  </h2>

  <div style="width: 100%; margin: 0 auto;">

    <div style="border-bottom: 1px solid #334155; padding-bottom: 20px; margin-bottom: 20px; text-align: left;">
      <h3 style="color: #06b6d4; margin: 0 0 10px 0; font-size: 1.2rem;">1. What is HackBlitz?</h3>
      <p style="color: #cbd5e1; line-height: 1.6; margin: 0;">
        HackBlitz is a competitive hackathon designed to bring together innovators and developers...
      </p>
    </div>
      <div style="border-bottom: 1px solid #334155; padding-bottom: 20px; margin-bottom: 20px;">
      <h3 style="color: #06b6d4; margin: 0 0 10px 0; font-size: 1.2rem;">2. Who is eligible?</h3>
      <p style="color: #cbd5e1; line-height: 1.6; margin: 0;">
        It is open to students and technology enthusiasts from all disciplines. Participants may join individually or in a team.
      </p>
    </div>

    <div style="border-bottom: 1px solid #334155; padding-bottom: 20px; margin-bottom: 20px;">
      <h3 style="color: #06b6d4; margin: 0 0 10px 0; font-size: 1.2rem;">3. Is there a fee?</h3>
      <p style="color: #cbd5e1; line-height: 1.6; margin: 0;">No. HackBlitz is completely free to participate in.</p>
    </div>

    <div style="border-bottom: 1px solid #334155; padding-bottom: 20px; margin-bottom: 20px;">
      <h3 style="color: #06b6d4; margin: 0 0 10px 0; font-size: 1.2rem;">4. What is the allowed team size?</h3>
      <p style="color: #cbd5e1; line-height: 1.6; margin: 0;">Participants may compete individually or in teams of up to four members.</p>
    </div>

    <div style="border-bottom: 1px solid #334155; padding-bottom: 20px; margin-bottom: 20px;">
      <h3 style="color: #06b6d4; margin: 0 0 10px 0; font-size: 1.2rem;">5. Do I need coding experience?</h3>
      <p style="color: #cbd5e1; line-height: 1.6; margin: 0;">
        Prior experience is not mandatory. We encourage beginners, and mentorship support will be available.
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

