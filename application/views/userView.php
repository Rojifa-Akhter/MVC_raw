<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User View</title>
    <?php linkCSS("assets/css/style.css");?>
</head>
<body>
    <form action="<?php echo BASE_URL; ?>/userController/signup" method="post">
        <input type="text" name="fullName" placeholder="Fulname..."><br><br>
        <input type="email" name="email" placeholder="Email..."><br><br>
        <input type="password" name="password" placeholder="Password..."><br><br>
        <input type="submit" value="Register"<br>

    </form>
    <img src="<?php echo BASE_URL;?>/assets/img/farmer(1).jpg" alt="farmer">
    <?php linkJS("assets/js/app.js");?>
</body>
</html>