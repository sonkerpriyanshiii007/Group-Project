<?php

$date = date("F d, 2026");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Certificate - HackBlitz</title>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;700&family=Playfair+Display:wght@700&family=Dancing+Script:wght@600&display=swap" rel="stylesheet">
    
    <style>
        body { background: #0f172a; display: flex; justify-content: center; align-items: center; min-height: 100vh; margin: 0; }
        
        /* Main Certificate Container */
        .certificate-container {
            width: 800px; height: 580px; padding: 40px; background: #fff; position: relative;
            border: 15px solid #0f172a; outline: 4px solid #06b6d4; outline-offset: -12px;
            text-align: center; color: #1e293b; box-shadow: 0 20px 50px rgba(0,0,0,0.5);
        }

        /* --- Floating Download Arrow Design --- */
        .download-action {
            position: absolute; top: 30px; right: 30px; cursor: pointer;
            transition: 0.3s; z-index: 10;
        }
        .download-action:hover { transform: translateY(5px); }
        
        .arrow-icon {
            width: 40px; height: 40px; background: #06b6d4; border-radius: 50%;
            display: flex; justify-content: center; align-items: center;
            box-shadow: 0 4px 10px rgba(6, 182, 212, 0.3);
        }
        .arrow-icon svg { fill: white; width: 20px; }
        .tooltip { 
            position: absolute; right: 50px; top: 10px; background: #0f172a; 
            color: white; padding: 5px 10px; border-radius: 4px; font-size: 10px;
            white-space: nowrap; font-family: 'Montserrat'; opacity: 0; transition: 0.3s;
        }
        .download-action:hover .tooltip { opacity: 1; }

        /* Typography */
        .header-top { font-family: 'Montserrat'; letter-spacing: 4px; font-weight: 700; color: #94a3b8; font-size: 14px; }
        h1 { font-family: 'Playfair Display'; font-size: 50px; margin: 15px 0; color: #0f172a; }
        .name-display {
            font-family: 'Dancing Script'; font-size: 55px; color: #06b6d4;
            margin: 10px 0; border-bottom: 1px solid #e2e8f0; display: inline-block; padding: 0 30px;
        }
        .main-content { font-family: 'Montserrat'; font-size: 15px; line-height: 1.8; margin: 20px 60px; color: #475569; }

        .footer-section { display: flex; justify-content: space-around; margin-top: 40px; font-family: 'Montserrat'; }
        .signature { border-top: 1px solid #cbd5e1; width: 160px; padding-top: 8px; font-size: 12px; }

        /* Hide icon during print */
        @media print { .download-action { display: none; } body { background: white; } .certificate-container { border: none; box-shadow: none; } }
    </style>
</head>
<body>

<div class="certificate-container">
    <div class="download-action" onclick="window.print()">
        <span class="tooltip">Save as PDF</span>
        <div class="arrow-icon">
            <svg viewBox="0 0 24 24"><path d="M19 9h-4V3H9v6H5l7 7 7-7zM5 18v2h14v-2H5z"/></svg>
        </div>
    </div>

    <div class="header-top">CERTIFICATE OF ACHIEVEMENT</div>
    <h1>HackBlitz 2026</h1>
    
    <p style="font-family: 'Montserrat'; margin-top: 20px;">This is to certify that </p>
    <div class="name-display"> <span style="font-size: 34px;">Dear,  </span> "BLITZ CHALLENGER"</div>
    
    <p class="main-content"  style="font-family: Dancing Script;">For successfully demonstrating technical excellence and outstanding problem-solving skills 
        during the <b>Blitz Assessment Phase</b>. This participant has shown exceptional 
        dedication toward future innovation in their chosen technology track.
        Has successfully demonstrated technical proficiency and completed the 
        <b>Blitz Assessment Phase</b>. Their dedication to innovation 
        and problem solving is highly commendable.
    </p>

    <div class="footer-section">
        <div class="signature"><strong><?php echo $date; ?></strong><br>Date of Issue</div>
        <div class="signature"><strong>Authorized by</strong><br>HackBlitz Org.</div>
        <div class="signature"><strong>Verification ID</strong><br>HB-2026-X99</div>
    </div>
</div>

</body>
</html>