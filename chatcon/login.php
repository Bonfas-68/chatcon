<?php include('templates/login2.php'); ?>
<!DOCTYPE html>
<html>
    <head>
        <title>Login Page</title>
        <link rel="stylesheet" href="style.css">
        <style>
            /* Login Popup Card */

            .login-popup{
                position: relative;
                border-radius: .5rem;
                background-color: azure;
                padding: 2rem;


                width: 80%;
                margin: 4rem auto;
            }
            .login-title{
                text-align: center;
                margin: 2rem 0;
            }
            .login-title h2{
                font-size: 2vw;
                font-weight: 500;
                color:maroon;
            }
            .or{
                width: 100%;
                background: linear-gradient(to right bottom, rgba(112,255,31, 0.2), green);
                height: 100%;
                display: flex;
                align-items: center;
                justify-content: center;
            }
            form p{
                font-size: 1.6rem;
                color: #111;
                letter-spacing: 1px;
                padding: 1rem ;
            }
            .or span{
                font-size: 2.6rem;
                color: white;
                padding: 1rem;
                font-weight: 500;
            }

            .login-card{
                display: grid;
                grid-template-columns: 48% 4% 48%;
                align-items: start;
                justify-content: start;
                width: 100%;

            }
            .login-card .login, .login-card .signup{
                border: none;
            }
            .login form, .signup form{
                line-height: 1.5;
            }
            .login .form-control, .signup .form-control{
                margin: 1.2rem;
            }
            .login label, .signup label{
                display: block;
                margin: 0 0 .8rem;
                font-size: 1.8rem;
                color: #111;
                font-weight: 300;
            }
            
            .login .form-control input,
            .signup .form-control input{
                font-size: 1.6rem;
                letter-spacing:1px;
                width: 100%;
                color: #111;
                padding: 1.4rem 2rem;
                border: none;
                background-color: rgba(70, 90, 126, 0.1);
                border-radius: .4rem;
            }
            input:focus{
                outline: none;
            }
            .login .btn-container, .signup .btn-container{
                width: 50%;
                margin: 1.2rem auto;
            }
            .login input[type="submit"], .signup input[type="submit"]{
                display: block;
                padding: 1.2rem 2.4rem;
                border: none;
                background-color: green;
                color: white;
                font-weight: 500;
                font-size: 1.8rem;
                text-transform: capitalize;
                margin-top: 2rem;
                border-radius: .5rem;
                text-align: center;
                cursor:pointer;
                background: linear-gradient(to right bottom, rgba(112,255,31, 0.2), green);

            }
        </style>
    </head>
    <body>
        <?php include('templates/header.php'); ?>
        <div class="login-popup">
            <div class="login-title">
                <h2>LogIn or SignUp</h2>
            </div>
            <div class="login-card">
                <?php if(isset($_GET['error'])){?>
                    <div class="error">
                        <?php echo $_GET['error']; ?>
                    </div>
                <?php } ?>
                <?php if(isset($_GET['success'])){?>
                    <div class="success">
                        <?php echo $_GET['success']; ?>
                    </div>
                <?php } ?>
                <div class="login">
                    <form action="login.php" method="POST">
                        <div class="form-control">
                            <label for="username">Enter Username:</label>
                            <input type="text" name="username"
                            value = "<?php echo (isset($_GET['username']))?$_GET['username']: "" ?>"
                            id="username">
                        </div>
                        <div class="form-control">
                            <label for="password">Enter Password:</label>
                            <input type="password" name="password"
                            id="password">
                        </div>
                        <div class="btn-container">
                            <input type="submit" name="login"
                            value="Log In">
                        </div>
                        <p>Sign up if you have no account!!</p>
                    </form>
                    
                </div>
                
                <div class="or"><span>OR</span></div>
                <div class="signup">
                    <form action="login.php" method="POST">
                        <div class="form-control">
                            <label for="name">Enter Fullname:</label>
                            <input type="text" name="full-name"
                            value = "<?php echo (isset($_GET['full-name']))?$_GET['full-name']: "" ?>
                            "
                            id="full-name">
                        </div>
                        <div class="form-control">
                            <label for="username">Enter Username:</label>
                            <input type="text" name="username"
                            value = "<?php echo (isset($_GET['username']))?$_GET['username']: "" ?>"
                            id="username">
                        </div>
                        <div class="form-control">
                            <label for="email">Enter Email:</label>
                            <input type="email" name="email"
                            value = "<?php echo (isset($_GET['email']))?$_GET['email']: "" ?>"
                            id="email">
                        </div>
                        <div class="form-control">
                            <label for="tel">Phone Number:</label>
                            <input type="tel" name="tel"
                            value = "<?php echo (isset($_GET['tel']))?$_GET['tel']: "" ?>"
                            id="tel">
                        </div>
                        <div class="form-control">
                            <label for="location">Location(Country, County, Current Location):</label>
                            <input type="text" name="location"
                            value = "<?php echo (isset($_GET['location']))?$_GET['location']: "" ?>"
                            id="location"
                            placeholder="Kenya, Nairobi, CBD">
                        </div>
                        <div class="form-control">
                            <label for="password">Enter Password:</label>
                            <input type="password" name="password"
                            id="password">
                        </div>
                        <div class="form-control">
                            <label for="re-enter-password">Re-Enter Password:</label>
                            <input type="password" name="re_enter_password"
                            id="password">
                        </div>
                        <div class="btn-container">
                            <input 
                            type="submit"
                            name="signup"
                            value="Sign Up>">
                        </div>
                    </form>
                    <?php  include('templates/register2.php'); ?>
                </div>
            </div>
        </div>
        <?php include('templates/footer.php'); ?>
        <?php include('templates/copyright.php'); ?>
    </body>
</html>