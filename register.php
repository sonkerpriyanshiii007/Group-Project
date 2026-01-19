<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register | HackBlitz 2026</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #0f172a; /* Matching your dark theme */
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
            margin: 0;
            color: white;
        }
        .form-container {
            max-width: 500px;
            width: 90%;
            background: #1e293b;
            padding: 40px;
            border-radius: 20px;
            border: 1px solid #334155;
            box-shadow: 0 10px 30px rgba(0,0,0,0.5);
        }
        .input-group { margin-bottom: 20px; }
        label { display: block; margin-bottom: 8px; color: #94a3b8; font-size: 14px; }
        input, select {
            width: 100%;
            padding: 12px;
            border-radius: 8px;
            border: 1px solid #334155;
            background: #0f172a;
            color: white;
            box-sizing: border-box; /* Prevents input from overflowing */
        }
        button {
            width: 100%;
            background: #06b6d4;
            color: white;
            border: none;
            padding: 15px;
            border-radius: 8px;
            font-weight: bold;
            cursor: pointer;
            transition: 0.3s;
        }
        button:hover { background: #0891b2; transform: translateY(-2px); }
        .back-link { display: block; text-align: center; margin-top: 20px; color: #94a3b8; text-decoration: none; font-size: 14px; }
    </style>
</head>
<body>



<section id="register" style="background-color: #0f172a; color: white;">
    <div style="max-width: 600px; width: 100%; background: #1e293b; padding: 40px; border-radius: 20px; border: 1px solid #334155; box-shadow: 0 20px 25px -5px rgba(0, 0, 0, 0.1);">
        <h2 style="text-align: center; font-size: 32px; margin-bottom: 10px;">JOIN THE <span style="color: #06b6d4;">BATTLE</span></h2>
        <p style="text-align: center; color: #94a3b8; margin-bottom: 30px;">Fill in your details to secure your spot.</p>

        <form action="submit_registration.php" method="POST" style="display: flex; flex-direction: column; gap: 20px;">
            <div style="display: flex; flex-direction: column; gap: 8px;">
                <label style="color: #cbd5e1; font-size: 14px;">Full Name</label>
                <input type="text" name="fullname" placeholder="John Doe" required style="padding: 12px; border-radius: 8px; border: 1px solid #334155; background: #0f172a; color: white; outline: none;">
            </div>

            <div style="display: flex; flex-direction: column; gap: 8px;">
                <label style="color: #cbd5e1; font-size: 14px;">Email Address</label>
                <input type="email" name="email" placeholder="john@example.com" required style="padding: 12px; border-radius: 8px; border: 1px solid #334155; background: #0f172a; color: white; outline: none;">
            </div>

            <div style="display: flex; gap: 20px; flex-wrap: wrap;">
                <div style="flex: 1; display: flex; flex-direction: column; gap: 8px; min-width: 200px;">
                    <label style="color: #cbd5e1; font-size: 14px;">Team Name</label>
                    <input type="text" name="teamname" placeholder="Code Warriors" style="padding: 12px; border-radius: 8px; border: 1px solid #334155; background: #0f172a; color: white;">
                </div>
                <div style="flex: 1; display: flex; flex-direction: column; gap: 8px; min-width: 200px;">
                    <label style="color: #cbd5e1; font-size: 14px;">Preferred Theme</label>
                    <select name="theme" style="padding: 12px; border-radius: 8px; border: 1px solid #334155; background: #0f172a; color: white;">
                        <option>AI & Machine Learning</option>
                        <option>Blockchain</option>
                        <option>Cyber Security</option>
                        <option>EdTech</option>
                    </select>
                </div>
            </div>

            <div style="display: flex; flex-direction: column; gap: 8px;">
                <label style="color: #cbd5e1; font-size: 14px;">GitHub Profile / Portfolio Link</label>
                <input type="url" name="github" placeholder="https://github.com/yourname" style="padding: 12px; border-radius: 8px; border: 1px solid #334155; background: #0f172a; color: white;">
            </div>

            <button type="submit" style="background: #06b6d4; color: white; border: none; padding: 15px; border-radius: 8px; font-weight: bold; cursor: pointer; font-size: 16px; transition: 0.3s; margin-top: 10px;">
                CONFIRM REGISTRATION
            </button>
        </form>
    </div>
</section>


</body>
</html>
