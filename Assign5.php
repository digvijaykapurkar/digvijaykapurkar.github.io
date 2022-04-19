<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cookiies</title>
</head>
<body>
    <form method="post">
        Enter your name : 
        <input type="text" name="fname" value=" <?php echo $_COOKIE['myname']; ?> ">
        <input type="Submit" value="Create Cookie" name="Submit">
</form>
</body>
    <?php
        if(isset($_POST['Submit']))
        {
            $name=$_POST['fname'];
            setcookie('myname', $name,time()+100);

            echo "Your name is: ". $_COOKIE['myname'];
            if(!isset($_POST['fmyname']))
            {
                echo " failed to create cookie";
            }
        }

    ?>
</html>