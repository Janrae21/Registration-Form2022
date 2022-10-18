<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../src/welcome.css">
    <title>Welcome</title>
</head>

<body>
    <div class="container">
        <div class="container-content">
            <h4>Your Firstname is : <?php echo $_GET["firstname"]; ?></h4>
            <h4>Your Lastname is: <?php echo $_GET["lastname"]; ?></h4>
            <h4>Your Address is: <?php echo $_GET["address"]; ?></h4>
            <h4>Your email is : <?php echo $_GET["email"]; ?></h4>
            <h4>Your Password is : <?php echo $_GET["password"]; ?></h4>
        </div>
    </div>
</body>

</html>