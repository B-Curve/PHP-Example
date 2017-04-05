<body>
  <section>
    <div id="banner">
      <a href="#" class="bannerChild">
        <h1>PHP WEBSITE</h1>
        <h2>Brandon Kervin</h2>
      </a>
    </div>
    <nav class="navbar">
      <ul>
        <li><a href="#" class="selected">HOME</a></li>
        <li><a href="#">ACCOUNTS</a></li>
        <li><a href="#">FORUMS</a></li>
      </ul>
    </nav>
    <div class="container">
      <header class="cheader">Welcome!</header>
      <p>
        My purpose in building this website is to express my knowledge about PHP
        and mySQL by creating a database that stores information entered by a visitor
        when they click the <b>LOGIN</b> tab. The Website is
        also adaptive to screen size!
      </p>
    </div>
    <div class="container">
      <header class="cheader">Website Data</header>

    </div>
    <div class="container" id="accountBox">
      <header class="cheader">Create Account/Log-In</header>
      <div id="sign">
        <form method="post" action="inc/createAccount.php">
          *Username: <br><input type='text' name='usr' value="<?php $usr; ?>"><br>
          *Password: <br><input type='password' name='pass' value="<?php $pass; ?>"><br>
          *Confirm Password: <br><input type='password' name='passC' value="<?php $passC; ?>"><br>
          E-mail Address: <br><input type='text' name='email' value="<?php $email; ?>"><br>
          <br><input type="submit" name="signSubmit" value="SIGN UP"/>
      </form>
      </div>
      <div id="log">
        <form method="post" action="inc/logIn.php">
          Username: <br><input type='text' name='usrLog' value="<?php $usrLog; ?>"><br>
          Password: <br><input type='password' name='passLog' value="<?php $passLog; ?>"><br>
          <br><input type="submit" name="logSubmit" value="SIGN IN"/>
        </form>
      </div>
    </div>
  </section>
  <footer>
    <p>&copy; Brandon Kervin <?php echo date("M Y")?></P>
  </footer>
</body>
</html>
