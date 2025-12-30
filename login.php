<html>
    <head>
        <title>Student Form</title>
        
    </head>
    <body style="text-align: center; font-family:Cambria, Cochin, Georgia, Times, 'Times New Roman', serif ;
    background: #f4f4f9;
    display: flex;
    justify-content: center;
    align-items: center;">
    
    
        <form action="register1.php" method="POST"
        style=" background: #f8efefff;
    padding: 20px;
    border-radius: 10px;
    width: 300px;">
    <h2 style="color:blue; text-align:justify-center;"> Registration Form</h2>

        <label for="fname" style="font-size: larger; font-weight:bold"> NAME</label><br> 
        <input type="text" name="fname"><br><br>
        <label for="rollno" style="font-size: larger; font-weight:bold"> ROLL NUMBER</label><br> 
        <input type="rollno" name="rollno"><br><br>
        <label for="email" style="font-size: larger; font-weight:bold">E-MAIL ADDRESS</label> <br>
            <input type="email" name="email"><br><br>
            <label for="dob" style="font-size: larger; font-weight:bold">Date of Birth:</label>
            <input type="date" id="dob" name="dob" required=""><br><br>
             <label style="font-size: larger; font-weight:bold">Gender:</label><br>
            <label for="male">
                <input type="radio" id="male" name="gender" value="Male"> Male
            </label>
            <label for="female">
                <input type="radio" id="female" name="gender" value="Female"> Female
            </label>
            <label for="other">
                <input type="radio" id="other" name="gender" value="Other"> Other
            </label><br><br>
            <label style="font-size: larger; font-weight:bold">BRANCH</label> <br>
           <label for="B.tech">
           <input type="radio" name="Course" value="B.tech">B.TECH</label>
           <label for="BBA">
           <input type="radio" name="Course" value="BBA">BBA</label>
           <label for="BCA">
           <input type="radio" name="Course" value="BCA">BCA</label> <br><br>
           <label style="font-size: larger; font-weight:bold">SKILLS</label> <br>
           <label for="Software Development"><br>
           <input type="checkbox" name="skills[]" value="Software Development">Software Development</label>
           <label for="web designing"><br>
           <input type="checkbox" name="skills[]" value="Web Designing">Web Designing</label>
           <label for="Data Structure & Algorithms"><br>
           <input type="checkbox" name="skills[]" value="Data Structure & Algorithms">Data Structure & Algorithms</label>
           <label for="Cyber Security"><br>
           <input type="checkbox" name="skills[]" value="Cyber Security">Cyber Security</label>
           <label for="Cloud Computing"><br>
           <input type="checkbox" name="skills[]" value="Cloud Computing">Cloud Computing</label><br><br>
          <input type="submit"  value="Register" style="font-size: larger; font-weight:bold; color:red;">
        </form>
    </body>
</html>