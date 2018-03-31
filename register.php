<?php
    include("includes/classes/Account.php");

    $account = new Account();
    
    include("includes/handlers/register-handler.php");
    include("includes/handlers/login-handler.php");
    
?>


<html lang="en">
<head>
    <title>Welcome to Slotify!</title>
</head>
<body>
    <div id="inputContainer">
        <form action="register.php" id="loginForm" method="POST">
            <h2>Login to your account</h2>
            <p>
                <label for="loginUsername">Username</label>
                <input id="loginUsername" name="loginUsername" type="text" placeholder="hashimsaleem" required>
            </p>
            <p>
                <label for="loginPassword">Password</label>
                <input id="loginPassword" name="loginPassword" type="password" required>
            </p>

            <button type="submit" name="loginButton">LOG IN</button>
            
        </form>

        <form action="register.php" id="registerForm" method="POST">
            <h2>Create your free account</h2>
            <p>
                <?php echo $account->getError("Your username must be between 5 and 25 characters"); ?>
                <label for="username">Username</label>
                <input id="username" name="username" type="text" placeholder="username" required>
            </p>
            <p>
                <label for="firstName">First name</label>
                <input id="firstName" name="firstName" type="text" placeholder="First name" required>
            </p>
            <p>
                <label for="lastName">Last name</label>
                <input id="lastName" name="lastName" type="text" placeholder="Last name" required>
            </p>
            <p>
                <label for="email">Email</label>
                <input id="email" name="email" type="email" placeholder="Email" required>
            </p>
            <p>
                <label for="email2">Confirm email</label>
                <input id="email2" name="email2" type="email" placeholder="Confirm email" required>
            </p>
            <p>
                <label for="password">Password</label>
                <input id="password" name="password" type="password" required>
            </p>

            <p>
                <label for="password2">Confirm password</label>
                <input id="password2" name="password2" type="password" required>
            </p>

            <button type="submit" name="registerButton">SIGN UP</button>
            
        </form>
    </div>

</body>
</html>