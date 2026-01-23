<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Assessment Portal | HackBlitz</title>
    <style>
        /* Basic Styling - Pure Minimal */
        body { background: #0f172a; color: white; font-family: sans-serif; text-align: center; padding-top: 50px; }
        .box { 
            background: #1e293b; border: 1px solid #06b6d4; border-radius: 12px; 
            width: 90%; max-width: 400px; margin: auto; padding: 30px; 
        }
        h2 { color: #06b6d4; margin-bottom: 20px; }
        input { 
            width: 100%; padding: 10px; margin: 10px 0; border-radius: 5px; 
            border: 1px solid #334155; background: #0f172a; color: white; box-sizing: border-box;
        }
        .btn-main { 
            width: 100%; background: #06b6d4; color: #0f172a; padding: 12px; 
            border: none; border-radius: 5px; font-weight: bold; cursor: pointer; margin-top: 10px;
        }
        .theme-item { 
            display: flex; justify-content: space-between; align-items: center; 
            background: #243146; padding: 12px; margin: 10px 0; border-radius: 8px; font-size: 14px;
        }
        .play-link { background: #06b6d4; color: #0f172a; padding: 5px 15px; text-decoration: none; border-radius: 4px; font-weight: bold; }
        
        /* Certificate Block - Simple & Centered */
        .cert-block { 
            margin-top: 25px; padding: 15px; border: 1px dashed #06b6d4; border-radius: 10px; 
            display: none; /* Initially Hidden */
        }
        .btn-cert { 
            display: inline-block; background: #06b6d4; color: #0f172a; padding: 10px 20px; 
            text-decoration: none; border-radius: 5px; font-weight: bold; margin-top: 10px;
        }
    </style>
</head>
<body>

<div class="box">
    <form id="detailsForm" onsubmit="showThemes(event)">
        <h2>Candidate Details</h2>
        <input type="text" placeholder="Team Name" required>
        <input type="text" placeholder="Qualification" required>
        <input type="text" placeholder="Technical Skills" required>
        <button type="submit" class="btn-main">CONTINUE ⚡</button>
    </form>

    <div id="themes" style="display: none;">
        <h2>Select Track</h2>
        
        <div class="theme-item">
            <span>AI & Machine Learning</span>
            <a href="https://gemini.google.com/share/0516b36303b4" target="_blank" onclick="unlockCert()" class="play-link">PLAY</a>
        </div>
        
        <div class="theme-item">
            <span>Block Chain</span>
            <a href="https://gemini.google.com/share/621d20f79336" target="_blank" onclick="unlockCert()" class="play-link">PLAY</a>
        </div>

        <div class="theme-item">
            <span>Operation Technology Security</span>
            <a href="https://gemini.google.com/share/48d9f6182b38" target="_blank" onclick="unlockCert()" class="play-link">PLAY</a>
        </div>

        <div class="theme-item">
            <span>Cyber Security</span>
            <a href="https://gemini.google.com/share/a0abe486bb50" target="_blank" onclick="unlockCert()" class="play-link">PLAY</a>
        </div>

        <div class="theme-item">
            <span>EDTech Future of Learning</span>
            <a href="https://gemini.google.com/share/27b3cebd4ed5" target="_blank" onclick="unlockCert()" class="play-link">PLAY</a>
        </div>
        <p style="font-size: 14px; color: #94a3b8;">Finish your quiz on Gemini and claim your reward certificate.</p>
        <div id="certArea" class="cert-block">
            <h4 style="margin: 0;">Quiz Ended!</h4>
            
            <a href="certificate.php" class="btn-cert">GET CERTIFICATE 🎓</a>
        </div>
    </div>
</div>

<script>
    function showThemes(e) {
        e.preventDefault();
        // Browser handles 'required' fields automatically before this
        document.getElementById('detailsForm').style.display = 'none';
        document.getElementById('themes').style.display = 'block';
    }

    function unlockCert() {
        document.getElementById('certArea').style.display = 'block';
    }
</script>

</body>
</html>