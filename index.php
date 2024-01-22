<?php

?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        form {
            width: 400px;
            background: #1200ff;
            margin-left: 500px;
            padding: 10px 15px;
            margin-top: 200px;
            border-radius: 5px;
        }
        input#name,#email,#phone,#password {
            box-shadow: none !important;
            width: 95%;
            border-radius: 10px;
            padding: 10px 10px;
            margin-top: 10px;
        }

        input#submit {
            margin-top: 10px;
            padding: 10px 20px;
            border-radius: 10px;
            cursor: pointer;
        }
    </style>
</head>
<body>
<form action="data.php" method="post">
    <input type="text" name="name" id="name" placeholder="Enter Your Name">
    <br>
    <input type="email" name="email" id="email" placeholder="Enter Your Email">
    <br>
    <input type="number" name="phone" id="phone" placeholder="Your Phone Number">
    <br>
    <input type="password" name="password" id="password" placeholder="Your Password">
    <br>
    <input type="submit" name="submit" id="submit" value="Submit">
</form>
</body>
</html>
<?php