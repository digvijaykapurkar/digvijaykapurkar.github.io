<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Registration</title>
</head>
<body>
    
    <?php
        if(isset($_POST['Submit']))
        { 
            $fn = $_POST['fname'];
            $ln = $_POST['lname'];
            $em = $_POST['email'];
            $mob = $_POST['mobile'];
            $city = $_POST['city'];
            $gen = $_POST['gender'];
            $hobby = $_POST['hobby'];
            $pass = $_POST['pass'];

            echo "First name : $fn<br><br>";
            echo "Last name : $ln<br><br>";
            echo "Email : $em<br><br>";
            echo "Mobile no : $mob<br><br>";
            echo "City name : $city<br><br>";
            echo "Gender : $gen<br><br>";

            echo "<h3> Hobbies </h3>";
            $i = 0;
            while($i < sizeof($hobby))
            {
                echo $hobby[$i]."<br><br>";
                $i++;
            }

        }
    ?>
    
</body>
</html>