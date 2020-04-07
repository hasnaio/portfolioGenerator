<!DOCTYPE html>
<html>
<title>Log In</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<body>

<header class="w3-container w3-teal">
  <h3>LOG IN</h3>
</header>


<div class="w3-container w3-margin-top w3-padding w3-display-middle w3-third">

    <form action="signIn.php" method="POST" class="w3-container w3-card-4 " >
    
    <p>
    <input class="w3-input" type="text" name="username" style="width:100%" required>
    <label>Name</label></p>

    <p>
    <input class="w3-input" type="password" name="password" style="width:100%" required>
    <label>Password</label></p>
    
    <p>
    <button class="w3-button w3-section w3-teal w3-ripple" name="login"> LOG IN </button></p>

    </form>
         <p> 
         You don't have an account? Then why are you here???????????????????????? GO REGISTER DUMMY D:< !
         <a href="signUp_Page.php"><button class="w3-button w3-blue">Register</button></a>
         </p>
    </div>

</body>
</html> 