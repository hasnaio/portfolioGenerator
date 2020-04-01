<!DOCTYPE html>
<html>
    <title>Sign Up</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">

    <body>

    <header class="w3-container w3-teal">
    <h2>SIGN UP</h2>
    </header>
        
    <div class="w3-container w3-margin-top w3-padding w3-display-middle w3-third">
        <!-- GET = Non-secure data, you get faster access + shows on tab -->
        <!-- POST = for secure data, won't show anywhere nigger -->
        <form action="signUp.php" method="POST" class="w3-container w3-card-4">
        
        <p>
        <input class="w3-input" type="text" style="width:100%" name="username" required>
        <label>Username</label></p>

        <p>
        <input class="w3-input" type="text" style="width:100%" name="displayname" required>
        <label>Display Name</label></p>

        <p>
        <input class="w3-input" type="password" style="width:100%" name="password" required>
        <label>Password</label></p>
        
        
        <p>
        <button class="w3-button w3-section w3-teal w3-ripple"> SIGN UP </button></p>
        
        </form>
        
        </div>

    </body>
</html> 