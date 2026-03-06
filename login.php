<!DOCTYPE html>
<html>
<head>
    <title>Login | HackBlitz 2026</title>
</head>
<body style="background-color: #0f172a; color: white; margin: 0; display: flex; justify-content: center; align-items: center; height: 100vh; font-family: Arial, sans-serif;">

    <div style="background-color: #1e293b; padding: 40px; border-radius: 10px; width: 350px; border: 1px solid #334155; text-align: center;">
        
        <div style="font-size: 28px; font-weight: bold; margin-bottom: 5px; letter-spacing: 2px;">
            HACK<span style="color: #06b6d4;">BLITZ</span>
        </div>
        <div style="font-size: 14px; color: #94a3b8; margin-bottom: 30px;">
            Ready to build the future?
        </div>

        <form action="login.php" method="POST">
            <div style="text-align: left; margin-bottom: 20px;">
                <label style="display: block; font-size: 14px; margin-bottom: 8px; color: #cbd5e1;">Email Address</label>
                <input type="email" name="email" placeholder="student@college.edu" required 
                    style="width: 100%; padding: 12px; box-sizing: border-box; border-radius: 5px; border: 1px solid #475569; background-color: #0f172a; color: white; outline: none;">
            </div>

            <div style="text-align: left; margin-bottom: 20px;">
                <label style="display: block; font-size: 14px; margin-bottom: 8px; color: #cbd5e1;">Password</label>
                <input type="password" name="password" placeholder="••••••••" required 
                    style="width: 100%; padding: 12px; box-sizing: border-box; border-radius: 5px; border: 1px solid #475569; background-color: #0f172a; color: white; outline: none;">
            </div>

            <button type="submit" 
                style="width: 100%; padding: 12px; background-color: #06b6d4; color: #0f172a; border: none; border-radius: 5px; font-weight: bold; cursor: pointer; font-size: 16px;">
                LOGIN
            </button>
            <?php
session_start();
$conn = mysqli_connect("localhost", "root", "", "hackathon web",3307);

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $password = $_POST['password'];

    $result = mysqli_query($conn, "SELECT * FROM users WHERE email='$email'");
    
    if ($result && mysqli_num_rows($result) > 0) {
        $user = mysqli_fetch_assoc($result);
        
        
        if (password_verify($password, $user['password'])) {
            $_SESSION['user_email'] = $user['email'];
            $_SESSION['user_name'] = $user['fname'];
            
            
            header("Location: index.php"); 
            exit();
        } else {
            echo "<script>alert('Wrong password! Please try again.');</script>";
        }
    } else {
        echo "<script>alert('No account found with this email.');</script>";
    }
}
?>
            <?php
  
?>
        </form>
<div style="margin-top: 25px; font-size: 13px; color: #94a3b8;">
            Don't have an account? <a href="login1.php" style="color: #06b6d4; text-decoration: none;">Register here</a>
        </div>
</body>

</html>
