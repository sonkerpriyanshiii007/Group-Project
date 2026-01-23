<!DOCTYPE html>
<html>
<head>
    <title>Register | HackBlitz 2026</title>
</head>
<body style="background-color: #0f172a; color: white; margin: 0; display: flex; justify-content: center; align-items: center; min-height: 100vh; font-family: Arial, sans-serif; padding: 20px;">

    <div style="background-color: #1e293b; padding: 30px; border-radius: 10px; width: 400px; border: 1px solid #334155; box-shadow: 0px 10px 30px rgba(0,0,0,0.5);">
        
        <div style="text-align: center; margin-bottom: 20px;">
            <div style="font-size: 24px; font-weight: bold; letter-spacing: 2px;">
                HACK<span style="color: #06b6d4;">BLITZ</span>
            </div>
            <h2 style="color: #cbd5e1; font-size: 18px; margin-top: 10px;">Registration Form</h2>
        </div>

        <form action="register1.php" method="POST" style="text-align: left;">
            
            <label style="font-size: 13px; font-weight: bold; color: #06b6d4;">NAME</label><br> 
            <input type="text" name="fname" style="width: 100%; padding: 8px; margin: 8px 0 15px 0; box-sizing: border-box; border-radius: 5px; border: 1px solid #475569; background-color: #0f172a; color: white; outline: none;">

            <label style="font-size: 13px; font-weight: bold; color: #06b6d4;">ROLL NUMBER</label><br> 
            <input type="text" name="rollno" style="width: 100%; padding: 8px; margin: 8px 0 15px 0; box-sizing: border-box; border-radius: 5px; border: 1px solid #475569; background-color: #0f172a; color: white; outline: none;">

            <label style="font-size: 13px; font-weight: bold; color: #06b6d4;">E-MAIL ADDRESS</label> <br>
            <input type="email" name="email" style="width: 100%; padding: 8px; margin: 8px 0 15px 0; box-sizing: border-box; border-radius: 5px; border: 1px solid #475569; background-color: #0f172a; color: white; outline: none;">

            <label style="font-size: 13px; font-weight: bold; color: #06b6d4;">DATE OF BIRTH</label><br>
            <input type="date" name="dob" required style="width: 100%; padding: 8px; margin: 8px 0 15px 0; box-sizing: border-box; border-radius: 5px; border: 1px solid #475569; background-color: #0f172a; color: white; outline: none; color-scheme: dark;">

            

            <label style="font-size: 13px; font-weight: bold; color: #06b6d4;">BRANCH</label> <br>
            <div style="margin: 8px 0 15px 0; font-size: 14px; color: #cbd5e1;">
                <input type="radio" name="Course" value="B.tech"> B.TECH
                <input type="radio" name="Course" value="BBA" style="margin-left: 10px;"> BBA
                <input type="radio" name="Course" value="BCA" style="margin-left: 10px;"> BCA
            </div>

            <label style="font-size: 13px; font-weight: bold; color: #06b6d4;">SKILLS</label> <br>
            <div style="margin: 8px 0 20px 0; font-size: 13px; color: #cbd5e1; line-height: 1.8;">
                <input type="checkbox" name="skills[]" value="AI & Machine Learning"> Artificial Intelligence & Machine Learning<br>
                <input type="checkbox" name="skills[]" value="Fintech & Blockchain Security"> Fintech & Blockchain Security<br>
                <input type="checkbox" name="skills[]" value="Operation Technology (OT) Security"> Operation Technology (OT) Security<br>
                <input type="checkbox" name="skills[]" value="ED TECH: Future Of Learning"> ED TECH: Future Of Learning<br>
                <input type="checkbox" name="skills[]" value="Cyber Security"> Cyber Security
            </div>
             <div style="text-align: left; margin-bottom: 20px;">
               <label style="font-size: 13px; font-weight: bold; color: #06b6d4;">Password</label>
                <input type="password" name="password" placeholder="••••••••" required 
                    style="width: 100%; padding: 12px; box-sizing: border-box; border-radius: 5px; border: 1px solid #475569; background-color: #0f172a; color: white; outline: none;">
            </div>
            <input type="submit" value="REGISTER" style="width: 100%; padding: 12px; background-color: #06b6d4; color: #0f172a; border: none; border-radius: 5px; font-weight: bold; cursor: pointer; font-size: 16px;">
        </form>

        <div style="margin-top: 20px; font-size: 13px; color: #94a3b8; text-align: center;">
            Already registered? <a href="login.php" style="color: #06b6d4; text-decoration: none;">Login here</a>
        </div>
    </div>

</body>
</html>