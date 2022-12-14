<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../src/Registration.css">
    <title>Registration Page</title>
</head>

<body>
    <div class="container">
        <div class="content">
        </div>
        <form id="form" action="welcome.php" method="get">
            <div class="social">
                <div class="title">Get Started</div>
                <div class="question">
                    Already Have an Account? <br />
                    <span>Sign In</span>
                </div>

                <div class="btn">
                    <div class="btn-1">
                        <img src="https://img.icons8.com/color/30/000000/google-logo.png" />
                        Sign Up
                    </div>
                    <div class="btn-2">
                        <img src="https://img.icons8.com/ios-filled/30/ffffff/facebook-new.png" />
                        Sign Up
                    </div>
                </div>

                <div class="or">Or</div>
            </div>

            <div>
                <label for="First name">First Name</label>
                <i class="fas fa-user"></i>
                <input type="text" name="firstname" id="firstname" placeholder="Enter your Firstname" />
                <i class="fas fa-exclamation-circle failure-icon"></i>
                <i class="far fa-check-circle success-icon"></i>
                <div class="error"></div>
            </div>

            <div>
                <label for="lastname">Last Name</label>
                <i class="fas fa-user"></i>
                <input type="text" name="lastname" id="lastname" placeholder="Enter your lastname" />
                <i class="fas fa-exclamation-circle failure-icon"></i>
                <i class="far fa-check-circle success-icon"></i>
                <div class="error"></div>
            </div>

            <div>
                <label for="address">Address</label>
                <i class="far fa-envelope"></i>
                <input type="address" name="address" id="address" placeholder="Enter your Address" />
                <i class="fas fa-exclamation-circle failure-icon"></i>
                <i class="far fa-check-circle success-icon"></i>
                <div class="error"></div>
            </div>

            <div>
                <label for="email">Email</label>
                <i class="far fa-envelope"></i>
                <input type="email" name="email" id="email" placeholder="abc@gmail.com" />
                <i class="fas fa-exclamation-circle failure-icon"></i>
                <i class="far fa-check-circle success-icon"></i>
                <div class="error"></div>
            </div>

            <div>
                <label for="password">Password</label>
                <i class="fas fa-lock"></i>
                <input type="password" name="password" id="password" placeholder="Password " />
                <i class="fas fa-exclamation-circle failure-icon"></i>
                <i class="far fa-check-circle success-icon"></i>
                <div class="error"></div>
            </div>

            <div>
                <label for="password"> Confirm Password</label>
                <i class="fas fa-lock"></i>
                <input type="password" name="Confirm.Pasword" id="Confirm Password" placeholder=" Confirm Password " />
                <i class="fas fa-exclamation-circle failure-icon"></i>
                <i class="far fa-check-circle success-icon"></i>
                <div class="error"></div>
            </div>

            <button type="submit" id="submit">Register</button>
        </form>
    </div>

    <script src="../JS/Registration.js"></script>
</body>

</html>