<?php
    include_once "header.php";
?>

<section class="index-intro">
    <div class="index-intro-bg">
        <div class="wrapper">
            <div class="index-intro-c1">
                <div class="video"></div>
                <p>I Love cisc3003, it is wonderful.I Love cisc3003, it is wonderful.I Love cisc3003, it is wonderful.I Love cisc3003, it is wonderful.I Love cisc3003, it is wonderful.I Love cisc3003, it is wonderful.I Love cisc3003, it is wonderful.I Love cisc3003, it is wonderful.I Love cisc3003, it is wonderful.I Love cisc3003, it is wonderful.</p>
            </div>
            <div class="index-intro-c2">
                <h2>This is<br>Individual-03<br>Personal Profile</h2>
                <a href="#">Let's try</a>
            </div>
        </div>
    </div>
</section>

<section class="index-login">
    <div class="wrapper">
        <div class="index-login-signup">
            <h4>SIGN UP</h4>
            <p>Don't have an account yet? Sign up here!</p>
            <form action="includes/signup.inc.php" method="post">
                <input type="text" name="uid" placeholder="Username">
                <input type="password" name="pwd" placeholder="Password">
                <input type="password" name="pwdrepeat" placeholder="Repeat Password">
                <input type="text" name="email" placeholder="E-mail">
                <br>
                <button type="submit" name="submit">SIGN UP</button>
            </form>
        </div>
        <div class="index-login-login">
            <h4>LOGIN</h4>
            <p>Don't have an account yet? Sign up here!</p>
            <form action="includes/login.inc.php" method="post">
                <input type="text" name="uid" placeholder="Username">
                <input type="password" name="pwd" placeholder="Password">
                <br>
                <button type="submit" name="submit">LOGIN</button>
            </form>
        </div>
    </div>
</section>
<footer>
<h1>DC228265 Guan Zihan</h1>
</footer>  
</body>
</html>