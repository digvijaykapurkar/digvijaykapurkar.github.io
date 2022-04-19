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
        $fname= "Dr.APj Abdul";
        $lname="Kalam";

    ?>
    <a href="retrive.php?First_name=<?php echo $fname;
    ?>&Last_name=<?php echo $lname; ?>">
    Click here to pass Variable through URL
    </a>
    
</body>
</html>