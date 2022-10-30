<html lang="en">
    <head>
        <title>Food Ordering System | Account</title>
        <link rel="stylesheet" href="./css/index.css">
    </head>
    <body>
        <div class="login">
            <h2 class="title">Login</h2>

            <div class="forms">
                <form class="loginForm" action="userLogin.php" method="post">
                    <input class="input" type="text" placeholder="Email" name="email">
                    <input class="input" type="password" placeholder="Password" name="password">
                    <input class="input submit-btn" type="submit" value="Login as User">
                </form>

                <form class="loginForm" action="ownerLogin.php" method="post">
                    <input class="input" type="text" placeholder="Email" name="email">
                    <input class="input" type="password" placeholder="Password" name="password">
                    <input class="input submit-btn" type="submit" value="Login as Owner">
                </form>
            </div>

            <p class="registerlink">Not a user? Register</p>
        </div>

        <div class="register" style="display: none">
            <h2 class="title">Register</h2>

            <div class="forms">
                <form class="registerForm" action="userRegister.php" method="post">
                    <input class="input" type="text" placeholder="Email" name="email">
                    <input class="input" type="password" placeholder="Password" name="password">
                    <input class="input submit-btn" type="submit" value="Register as User">
                </form>

                <form class="registerForm" action="ownerRegister.php" method="post">
                    <input class="input" type="text" placeholder="Email" name="email">
                    <input class="input" type="password" placeholder="Password" name="password">
                    <input class="input submit-btn" type="submit" value="Register as Owner">
                </form>
            </div>

            <p class="loginlink">Already have account? Login</p>
        </div>

        <?php
            if (isset($_COOKIE['userEmail']))
                header("Location: userHome.php");
            else if (isset($_COOKIE['ownerEmail']))
                header("Location: ownerHome.php");
        ?>

        <script src="./js/index.js"></script>
    </body>
</html>
