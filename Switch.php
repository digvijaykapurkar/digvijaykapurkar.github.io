<!DOCTYPE html>
<html lang="en">
<center>
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Portfolio</title>
        <style>
            body{
                background-image: url("coder.gif");
                background-color; Red;
            }
        </style>
    </head>
    <body>
        <h1>Digvijay</h1>
        <h2>IT consultant</h2>
        <p>
            <a href="kapurkardigvijay874@gmail.com">Visit my Linkedin!</a>
        </P>
        <center>
            <img src="profile.jpeg" alt="IT consultant" width="125" height="125">
        </center>
        <?php
            $expertise="cloud";

            switch ($expertise){
            case "database":
                echo "<p> <font color=blue> My Expertise is in database.</font></p>";
                break;
            case "cloud":
                echo "<p> <font color=Green> My Expertise is in Cloud Computing.</font></p>";
                break;
            case "linux":
                echo "<p> <font color=black> My Expertise is in Linux.</font></p>";
                break;
            case "Networking":
                echo "<p> <font color=Yellow> My Expertise is in Networking.</font></p>";
                break;
            default :
                echo "My Expertise is in neither database, linux nor Networking!.";
                break;    
            }
        ?>
        </body>
        </center>
</  html>
