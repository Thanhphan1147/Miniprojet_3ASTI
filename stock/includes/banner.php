<div class="banner">
    <?php 
        if (isset($_GET['Register'])) {
            echo 'Sign up sucessful, you can now login';
        }
    ?>
    <div class="welcome_msg">
        <h1>Our Inspiration </h1>
        <p>
          NOUS, C’EST LE GOÛT <br>
            <br>
            <span>~ STI-3A</span>
        </p>
        <a href="register.php" class="btn">Join us!</a>
    </div>
    <div class="login_div">
        <form action="index.php" method="post" id="login-form">
            <h2>Login</h2>
            <input type="text" name="email" placeholder="Email">
            <input type="password" name="password" placeholder="Password">
            <button class="btn" type="submit" name="login_btn">Sign in</button>
        </form>
    </div>
</div>