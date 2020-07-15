<!DOCTYPE html>
<?php 
    include('professions.php'); 
    include('db.php');
    include('avatarPics.php'); 
    ?>
<html>
    <head>
        <title>Sign Up</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="jquery.imgcheckbox.js" > </script>
    </head>

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
        <select id="professions" name="professions" class="w3-select">
            <?php echo $options;?>
        </select required>
        <label>Profession</label></p>

        <p>
            <button onclick="document.getElementById('id01').style.display='block'" class="w3-button w3-black" type="button">choose profile image</button>
        </p>
        <p>
            <button class="w3-button w3-section w3-teal w3-ripple"> SIGN UP </button></p>            
        </form>
        
         <p>Already have an account? Then wtf are you doing here? Go <a href="signIn_Page.php"><button class="w3-button w3-green">Login</button></a>  
        </p>
        </div>
        <div id="id01" class="w3-modal w3-animate-opacity">
                <div class="w3-modal-content">
                    <header class="w3-container w3-teal"> 
                        <span onclick="document.getElementById('id01').style.display='none'" 
                        class="w3-button w3-large w3-display-topright">&times;</span>
                        <h2>Choose a Profile Image</h2>
                    </header>
                    <div class="w3-container">
                    <?php 
                        foreach($avatars as $ava)
                            {?>
                             <p> <?php echo $ava;
                            }?> </p>
                   
                    </div>
                </div>
            </div>   

<script>
    $(document).ready(function(){
$("img").imgCheckbox({

    onload: function(){
        // Do something fantastic!
    },
    onclick: function(el){
    	var isChecked = el.hasClass("imgChked"),
	    imgEl = el.children()[0];  // the img element
	    
	console.log(imgEl.name + " is now " + (isChecked? "checked": "not-checked") + "!");
    },
    "radio" : true
});
});
</script>  
    </body>
</html> 