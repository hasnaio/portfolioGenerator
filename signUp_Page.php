<!DOCTYPE html>
<?php include('professions.php'); ?>
<html>
    <head>
        <title>Sign Up</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">

        <style>
            .modal {
                position:absolute;
                top: 0;
                height: 100%;
                width: 100%;
                display: flex;
                justify-content: center;
                align-items: center;
            }

            .modalContents {
                background-color: #f5f5f5;
                padding: 2rem 4rem;
            }

            .modalCloseBar {
                display: flex;
                justify-content: flex-end;
                margin-right: -2rem;
                margin-top: -.5rem;
                cursor: pointer;
            }

            .modalHidden {
                display:none;
            }
             
        </style>
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

        <!-- <p>
            <button id="selectAvatar" type="button">Select Avatar</button>            
        </p> -->
        
        <p>
            <button class="w3-button w3-section w3-teal w3-ripple"> SIGN UP </button></p>
            
            
        </form>
            <div class="modal modalHidden">
                <div class="modalContents">
                    <div class="modalCloseBar">
                        <span> X </span>
                    </div>
                    <p><img src="iconsTest/icon1.jpg" alt="">
                    <img src="iconsTest/icon2.jpg" alt=""></p>
                    <p><img src="iconsTest/icon3.png" alt="">
                    <img src="iconsTest/icon4.png" alt=""></p>
                    <button class="w3-button w3-section w3-teal w3-ripple" id ="select">select</button>
                </div>
            </div>
        <p>Already have an account? Then wtf are you doing here? Go <a href="signIn_Page.php"><button class="w3-button w3-green">Login</button></a>  
        </p>     
        </div>

        <script>

            const toggleModal = () => {
                document.querySelector ('.modal')
                .classList.toggle('modalHidden');
            };

            document.querySelector ('#selectAvatar')
            .addEventListener('click', toggleModal);

            document.querySelector ('#select')
            .addEventListener('click', toggleModal);

            document.querySelector('.modalCloseBar span')
            .addEventListener('click', toggleModal);
        </script>

    </body>
</html> 