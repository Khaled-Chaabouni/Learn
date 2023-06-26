<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <link rel="stylesheet" href="header.css?v=<?php echo time(); ?>">
    </head>
    <body>
        <?php
            require_once'header.php';
        ?>
        <!---------------------------------- REGISTER FORM :  ---------------------------------->
        <div class="Account">
            <section id="Register" style="margin-top: 6em">
                <div class="RegisterForm">
                    <h1 id="heading" >Register</h1><br>
                    <form id="Reg" action="http://localhost/Projects/LearnAccount/LearnRegister.php" method="POST" enctype="multipart/form-data">
                        <input type="text" id="fname" name="firstname" placeholder="First name" pattern="[a-zA-Z]{4,}" required autofocus>
                        <input type="text" id="lname" name="lastname" placeholder="Last name" required  pattern="[a-zA-Z]{4,}"><br>
                        <input type="email" id="email" name="email" placeholder="Email" required  pattern="[A-Za-z0-9._%+-]+@[A-Za-z0-9.-]+\.[A-Za-z]{2,4}$"><br>                   
                        <input type="password" id="pword" name="password" placeholder="Password" required minlength="6" ><br>
                        <input type="tel" id="number" name="number" placeholder="Number" required  pattern="[0-9]{6,}"><br>
                        <label for="bday">Birthday</label><br>
                        <input type="date" id="bday" name="birthday" required><br>
                        <label>Gender</label><br>
                            <div class="gender">
                                <input type="radio" id="male" name="gender" value="male">
                                <label for="male"><span></span><span></span>Male</label><br>
                                <input type="radio" id="female" name="gender" value="female">
                                <label for="female">Female</label><br>
                            </div>
                        <input type="file" id="primg" name="profileimg" value="Upload Profile Picture"><br><br>
                        <input type="submit" id="submit" name="submit" value="Sign up" class="btn btn-primary"><br>
                        <a href="javascript:toggleMenu();"  >Already have an account ? </a>
                    </form>
                </div>
                
            </section>

            <!----------------------------------- LOGIN FORM :  ----------------------------------->

            <section id="Login" style="margin-top: 50em">
                <div class="LoginForm">
                    <h1 id="heading">Login</h1><br><br><br><br><br><br><br>
                    <form action="LearnLogin.php" method="POST">
                        <input type="email" id="email" name="email" placeholder="Email" required  pattern="[A-Za-z0-9._%+-]+@[A-Za-z0-9.-]+\.[A-Za-z]{2,4}$"><br>                    
                        <input type="password" id="pword" name="password" placeholder="Password" required minlength="6" ><br><br>
                        <input type="submit" id="submit" name="submit" value="Sign in" class="btn btn-primary"><br>
                        <a href="javascript:toggleMenu();" >Don't have an account ?</a>
                    </form>
                </div>
            </section>
        </div>
        <!------------------------------------- SCRIPT :  ------------------------------------->

        <script>
            function toggleMenu(){
                if(document.getElementById("Register").style.marginTop == "6em")
                {
                    document.getElementById("Register").style.marginTop="50em";
                    document.getElementById("Login").style.marginTop="6em";
                }
                else{
                    document.getElementById("Register").style.marginTop="6em";
                    document.getElementById("Login").style.marginTop="50em";
                }
            }
        </script>
    </body> 