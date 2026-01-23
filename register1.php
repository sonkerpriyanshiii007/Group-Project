

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Submission Details | HackBlitz 2026</title>
</head>
<body style="background-color: #0f172a; color: white; margin: 0; display: flex; flex-direction: column; justify-content: center; align-items: center; min-height: 100vh; font-family: Arial, sans-serif; padding: 20px;">

    <div style="background-color: #1e293b; padding: 40px; border-radius: 10px; width: 400px; border: 1px solid #334155; box-shadow: 0px 10px 30px rgba(0,0,0,0.5);">
        
        <div style="text-align: center; margin-bottom: 30px; font-size: 24px; font-weight: bold; letter-spacing: 2px;">
                HACK<span style="color: #06b6d4;">BLITZ</span>
        </div>
        <div style="text-align: left; line-height: 2.0; font-size: 15px; color: #cbd5e1;">
<?php

$conn = mysqli_connect("localhost", "root", "", "hackathon web", 3307);

if($_SERVER["REQUEST_METHOD"] == "POST"){
    
    
    $fname    = $_POST['fname'];
    $roll     = $_POST['rollno'];
    $email    = $_POST['email'];
    $dob      = $_POST['dob'];
    $gender   = $_POST['gender'];
    $course   = $_POST['Course'];
    $raw_password=isset($_POST['password'])?
    $_POST['password'] : "";
    $password=password_hash($raw_password,PASSWORD_DEFAULT);
    $skills   = isset($_POST['skills']) ? implode(", ", $_POST['skills']) : "None";

   
    $checkEmail = "SELECT email FROM users WHERE email = '$email'";
    $result = mysqli_query($conn, $checkEmail);

    if (mysqli_num_rows($result) > 0) {
       
        echo "<h3 style='color:red; text-align:center;'>This email id is already registered!</h3>";
    } 
    else {
       
        $sql = "INSERT INTO users (fname, rollno, email, dob, gender, course, skills, password ) 
                VALUES ('$fname', '$roll', '$email', '$dob',  '$course', '$skills', '$password')";
        
        if(mysqli_query($conn, $sql)){
            echo "<h3 style='color:#22c55e; text-align:center;'>Submission Successful!</h3>";
            
            
            echo "<strong style='color:#06b6d4'>NAME:</strong> $fname <br>";
            echo "<strong style='color:#06b6d4'>ROLL NUMBER:</strong> $roll <br>";
            echo "<strong style='color:#06b6d4'>E-MAIL:</strong> $email <br>";
            echo "<strong style='color:#06b6d4'>DATE OF BIRTH:</strong> $dob <br>";
            
            echo "<strong style='color:#06b6d4'>COURSE:</strong> $course <br>";
            echo "<strong style='color:#06b6d4'>SKILLS:</strong> $skills <br>";
            
            echo "<p style='color: #22c55e; font-weight: bold;'>Registration Successful & Saved to Database!</p>";
        } else {
            echo "<p style='color: #ef4444;'>Error: " . mysqli_error($conn) . "</p>";
        }
    }
}
?>
</div>
       <div style="margin-top: 30px; text-align: center;">
            <a href="index.php" style="display: inline-block; padding: 10px 20px; background-color: #06b6d4; color: #0f172a; text-decoration: none; border-radius: 5px; font-weight: bold; font-size: 14px;">Return to Terminal</a>
        </div>
    </div>

</body>
</html>