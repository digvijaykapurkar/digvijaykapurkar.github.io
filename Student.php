<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration</title>
    <style>
        .main{
            width : 30%;
            margin : 2em auto;
            border : 2px solid black;
            padding : 1em;
        }
        main input[type="Submit"]
        {
            width : 95%;
            margin : 5em;
            border : 1px solid black;
            padding : 5em;
        }
        main input[type="Password"]
        {
            width : 95%;
            margin : 5em;
            border : 1px solid black;
            padding : 5em;
        }
        main input[type="Text"],.main input[type="Email"]
        {
            width : 45%;
            margin : 5em;
            border : 1px solid black;
            padding : 2em;
        }
    </style>

</head>
<body>
    <div class="main">
        <form method="post" action="StudentRegistration.php">
            <h2>Student Registration</h2>
            <input type="Text" name="fname" placeholder="First Name">
            <input type="Text" name="lname" placeholder="Last Name">
            <input type="Email" name="email" placeholder="Email">
            <input type="Text" name="mobile" placeholder="Mobile">
            <input type="Text" name="city" placeholder="City"><br>
            <hr>
            Gender<br>
            <input type="radio" name="gender" value="male">Male<br>
            <input type="radio" name="gender" value="Female">Female<br>
            <hr>
            Hobbies<br>
            <input type="checkbox" name="hobby[ ]" value="Cricket">Cricket<br>
            <input type="checkbox" name="hobby[ ]" value="Football">Football<br>
            <input type="checkbox" name="hobby[ ]" value="Volleyball">Volleyball<br>
            <input type="checkbox" name="hobby[ ]" value="Chess">Chess<br>
            <hr>
            <input type="Password" name="pass" placeholder="Password"><br>
            <br>
            <input type="Submit" name="Submit" value="Register">
    </form>
    </div>    

</body>
</html>