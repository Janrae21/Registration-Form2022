<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../src/welcome.css">
    <script src="../JS/welcome.js"></script>
    <title>Welcome</title>
</head>

<body>
    <video autoplay muted loop id="bgvid">
        <source src="../Video and Images/movie.mp4" type="video/mp4">
    </video>
    <!-- <video src="../Video and Images/movie.mp4" id="bgvid" playsinline autoplay muted loop>
    </video> -->
    <div id="welcome">
        <h1>Welcome</h1>
        <h4>Your Firstname is : <?php echo $_GET["firstname"]; ?></h4>
        <h4>Your Lastname is: <?php echo $_GET["lastname"]; ?></h4>
        <h4>Your Address is: <?php echo $_GET["address"]; ?></h4>
        <h4>Your email is : <?php echo $_GET["email"]; ?></h4>
        <h4>Your Password is : <?php echo $_GET["password"]; ?></h4>
    </div>
</body>

</html>