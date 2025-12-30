<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    
</head>
<body style="text-align: center; 
                font-family:Cambria, Cochin, Georgia, Times, 'Times New Roman', serif ;
                background: #f5e9efff;
                justify-content: center;
                align-items: center;
                padding-top:10%">

    <h2 style="color:blue">Submitted Details </h2>
    <?php
    if($_SERVER["REQUEST_METHOD"]=="POST"){
        echo"<strong> NAME:</strong>". htmlspecialchars($_POST['fname']) ."<br>";
       
        echo "<strong> ROLL NUMBER:</strong>".htmlspecialchars($_POST['rollno']) ."<br>";

        echo "<strong> E-MAIL:</strong>".($_POST['email']) ."<br>";

        echo "<strong> DATE OF BIRTH:</strong>".htmlspecialchars($_POST['dob']) ."<br>";

        echo "<strong> GENDER:</strong>".htmlspecialchars($_POST['gender']) ."<br>";

        echo "<strong> COURSE:</strong>".htmlspecialchars($_POST['Course']) ."<br>";
        if(!empty($_POST['skills'])){
            echo "<strong>SKILLS:</strong>";
            foreach($_POST['skills'] as $skills){
                echo htmlspecialchars($skills) ."<br>";
            }
        }
    }
    ?>
</body>
</html>