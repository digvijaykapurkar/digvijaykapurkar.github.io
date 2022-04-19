<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        session_start();
        if(isset($_POST['Submit']))
        {
            $sr=$_POST['fname'];
            $_SESSION['sr']=$sr;
            session_start();
            echo "Your name is : ".$_SESSION['sr'];
        }
        
    ?>
</body>
</html>