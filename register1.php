<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Submission Details | HackBlitz 2026</title>
</head>
<body style="background-color: #0f172a; color: white; margin: 0; display: flex; flex-direction: column; justify-content: center; align-items: center; min-height: 100vh; font-family: Arial, sans-serif; padding: 20px;">

    <div style="background-color: #1e293b; padding: 40px; border-radius: 10px; width: 400px; border: 1px solid #334155; box-shadow: 0px 10px 30px rgba(0,0,0,0.5);">
        
        <div style="text-align: center; margin-bottom: 30px;">
            <div style="font-size: 24px; font-weight: bold; letter-spacing: 2px;">
                HACK<span style="color: #06b6d4;">BLITZ</span>
            </div>
            <h2 style="color: #22c55e; font-size: 18px; margin-top: 10px;">Submission Successful!</h2>
        </div>

        <div style="text-align: left; line-height: 2.0; font-size: 15px; color: #cbd5e1;">
            <?php
            if($_SERVER["REQUEST_METHOD"] == "POST"){
                echo "<strong style='color:#06b6d4'>NAME:</strong> " . htmlspecialchars($_POST['fname']) . "<br>";
                
                echo "<strong style='color:#06b6d4'>ROLL NUMBER:</strong> " . htmlspecialchars($_POST['rollno']) . "<br>";

                echo "<strong style='color:#06b6d4'>E-MAIL:</strong> " . htmlspecialchars($_POST['email']) . "<br>";

                echo "<strong style='color:#06b6d4'>DATE OF BIRTH:</strong> " . htmlspecialchars($_POST['dob']) . "<br>";

                echo "<strong style='color:#06b6d4'>GENDER:</strong> " . htmlspecialchars($_POST['gender']) . "<br>";

                echo "<strong style='color:#06b6d4'>COURSE:</strong> " . htmlspecialchars($_POST['Course']) . "<br>";
                
                if(!empty($_POST['skills'])){
                    echo "<strong style='color:#06b6d4'>SKILLS:</strong><br>";
                    echo "<div style='padding-left: 15px; color: #94a3b8; font-size: 14px;'>";
                    foreach($_POST['skills'] as $skill){
                        echo "• " . htmlspecialchars($skill) . "<br>";
                    }
                    echo "</div>";
                }
            } else {
                echo "<p style='color: #ef4444; text-align: center;'>No data received. Please submit the form.</p>";
            }
            ?>
        </div>

        <div style="margin-top: 30px; text-align: center;">
            <a href="login.html" style="display: inline-block; padding: 10px 20px; background-color: #06b6d4; color: #0f172a; text-decoration: none; border-radius: 5px; font-weight: bold; font-size: 14px;">Return to Terminal</a>
        </div>
    </div>

</body>
</html>
